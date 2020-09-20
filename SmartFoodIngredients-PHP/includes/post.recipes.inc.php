<?php
include 'db.inc.php';

//GET content from every recipe table to be displayed on main and recipes page 

    $sqlBreakfastRecipes = "SELECT * FROM breakfast_recipes";
    $resultBreakfastRecipes = mysqli_query($conn, $sqlBreakfastRecipes);
    $rowBreakfastRecipes = array();
    $dirBreakfastRecipeImage = "img/breakfast/";

    while ($rowBreakfastRecipe = mysqli_fetch_assoc($resultBreakfastRecipes)) {
        
        $rowBreakfastRecipes[] = $rowBreakfastRecipe;

    }


    $sqlBreadRecipes = "SELECT * FROM bread_recipes";
    $resultBreadRecipes = mysqli_query($conn, $sqlBreadRecipes);
    $rowBreadRecipes = array();
    $dirBreadRecipeImage = "img/bread/";

    while ($rowBreadRecipe = mysqli_fetch_assoc($resultBreadRecipes)) {
        
        $rowBreadRecipes[] = $rowBreadRecipe;

    }


    $sqlBurgerRecipes = "SELECT * FROM burger_recipes";
    $resultBurgerRecipes = mysqli_query($conn, $sqlBurgerRecipes);
    $rowBurgerRecipes = array();
    $dirBurgerRecipeImage = "img/burger/";

    while ($rowBurgerRecipe = mysqli_fetch_assoc($resultBurgerRecipes)) {
        
        $rowBurgerRecipes[] = $rowBurgerRecipe;

    }


    $sqlMeatRecipes = "SELECT * FROM meat_recipes";
    $resultMeatRecipes = mysqli_query($conn, $sqlMeatRecipes);
    $rowMeatRecipes = array();
    $dirMeatRecipeImage = "img/meat/";

    while ($rowMeatRecipe = mysqli_fetch_assoc($resultMeatRecipes)) {
        
        $rowMeatRecipes[] = $rowMeatRecipe;

    }


    $sqlPastaRecipes = "SELECT * FROM pasta_recipes";
    $resulPastaRecipes = mysqli_query($conn, $sqlPastaRecipes);
    $rowPastaRecipes = array();
    $dirPastaRecipeImage = "img/pasta/";

    while ($rowPastaRecipe = mysqli_fetch_assoc($resulPastaRecipes)) {
        
        $rowPastaRecipes[] = $rowPastaRecipe;

    }


    $sqlPizzaRecipes = "SELECT * FROM pizza_recipes";
    $resultPizzaRecipes = mysqli_query($conn, $sqlPizzaRecipes);
    $rowPizzaRecipes = array();
    $dirPizzaRecipeImage = "img/pizza/";

    while ($rowPizzaRecipe = mysqli_fetch_assoc($resultPizzaRecipes)) {
        
        $rowPizzaRecipes[] = $rowPizzaRecipe;

    }


    $sqlCakeRecipes = "SELECT * FROM cake_recipes";
    $resultCakeRecipes = mysqli_query($conn, $sqlCakeRecipes);
    $rowCakeRecipes = array();
    $dirCakeRecipeImage = "img/cake/";

    while ($rowCakeRecipe = mysqli_fetch_assoc($resultCakeRecipes)) {
        
        $rowCakeRecipes[] = $rowCakeRecipe;

    }


    $sqlSoupRecipes = "SELECT * FROM soup_recipes";
    $resulSoupRecipes = mysqli_query($conn, $sqlSoupRecipes);
    $rowSoupRecipes = array();
    $dirSoupRecipeImage = "img/soup/";

    while ($rowSoupRecipe = mysqli_fetch_assoc($resulSoupRecipes)) {
        
        $rowSoupRecipes[] = $rowSoupRecipe;

    }


    $sqlVeganRecipes = "SELECT * FROM vegan_recipes";
    $resultVeganRecipes = mysqli_query($conn, $sqlVeganRecipes);
    $rowVeganRecipes = array();
    $dirVeganRecipeImage = "img/vegan/";

    while ($rowVeganRecipe = mysqli_fetch_assoc($resultVeganRecipes)) {
        
        $rowVeganRecipes[] = $rowVeganRecipe;

    }

mysqli_close($conn);