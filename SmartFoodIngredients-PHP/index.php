<?php

//Visitor - person without account
//User - person with account
//Administrator - with account

include "includes/app.inc.php";
include "includes/tables.inc.php";
include "includes/post.recipes.inc.php";
include "includes/recipe.one.inc.php";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

if (isset($_GET['title'])) {
    $title = $_GET['title'];
}

if (!empty($page)) {

    switch ($page) {

        case 'contact':
            $title = 'Contact Us';
            break;

        case 'about':
            $title = 'About Us';
            break;

        case 'recipes':
            $title = 'Recipes';
            break;

        case 'breakfast':
            $title = 'Breakfast Recipes';
            break;

        case 'bread':
            $title = 'Bread Recipes';
            break;

        case 'burger':
            $title = 'Burger Recipes';
            break;

        case 'cake':
            $title = 'Cake Recipes';
            break;

        case 'meat':
            $title = 'Meat Recipes';
            break;

        case 'pasta':
            $title = 'Pasta Recipes';
            break;

        case 'pizza':
            $title = 'Pizza Recipes';
            break;

        case 'soup':
            $title = 'Soup Recipes';
            break;

        case 'vegan':
            $title = 'Vegan Recipes';
            break;

        case 'login':
            $title = 'Login';
            break;

        case 'register':
            $title = 'Register';
            break;

        case 'pass-resset':
            $title = 'Password Resset';
            break;

        case 'newpassword':
            $title = 'New Password Page';
            break;

        case 'pending':
            $title = 'Pending Password Page';
            break;

        case 'user-main':
            $title = 'Main User Page';
            break;

        case 'user-profile':
            $title = 'User Profile';
            break;

        case 'user-recipes':
            $title = 'User Recipes';
            break;

        case 'user-new-recipe':
            $title = 'User New Recipe';
            break;

        case 'admin-main':
            $title = 'Administrator Page';
            break;

        case 'admin-recipes':
            $title = 'Administrator Recipes';
            break;

        case 'error':
            $title = 'Error Page';
            break;

        default:
            $title = 'Home';
            break;
    }

}else {
    $title = 'Home';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Food Ingredients - <?php echo $title ?> </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Black+And+White+Picture&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@400;500;700&family=Yantramanav&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/user.css">
</head>
<body>

<?php

if (!empty($page)){
   
    switch ($page) {

        case 'contact':
            include "includes/header.inc.php";
            include "pages/contact.page.php";
            $footer = false;
            break;

        case 'about':
            include "includes/header.inc.php";
            include "pages/about.page.php";
            $footer = false;
            break;

        case 'recipes':
            include "includes/header.inc.php";
            include "pages//recipes/recipes.page.php";
            $footer = true;
            break;

        case 'breakfast':
            include "includes/header.inc.php";
            include "pages/recipes/breakfast.page.php";
            $footer = true;
            break;

        case 'breakfast-recipe':
            include "includes/header.inc.php";
            include "pages/recipes/breakfast.one.page.php";
            $footer = false;
            break;

        case 'bread':
            include "includes/header.inc.php";
            include "pages/recipes/bread.page.php";
            $footer = true;
            break;

        case 'bread-recipe':
            include "includes/header.inc.php";
            include "pages/recipes/bread.one.page.php";
            $footer = false;
            break;

        case 'burger':
            include "includes/header.inc.php";
            include "pages/recipes/burger.page.php";
            $footer = true;
            break;

        case 'burger-recipe':
            include "includes/header.inc.php";
            include "pages/recipes/burger.one.page.php";
            $footer = false;
            break;

        case 'cake':
            include "includes/header.inc.php";
            include "pages/recipes/cake.page.php";
            $footer = true;
            break;

        case 'cake-recipe':
            include "includes/header.inc.php";
            include "pages/recipes/cake.one.page.php";
            $footer = false;
            break;

        case 'meat':
            include "includes/header.inc.php";
            include "pages/recipes/meat.page.php";
            $footer = true;
            break;

        case 'meat-recipe':
            include "includes/header.inc.php";
            include "pages/recipes/meat.one.page.php";
            $footer = false;
            break;

        case 'pasta':
            include "includes/header.inc.php";
            include "pages/recipes/pasta.page.php";
            $footer = true;
            break;

        case 'pasta-recipe':
            include "includes/header.inc.php";
            include "pages/recipes/pasta.one.page.php";
            $footer = false;
            break;

        case 'pizza':
            include "includes/header.inc.php";
            include "pages/recipes/pizza.page.php";
            $footer = true;
            break;

        case 'pizza-recipe':
            include "includes/header.inc.php";
            include "pages/recipes/pizza.one.page.php";
            $footer = false;
            break;

        case 'soup':
            include "includes/header.inc.php";
            include "pages/recipes/soup.page.php";
            $footer = true;
            break;

        case 'soup-recipe':
            include "includes/header.inc.php";
            include "pages/recipes/soup.one.page.php";
            $footer = false;
            break;

        case 'vegan':
            include "includes/header.inc.php";
            include "pages/recipes/vegan.page.php";
            $footer = true;
            break;

        case 'vegan-recipe':
            include "includes/header.inc.php";
            include "pages/recipes/vegan.one.page.php";
            $footer = false;
            break;

        case 'login':
            // To insure user can log in
            if (!isset($_SESSION['name'])) {
                include "includes/header.inc.php";
                include "pages/login.page.php";
                $footer = false;
                break;
            }else {
                //If session started don't allow access to page
                include "pages/error.page.php";
                $footer = false;
                break;
            }
        case 'register':
            // To insure Visitor can register
            if (!isset($_SESSION['name'])) {
                include "includes/header.inc.php";
                include "pages/register.page.php";
                $footer = false;
                break;
            }else {
                //If session started don't allow access to page
                include "pages/error.page.php";
                $footer = false;
                break;
            }

        case 'pass-resset':
            // To insure user can resset his forgotten password
            if (!isset($_SESSION['name'])) {
                include "includes/header.inc.php";
                include "pages/password.resset.page.php";
                $footer = false;
                break;

            }else {
                //If session started don't allow access to page
                include "pages/error.page.php";
                $footer = false;
                break;
            }

        case 'newpassword':
            //User can resset his forgotten password after clicked password resset link from email
            if (!isset($_SESSION['name']) && isset($_SESSION['token'])) {
                include "includes/header.inc.php";
                include 'pages/new.password.page.php';
                $footer = false;
                break;
            }else {
                //If session started and Visitor don't allow access to page
                include "pages/error.page.php";
                $footer = false;
                break;
            }

        case 'pending':
            //User without a started session to be able to view page after submited the password resset
            if (!isset($_SESSION['name'])) {

                if (isset($_POST['resset-submit']) && count($errors) == 0) {
                include "includes/header.inc.php";
                include 'pages/pending.page.php';
                $footer = false;
                break;
                }

            }else {
                //If session started and Visitor don't allow access to page
                include "pages/error.page.php";
                $footer = false;
                break;
            }

        case 'user-main':
            //User can access his page
            if (isset($_SESSION['name']) && $_SESSION['name']['user_type'] === 'user') {
                include "includes/profile.user.inc.php";
                include "includes/user.recipes.inc.php";
                include "includes/navbar.user.inc.php";
                include "pages/user/main.user.page.php";
                $footer = false;
                break;
            }else {
                //Visitor and Administrator can't access User page
                include "pages/error.page.php";
                $footer = false;
                break;
            }

        case 'user-profile':
            //User can access his page
            if (isset($_SESSION['name']) && $_SESSION['name']['user_type'] === 'user') {
                include "includes/profile.user.inc.php";
                include "includes/navbar.user.inc.php";
                include "pages/user/profile.user.page.php";
                $footer = false;
                break;
            }else {
                //Visitor and Administrator can't access User page
                include "pages/error.page.php";
                $footer = false;
                break;
            }

        case 'user-recipes':
            //User can access his page
            if (isset($_SESSION['name']) && $_SESSION['name']['user_type'] === 'user') {
                include "includes/navbar.user.inc.php";
                include "includes/user.recipes.inc.php";
                include "pages/user/recipes.user.page.php";
                $footer = false;
                break;
            }else {
                //Visitor and Administrator can't access User page
                include "pages/error.page.php";
                $footer = false;
                break;
            }

        case 'user-new-recipe':
            //User can access his page
            if (isset($_SESSION['name']) && $_SESSION['name']['user_type'] === 'user') {
                include "includes/recipes.admin.inc.php";
                include "includes/navbar.user.inc.php";
                include "pages/user/new.recipe.user.page.php";
                $footer = false;
                break;
            }else {
                //Visitor and Administrator can't access User page
                include "pages/error.page.php";
                $footer = false;
                break;
            }

        case 'admin-main':
            //Administrator can access his page
            if (isset($_SESSION['name']) && $_SESSION['name']['user_type'] === 'admin') {
                include "includes/navbar.user.inc.php";
                include "pages/admin/main.admin.page.php";
                $footer = false;
                break;
            }else {
                //User and Visitor can't access Administrator page
                include "pages/error.page.php";
                $footer = false;
                break;
            }
        case 'admin-recipes':
            //Administrator can access his page
            if (isset($_SESSION['name']) && $_SESSION['name']['user_type'] === 'admin') {
                include "includes/recipes.admin.inc.php";
                include "includes/navbar.user.inc.php";
                include "pages/admin/admin.new.recipes.page.php";
                $footer = false;
                break;
            }else {
                //User and Visitor can't access admin page
                include "pages/error.page.php";
                $footer = false;
                break;
            }
        case 'error':
            //Page to display unwanted activity
            include "pages/error.page.php";
            $footer = false;
            break;

        default:
            include "includes/header.inc.php";
            include "pages/main.page.php";
            $footer = true;
            break;
    }
}else {
    include "includes/header.inc.php";
    include "pages/main.page.php";
    $footer = true;
}

?>

<?php

    if ($footer) {

        include "includes/footer.inc.php";
    }

?>

    <script src="js/scripts.js"></script>
    <script src="js/user-scripts.js"></script>

</body>
</html>
