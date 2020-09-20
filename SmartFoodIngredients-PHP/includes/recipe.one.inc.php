<?php 

//Get one breakfast recipe details from database to display on page
if (isset($_GET['id'])) {

    include 'includes/db.inc.php';
    $sql = "SELECT * FROM breakfast_recipes WHERE id=".$_GET['id'];
    
    $query = mysqli_query($conn, $sql);

    $resultBreakfast = mysqli_fetch_row($query);

    mysqli_close($conn);

    
}
//Get one bread recipe details from database to display on page
if (isset($_GET['id'])) {

    include 'includes/db.inc.php';
    $sql = "SELECT * FROM bread_recipes WHERE id=".$_GET['id'];
    
    $query = mysqli_query($conn, $sql);

    $resultBread = mysqli_fetch_row($query);

    mysqli_close($conn);

    
}
//Get one burger recipe details from database to display on page
if (isset($_GET['id'])) {

    include 'includes/db.inc.php';
    $sql = "SELECT * FROM burger_recipes WHERE id=".$_GET['id'];
    
    $query = mysqli_query($conn, $sql);

    $resultBurger = mysqli_fetch_row($query);

    mysqli_close($conn);

    
}
//Get one meat recipe details from database to display on page
if (isset($_GET['id'])) {

    include 'includes/db.inc.php';
    $sql = "SELECT * FROM meat_recipes WHERE id=".$_GET['id'];
    
    $query = mysqli_query($conn, $sql);

    $resultMeat = mysqli_fetch_row($query);

    mysqli_close($conn);

    
}
//Get one cake recipe details from database to display on page
if (isset($_GET['id'])) {

    include 'includes/db.inc.php';
    $sql = "SELECT * FROM cake_recipes WHERE id=".$_GET['id'];
    
    $query = mysqli_query($conn, $sql);

    $resultCake = mysqli_fetch_row($query);

    mysqli_close($conn);

    
}
//Get one pasta recipe details from database to display on page
if (isset($_GET['id'])) {

    include 'includes/db.inc.php';
    $sql = "SELECT * FROM pasta_recipes WHERE id=".$_GET['id'];
    
    $query = mysqli_query($conn, $sql);

    $resultPasta = mysqli_fetch_row($query);

    mysqli_close($conn);

    
}
//Get one pizza recipe details from database to display on page
if (isset($_GET['id'])) {

    include 'includes/db.inc.php';
    $sql = "SELECT * FROM pizza_recipes WHERE id=".$_GET['id'];
    
    $query = mysqli_query($conn, $sql);

    $resultPizza = mysqli_fetch_row($query);

    mysqli_close($conn);

    
}
//Get one vegan recipe details from database to display on page
if (isset($_GET['id'])) {

    include 'includes/db.inc.php';
    $sql = "SELECT * FROM vegan_recipes WHERE id=".$_GET['id'];
    
    $query = mysqli_query($conn, $sql);

    $resultVegan = mysqli_fetch_row($query);

    mysqli_close($conn);

    
}
//Get one soup recipe details from database to display on page
if (isset($_GET['id'])) {

    include 'includes/db.inc.php';
    $sql = "SELECT * FROM soup_recipes WHERE id=".$_GET['id'];
    
    $query = mysqli_query($conn, $sql);

    $resultSoup = mysqli_fetch_row($query);

    mysqli_close($conn);

    
}