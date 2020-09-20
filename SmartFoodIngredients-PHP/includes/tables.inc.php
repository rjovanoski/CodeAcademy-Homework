<?php
/*************************CREATE TABLE USERS**********************/
$tableUsers = "CREATE TABLE IF NOT EXISTS users(
    
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NULL,
    address VARCHAR(50) NULL,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL UNIQUE,
    fb_account VARCHAR(50) NULL,
    git_account VARCHAR(50) NULL,
    twitter_account VARCHAR(50) NULL,
    biography TEXT(65535) NULL,
    image TEXT(65535) NULL,
    date_added DATETIME(6),
    user_type VARCHAR(20) NOT NULL

)";

if (mysqli_query($conn, $tableUsers)) { 
    
}else {
    echo "Error creating table users: " . mysqli_error($conn);
}
/*************************CREATE TABLE USERS******************************/
/*************************CREATE ADMIN RECIPES FOR APROVAL**********************/

$adminRecipes = "CREATE TABLE IF NOT EXISTS admin_recipes(

    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    recipe_type VARCHAR(50),
    recipe_name TEXT(65535),
    recipe_ingredients TEXT(65535),
    recipe_preparation_time INT(50),
    recipe_preparation TEXT(65535),
    recipe_description TEXT(65535),
    recipe_image TEXT(65535),
    date_added DATETIME(6),
    FOREIGN KEY (user_id) REFERENCES users(id)
)";
if (mysqli_query($conn, $adminRecipes)) { 
    
}else {
    echo "Error creating table admin_recipes: " . mysqli_error($conn);
}
/*************************CREATE ADMIN RECIPES FOR APROVAL**********************/
/*************************CREATE TABLE BREAKFAST RECIPES**********************/

$breakfastRecipes = "CREATE TABLE IF NOT EXISTS breakfast_recipes(

    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    name TEXT(65535),
    ingredients TEXT(65535),
    preparation_time INT(50),
    preparation TEXT(65535),
    description TEXT(65535),
    image TEXT(65535),
    date_added DATETIME(6),
    FOREIGN KEY (user_id) REFERENCES users(id)
)";
if (mysqli_query($conn, $breakfastRecipes)) { 
    
}else {
    echo "Error creating table breakfast_recipes: " . mysqli_error($conn);
}
/*************************CREATE TABLE BREAKFAST RECIPES**********************/
/*************************CREATE TABLE BREAD RECIPES**********************/

$breadRecipes = "CREATE TABLE IF NOT EXISTS bread_recipes(

    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    name TEXT(65535),
    ingredients TEXT(65535),
    preparation_time INT(50),
    preparation TEXT(65535),
    description TEXT(65535),
    image TEXT(65535),
    date_added DATETIME(6),
    FOREIGN KEY (user_id) REFERENCES users(id)
)";
if (mysqli_query($conn, $breadRecipes)) { 
    
}else {
    echo "Error creating table bread_recipes: " . mysqli_error($conn);
}
/*************************CREATE TABLE BREAD RECIPES**********************/
/*************************CREATE TABLE BURGER RECIPES**********************/

$burgerRecipes = "CREATE TABLE IF NOT EXISTS burger_recipes(

    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    name TEXT(65535),
    ingredients TEXT(65535),
    preparation_time INT(50),
    preparation TEXT(65535),
    description TEXT(65535),
    image TEXT(65535),
    date_added DATETIME(6),
    FOREIGN KEY (user_id) REFERENCES users(id)
)";
if (mysqli_query($conn, $burgerRecipes)) { 
    
}else {
    echo "Error creating table burger_recipes: " . mysqli_error($conn);
}
/*************************CREATE TABLE BURGER RECIPES**********************/
/*************************CREATE TABLE MEAT RECIPES**********************/

$meatRecipes = "CREATE TABLE IF NOT EXISTS meat_recipes(

    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    name TEXT(65535),
    ingredients TEXT(65535),
    preparation_time INT(50),
    preparation TEXT(65535),
    description TEXT(65535),
    image TEXT(65535),
    date_added DATETIME(6),
    FOREIGN KEY (user_id) REFERENCES users(id)
)";
if (mysqli_query($conn, $meatRecipes)) { 
    
}else {
    echo "Error creating table meat_recipes: " . mysqli_error($conn);
}
/*************************CREATE TABLE MEAT RECIPES**********************/
/*************************CREATE TABLE SOUP RECIPES**********************/

