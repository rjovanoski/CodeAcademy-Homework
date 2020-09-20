<?php 

//GET content from every recipe the user has submitted to display on his recipe page

if (isset($_SESSION['name'])) {
    
    include 'includes/db.inc.php';

    $sqlBreakfastUserRecipes = "SELECT * FROM breakfast_recipes WHERE user_id ='".$_SESSION['name']['id']."'";
    $resultBreakfastUserRecipes = mysqli_query($conn, $sqlBreakfastUserRecipes);
    $rowBreakfastUserRecipes = array();
    $dirBreakfastRecipeImage = "img/breakfast/";

    while ($rowBreakfastUserRecipe = mysqli_fetch_assoc($resultBreakfastUserRecipes)) {
        
        $rowBreakfastUserRecipes[] = $rowBreakfastUserRecipe;

    }

    mysqli_close($conn);
}

if (isset($_SESSION['name'])) {
    
    include 'includes/db.inc.php';

    $sqlBreadUserRecipes = "SELECT * FROM bread_recipes WHERE user_id ='".$_SESSION['name']['id']."'";
    $resultBreadUserRecipes = mysqli_query($conn, $sqlBreadUserRecipes);
    $rowBreadUserRecipes = array();
    $dirBreadRecipeImage = "img/bread/";

    while ($rowBreadUserRecipe = mysqli_fetch_assoc($resultBreadUserRecipes)) {
        
        $rowBreadUserRecipes[] = $rowBreadUserRecipe;

    }
    
    mysqli_close($conn);
}

if (isset($_SESSION['name'])) {
    
    include 'includes/db.inc.php';

    $sqlBurgerUserRecipes = "SELECT * FROM burger_recipes WHERE user_id ='".$_SESSION['name']['id']."'";
    $resultBurgerUserRecipes = mysqli_query($conn, $sqlBurgerUserRecipes);
    $rowBurgerUserRecipes = array();
    $dirBurgerRecipeImage = "img/burger/";

    while ($rowBurgerUserRecipe = mysqli_fetch_assoc($resultBurgerUserRecipes)) {
        
        $rowBurgerUserRecipes[] = $rowBurgerUserRecipe;

    }
    
    mysqli_close($conn);
}

if (isset($_SESSION['name'])) {
    
    include 'includes/db.inc.php';

    $sqlPizzaUserRecipes = "SELECT * FROM pizza_recipes WHERE user_id ='".$_SESSION['name']['id']."'";
    $resultPizzaUserRecipes = mysqli_query($conn, $sqlPizzaUserRecipes);
    $rowPizzaUserRecipes = array();
    $dirPizzaRecipeImage = "img/pizza/";

    while ($rowPizzaUserRecipe = mysqli_fetch_assoc($resultPizzaUserRecipes)) {
        
        $rowPizzaUserRecipes[] = $rowPizzaUserRecipe;

    }
    
    mysqli_close($conn);
}

if (isset($_SESSION['name'])) {
    
    include 'includes/db.inc.php';

    $sqlPastaUserRecipes = "SELECT * FROM pasta_recipes WHERE user_id ='".$_SESSION['name']['id']."'";
    $resultPastaUserRecipes = mysqli_query($conn, $sqlPastaUserRecipes);
    $rowPastaUserRecipes = array();
    $dirPastaRecipeImage = "img/pasta/";

    while ($rowPastaUserRecipe = mysqli_fetch_assoc($resultPastaUserRecipes)) {
        
        $rowPastaUserRecipes[] = $rowPastaUserRecipe;

    }
    
    mysqli_close($conn);
}

if (isset($_SESSION['name'])) {
    
    include 'includes/db.inc.php';

    $sqlMeatUserRecipes = "SELECT * FROM meat_recipes WHERE user_id ='".$_SESSION['name']['id']."'";
    $resultMeatUserRecipes = mysqli_query($conn, $sqlMeatUserRecipes);
    $rowMeatUserRecipes = array();
    $dirMeatRecipeImage = "img/meat/";

    while ($rowMeatUserRecipe = mysqli_fetch_assoc($resultMeatUserRecipes)) {
        
        $rowMeatUserRecipes[] = $rowMeatUserRecipe;

    }
    
    mysqli_close($conn);
}

if (isset($_SESSION['name'])) {
    
    include 'includes/db.inc.php';

    $sqlVeganUserRecipes = "SELECT * FROM vegan_recipes WHERE user_id ='".$_SESSION['name']['id']."'";
    $resultVeganUserRecipes = mysqli_query($conn, $sqlVeganUserRecipes);
    $rowVeganUserRecipes = array();
    $dirVeganRecipeImage = "img/vegan/";

    while ($rowVeganUserRecipe = mysqli_fetch_assoc($resultVeganUserRecipes)) {
        
        $rowVeganUserRecipes[] = $rowVeganUserRecipe;

    }
    
    mysqli_close($conn);
}

if (isset($_SESSION['name'])) {
    
    include 'includes/db.inc.php';

    $sqlCakeUserRecipes = "SELECT * FROM cake_recipes WHERE user_id ='".$_SESSION['name']['id']."'";
    $resultCakeUserRecipes = mysqli_query($conn, $sqlCakeUserRecipes);
    $rowCakeUserRecipes = array();
    $dirCakeRecipeImage = "img/cake/";

    while ($rowCakeUserRecipe = mysqli_fetch_assoc($resultCakeUserRecipes)) {
        
        $rowCakeUserRecipes[] = $rowCakeUserRecipe;

    }
    
    mysqli_close($conn);
}

if (isset($_SESSION['name'])) {
    
    include 'includes/db.inc.php';

    $sqlSoupUserRecipes = "SELECT * FROM soup_recipes WHERE user_id ='".$_SESSION['name']['id']."'";
    $resultSoupUserRecipes = mysqli_query($conn, $sqlSoupUserRecipes);
    $rowSoupUserRecipes = array();
    $dirSoupRecipeImage = "img/soup/";

    while ($rowSoupUserRecipe = mysqli_fetch_assoc($resultSoupUserRecipes)) {
        
        $rowSoupUserRecipes[] = $rowSoupUserRecipe;

    }
    
    mysqli_close($conn);
}