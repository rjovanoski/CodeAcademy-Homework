<?php
include 'db.inc.php';

$error = "";
$errors = array();
$message = "";
$messages = array();
$recipeName = "";
$recipeIngredients = "";
$recipePreparationTime = "";
$recipePreparation = "";
$recipeDescription = "";

/*********************************NEW RECIPE ADMIN****************************/
//Send recipe to administrator for review
if (isset($_POST['new-recipe-submit'])) {
    //Get the user who will post the recipe
    $userId = $_SESSION['name']['id'];
    $recipeName = mysqli_real_escape_string($conn, ucfirst($_POST['recipe-name']));
    $recipeType = mysqli_real_escape_string($conn, $_POST['recipe-type']);
    $recipeIngredients = mysqli_real_escape_string($conn, $_POST['ingredients']);
    $recipePreparationTime = mysqli_real_escape_string($conn, $_POST['preparation-time']);
    $recipePreparation = mysqli_real_escape_string($conn, $_POST['preparation']);
    $recipeDescription = mysqli_real_escape_string($conn, $_POST['description']);
    //Recipe image temporary folder
    $dirRecipeImage = "img/img_temp/";
    $recipeImageName = basename($_FILES['recipe-image']['name']);
    $recipeImageError = $_FILES['recipe-image']['error'];
    $date_added = date('Y-m-d H:m:s');

    //ALL FIELDS ARE REQUIRED

    // If no recipe name is entered display error message
    if (empty($recipeName)) {
        array_push($errors, "Recipe name is required!");
    }
    // If no recipe type is entered display error message
    if (empty($recipeType)) {
        array_push($errors, "Please choose recipe type");
    }
    // If no recipe ingredients is entered display error message
    if (empty($recipeIngredients)) {
        array_push($errors, "Recipe ingredients are required!");
    }
    // If no recipe preparation time is entered display error message
    if (empty($recipePreparationTime)) {
        array_push($errors, "Recipe preparation time is required!");
    }
    // If no recipe preparation is entered display error message
    if (empty($recipePreparation)) {
        array_push($errors, "Preparation is required");
    }
    // If no recipe decription is entered display error message
    if (empty($recipeDescription)) {
        array_push($errors, "Recipe description is required!");
    }
    // If no recipe image is entered display error message
    if (empty($recipeImageName)) {
        array_push($errors, "Please upload image for the recipe!");
    }else {
        //Get the image extension
        $fileExt = explode('.', $recipeImageName);
        //Make the image extension lovercase
        $fileActualExtension = strtolower(end($fileExt));

        //Set the file types that are alowed for recipe image  
        $allowedFile = array('jpg', 'jpeg', 'png');
        //Check if the extension is allowed
        if (in_array($fileActualExtension, $allowedFile)) {
    
            if ($recipeImageError === 0 && count($errors) == 0) {
                //Copy recipe image to temporary folder
                move_uploaded_file($_FILES['recipe-image']['tmp_name'], $dirRecipeImage.$recipeImageName);
    
            }else {
                //if an error uploading image, display error message
                $error = array_push($errors, "Error uploading file");
            }
        }else {
            //if file type is not supported display error message
            $error = array_push($errors, "File Type is not supported");
        }   
    }
    
  
    if (count($errors) == 0) {
        //Insert values to administrator recipes table
        $sql = "INSERT INTO admin_recipes (user_id, recipe_type, recipe_name, recipe_ingredients, recipe_preparation_time, recipe_preparation, recipe_description, recipe_image, date_added) 
        VALUES ('$userId', '$recipeType', '$recipeName', '$recipeIngredients', '$recipePreparationTime', '$recipePreparation', '$recipeDescription', '$recipeImageName', '$date_added')";
        mysqli_query($conn, $sql);
        //Send message to the user for successfull recipe submit to administrator
        $message = array_push($messages, "Recipe".' '. $recipeName .' ' ."Submitted Successfully.
        <p>Be Patient, if the recipe and it's content are OK, your recipe will be posted to your recipe page and our WEB SITE.</p>");
    
    }else {
        //if an error display error message
        $error = array_push($errors, "Recipe".' '. $recipeName .' ' ."NOT Submitted!");
    } 
    
}    
    
    //Display the full content of all the recipes that users have submitted to administrator page for approval
    $sqlRecipes = "SELECT * FROM admin_recipes";
    $resultRecipes = mysqli_query($conn, $sqlRecipes);
    $rowRecipes = array();
    $dirRecipeImage = "img/img_temp/";

    while ($rowRecipe = mysqli_fetch_assoc($resultRecipes)) {
        
        $rowRecipes[] = $rowRecipe;

    }

//Fetch all recipes from admin_recipes table to insert recipes to appropriate recipe table in database
$sql = "SELECT * FROM admin_recipes";

if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        
        while ($row = mysqli_fetch_array($result)) {

            $recipeId = $row['id'];
            $userId = $row['user_id'];
            $recipeType = $row['recipe_type'];
            $recipeName = str_replace(' ', '', strtolower($row['recipe_name']));
            $recipeActualName = $row['recipe_name'];
            $recipeIngredients = $row['recipe_ingredients'];
            $recipePreparationTime = $row['recipe_preparation_time'];
            $recipePreparation = $row['recipe_preparation'];
            $recipeDescription = $row['recipe_description'];
            $recipeImage = $row['recipe_image'];
            $dateAdded = date('Y-m-d H:m:s');
            $dirRecipeImage = "img/img_temp/";

            if (isset($_POST[$recipeId])) {

                if (count($errors) == 0) {
                //Administrator choses to delete the recipe from administrator recipe table, after review success or after review problem with recipe content
                $sql = "DELETE FROM admin_recipes WHERE id = '$recipeId'";
                mysqli_query($conn, $sql);
                //Deletes the recipe from temporary folder
                unlink($dirRecipeImage.$recipeImage);
                //Send message that the recipe is deleted from table
                $message = array_push($messages, "Recipe".' '. $recipeActualName .' ' ."Deleted Successfully from admin recipes");

                }else {
                    array_push($errors, "Recipe".' '. $recipeActualName .' ' ."NOT Deleted from admin recipes");
                }

            }

            if (isset($_POST[$recipeName]) && $row['recipe_type'] == 'breakfast'){

                if (count($errors) == 0) {
                    //Insert breakfast recipes content to breakfast_recipes table after review success
                    $sql = "INSERT INTO breakfast_recipes (user_id, name, ingredients, preparation_time, preparation, description, image, date_added)
                    VALUES ('$userId', '$recipeActualName', '$recipeIngredients', '$recipePreparationTime', '$recipePreparation', '$recipeDescription', '$recipeImage', '$dateAdded')";
                    mysqli_query($conn, $sql);
                    //Copy recipe image from temporary to breakfast folder
                    copy($dirRecipeImage.$recipeImage, "img/breakfast/$recipeImage");
                    //Display message after aproval 
                    $message = array_push($messages, "Recipe".' '. $recipeActualName .' ' ."Posted Successfully"); 
                
                }else {
                    array_push($errors, "Recipe".' '. $recipeActualName .' ' ."NOT Posted");
                }
            }           
            
            if (isset($_POST[$recipeName]) && $row['recipe_type'] == 'bread') {

                if (count($errors) == 0) {
                    //Insert bread recipes content to bread_recipes table after review success
                    $sql = "INSERT INTO bread_recipes (user_id, name, ingredients, preparation_time, preparation, description, image, date_added)
                    VALUES ('$userId', '$recipeActualName', '$recipeIngredients', '$recipePreparationTime', '$recipePreparation', '$recipeDescription', '$recipeImage', '$dateAdded')";
                    mysqli_query($conn, $sql);
                    //Copy recipe image from temporary to bread folder
                    copy($dirRecipeImage.$recipeImage, "img/bread/$recipeImage");
                    //Display message after aproval 
                    $message = array_push($messages, "Recipe".' '. $recipeActualName .' ' ."Posted Successfully");

                }else {
                    array_push($errors, "Recipe".' '. $recipeActualName .' ' ."NOT Posted");
                }
            }
            
            if (isset($_POST[$recipeName]) && $row['recipe_type'] == 'cake') {

                if (count($errors) == 0) {
                //Insert cake recipes content to cake_recipes table after review success
                $sql = "INSERT INTO cake_recipes (user_id, name, ingredients, preparation_time, preparation, description, image, date_added)
                VALUES ('$userId', '$recipeActualName', '$recipeIngredients', '$recipePreparationTime', '$recipePreparation', '$recipeDescription', '$recipeImage', '$dateAdded')";
                mysqli_query($conn, $sql);  
                //Copy recipe image from temporary to cake folder
                copy($dirRecipeImage.$recipeImage, "img/cake/$recipeImage"); 
                //Display message after aproval 
                $message = array_push($messages, "Recipe".' '. $recipeActualName .' ' ."Posted Successfully");   
                
                }else {
                    array_push($errors, "Recipe".' '. $recipeActualName .' ' ."NOT Posted");
                }

            }

            if (isset($_POST[$recipeName]) && $row['recipe_type'] == 'burger') {

                if (count($errors) == 0) {
                //Insert burger recipes content to burger_recipes table after review success
                $sql = "INSERT INTO burger_recipes (user_id, name, ingredients, preparation_time, preparation, description, image, date_added)
                VALUES ('$userId', '$recipeActualName', '$recipeIngredients', '$recipePreparationTime', '$recipePreparation', '$recipeDescription', '$recipeImage', '$dateAdded')";
                mysqli_query($conn, $sql);
                //Copy recipe image from temporary to burger folder
                copy($dirRecipeImage.$recipeImage, "img/burger/$recipeImage");
                //Display message after aproval 
                $message = array_push($messages, "Recipe".' '. $recipeActualName .' ' ."Posted Successfully");

                }else {
                    array_push($errors, "Recipe".' '. $recipeActualName .' ' ."NOT Posted");
                }

            }
            
            if (isset($_POST[$recipeName]) && $row['recipe_type'] == 'meat') {

                if (count($errors) == 0) {
                //Insert meat recipes content to meat_recipes table after review success
                $sql = "INSERT INTO meat_recipes (user_id, name, ingredients, preparation_time, preparation, description, image, date_added)
                VALUES ('$userId', '$recipeActualName', '$recipeIngredients', '$recipePreparationTime', '$recipePreparation', '$recipeDescription', '$recipeImage', '$dateAdded')";
                mysqli_query($conn, $sql);
                //Copy recipe image from temporary to meat folder
                copy($dirRecipeImage.$recipeImage, "img/meat/$recipeImage");
                //Display message after aproval 
                $message = array_push($messages, "Recipe".' '. $recipeActualName .' ' ."Posted Successfully");

                }else {
                    array_push($errors, "Recipe".' '. $recipeActualName .' ' ."NOT Posted");
                }

            }
            
            if (isset($_POST[$recipeName]) && $row['recipe_type'] == 'pasta') {

                if (count($errors) == 0) {
                //Insert pasta recipes content to pasta_recipes table after review success
                $sql = "INSERT INTO pasta_recipes (user_id, name, ingredients, preparation_time, preparation, description, image, date_added)
                VALUES ('$userId', '$recipeActualName', '$recipeIngredients', '$recipePreparationTime', '$recipePreparation', '$recipeDescription', '$recipeImage', '$dateAdded')";
                mysqli_query($conn, $sql);
                //Copy recipe image from temporary to pasta folder
                copy($dirRecipeImage.$recipeImage, "img/pasta/$recipeImage");
                //Display message after aproval 
                $message = array_push($messages, "Recipe".' '. $recipeActualName .' ' ."Posted Successfully");

                }else {
                    array_push($errors, "Recipe".' '. $recipeActualName .' ' ."NOT Posted");
                }

            }

            if (isset($_POST[$recipeName]) && $row['recipe_type'] == 'pizza') {

                if (count($errors) == 0) {
                //Insert pizza recipes content to pizza_recipes table after review success
                $sql = "INSERT INTO pizza_recipes (user_id, name, ingredients, preparation_time, preparation, description, image, date_added)
                VALUES ('$userId', '$recipeActualName', '$recipeIngredients', '$recipePreparationTime', '$recipePreparation', '$recipeDescription', '$recipeImage', '$dateAdded')";
                mysqli_query($conn, $sql);
                //Copy recipe image from temporary to pizza folder
                copy($dirRecipeImage.$recipeImage, "img/pizza/$recipeImage");
                //Display message after aproval 
                $message = array_push($messages, "Recipe".' '. $recipeActualName .' ' ."Posted Successfully");

                }else {
                    array_push($errors, "Recipe".' '. $recipeActualName .' ' ."NOT Posted");
                }

            }
            
            if (isset($_POST[$recipeName]) && $row['recipe_type'] == 'soup') {

                if (count($errors) == 0) {
                //Insert soup recipes content to soup_recipes table after review success
                $sql = "INSERT INTO soup_recipes (user_id, name, ingredients, preparation_time, preparation, description, image, date_added)
                VALUES ('$userId', '$recipeActualName', '$recipeIngredients', '$recipePreparationTime', '$recipePreparation', '$recipeDescription', '$recipeImage', '$dateAdded')";
                mysqli_query($conn, $sql);
                //Copy recipe image from temporary to soup folder
                copy($dirRecipeImage.$recipeImage, "img/soup/$recipeImage");
                //Display message after aproval 
                $message = array_push($messages, "Recipe".' '. $recipeActualName .' ' ."Posted Successfully");

                }else {
                    array_push($errors, "Recipe".' '. $recipeActualName .' ' ."NOT Posted");
                }

            }
            
            if (isset($_POST[$recipeName]) && $row['recipe_type'] == 'vegan') {

                if (count($errors) == 0) {
                //Insert vegan recipes content to vegan_recipes table after review success
                $sql = "INSERT INTO vegan_recipes (user_id, name, ingredients, preparation_time, preparation, description, image, date_added)
                VALUES ('$userId', '$recipeActualName', '$recipeIngredients', '$recipePreparationTime', '$recipePreparation', '$recipeDescription', '$recipeImage', '$dateAdded')";
                mysqli_query($conn, $sql);
                //Copy recipe image from temporary to vegan folder
                copy($dirRecipeImage.$recipeImage, "img/vegan/$recipeImage");
                //Display message after aproval 
                $message = array_push($messages, "Recipe".' '. $recipeActualName .' ' ."Posted Successfully");

                }else {
                    array_push($errors, "Recipe".' '. $recipeActualName .' ' ."NOT Posted");
                }

            }            
        }
    }
}

mysqli_close($conn);