$soupRecipes = "CREATE TABLE IF NOT EXISTS soup_recipes(

    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    name TEXT(65535),
    ingredients TEXT(65535),
    preparation_time INT(50),
    preparation TEXT(65535),
    description TEXT(65535),
    image TEXT(65535),
    date_added DATETIME(6),
    FOREIGN KEY (user_id) REFERENCES users(id)
)";
if (mysqli_query($conn, $soupRecipes)) { 
    
}else {
    echo "Error creating table soup_recipes: " . mysqli_error($conn);
}
/*************************CREATE TABLE SOUP RECIPES**********************/
/*************************CREATE TABLE PASTA RECIPES**********************/

$pastaRecipes = "CREATE TABLE IF NOT EXISTS pasta_recipes(

    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    name TEXT(65535),
    ingredients TEXT(65535),
    preparation_time INT(50),
    preparation TEXT(65535),
    description TEXT(65535),
    image TEXT(65535),
    date_added DATETIME(6),
    FOREIGN KEY (user_id) REFERENCES users(id)
)";
if (mysqli_query($conn, $pastaRecipes)) { 
    
}else {
    echo "Error creating table pasta_recipes: " . mysqli_error($conn);
}
/*************************CREATE TABLE PASTA RECIPES**********************/
/*************************CREATE TABLE PIZZA RECIPES**********************/

$pizzaRecipes = "CREATE TABLE IF NOT EXISTS pizza_recipes(

    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    name TEXT(65535),
    ingredients TEXT(65535),
    preparation_time INT(50),
    preparation TEXT(65535),
    description TEXT(65535),
    image TEXT(65535),
    date_added DATETIME(6),
    FOREIGN KEY (user_id) REFERENCES users(id)
)";
if (mysqli_query($conn, $pizzaRecipes)) { 
    
}else {
    echo "Error creating table pizza_recipes: " . mysqli_error($conn);
}
/*************************CREATE TABLE PIZZA RECIPES**********************/
/*************************CREATE TABLE VEGAN RECIPES**********************/

$veganRecipes = "CREATE TABLE IF NOT EXISTS vegan_recipes(

    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    name TEXT(65535),
    ingredients TEXT(65535),
    preparation_time INT(50),
    preparation TEXT(65535),
    description TEXT(65535),
    image TEXT(65535),
    date_added DATETIME(6),
    FOREIGN KEY (user_id) REFERENCES users(id)
)";
if (mysqli_query($conn, $veganRecipes)) { 
    
}else {
    echo "Error creating table vegan_recipes: " . mysqli_error($conn);
}
/*************************CREATE TABLE VEGAN RECIPES**********************/
/*************************CREATE TABLE CAKE RECIPES**********************/

$cakeRecipes = "CREATE TABLE IF NOT EXISTS cake_recipes(

    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    name TEXT(65535),
    ingredients TEXT(65535),
    preparation_time INT(50),
    preparation TEXT(65535),
    description TEXT(65535),
    image TEXT(65535),
    date_added DATETIME(6),
    FOREIGN KEY (user_id) REFERENCES users(id)
)";
if (mysqli_query($conn, $cakeRecipes)) { 
    
}else {
    echo "Error creating table cake_recipes: " . mysqli_error($conn);
}
/*************************CREATE TABLE CAKE RECIPES**********************/
/*************************CREATE TABLE PASSWORD RESET*******************/
$passwordResset = "CREATE TABLE IF NOT EXISTS password_resset(
    
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(250) NULL UNIQUE,
    token VARCHAR(250) NULL UNIQUE

)";

if (mysqli_query($conn, $passwordResset)) { 
    
}else {
    echo "Error creating table password_resset: " . mysqli_error($conn);
}
/**************************************************************************/

/*********************CLOSE CONNECTION***********************/
mysqli_close($conn);
/************************************************************/