<div class="recipes-hero">
    <img src="img/cook-366875_1920.jpg" alt="" srcset="">
        <div class="recipes-hero-text">You create,<br>we post,<br>people make</div>
</div>

        <div class="main-recipes">
            <section class="breakfast">
            <h1><a href="index.php?page=breakfast">Breakfast recipes</a></h1>
                    <div class="container">
                        <?php foreach ($rowBreakfastRecipes as $rowBreakfastRecipe){ ?>
                            <div class="breakfast-box-recipe">
                                <div class="recipe-image">
                                    <a href="index.php?page=breakfast-recipe&id=<?php echo $rowBreakfastRecipe['id'];?>"><img src="<?php echo $dirBreakfastRecipeImage.$rowBreakfastRecipe['image']; ?>" alt="" srcset=""></a>
                                </div>
                                    <div class="recipe-left-side">
                                        <div class="recipe-name">
                                            <h2><?php echo $rowBreakfastRecipe['name']; ?></h2>
                                        </div>
                                            <div class="recipe-description">
                                                <h3>Time for preparation: <br><span><?php echo $rowBreakfastRecipe['preparation_time']; ?> minutes</span></h3>
                                                <p class="description">Description: <br><span><?php echo $rowBreakfastRecipe['description']; ?></span></p>
                                                <a class="recipe-link" href="index.php?page=breakfast-recipe&id=<?php echo $rowBreakfastRecipe['id'];?>">View Recipe</a>
                                            </div>                                    
                                    </div>
                            </div>
                        <?php } ?>
                    </div>
            </section>
            <section class="bread">
            <h1><a href="index.php?page=bread">Bread recipes</a></h1>
                <div class="container">
                    <?php foreach ($rowBreadRecipes as $rowBreadRecipe) { ?>
                        <div class="bread-box-recipe">
                            <div class="recipe-image">
                                <a href="index.php?page=bread-recipe&id=<?php echo $rowBreadRecipe['id'];?>"><img src="<?php echo $dirBreadRecipeImage.$rowBreadRecipe['image']; ?>" alt="" srcset=""></a>
                            </div>
                                <div class="recipe-left-side">
                                    <div class="recipe-name">
                                        <h2><?php echo $rowBreadRecipe['name'] ?></h2>
                                    </div>
                                        <div class="recipe-description">
                                            <h3>Time for preparation: <br><span><?php echo $rowBreadRecipe['preparation_time']; ?> minutes</span></h3>
                                            <p class="description">Description: <br><span><?php echo $rowBreadRecipe['description']; ?></span></p>
                                            <a class="recipe-link" href="index.php?page=bread-recipe&id=<?php echo $rowBreadRecipe['id'];?>">View Recipe</a>
                                        </div>
                                </div>
                        </div>
                    <?php }?>
                </div>
            </section>
            <section class="burger">
            <h1><a href="index.php?page=burger">Burger recipes</a></h1>
                <div class="container">
                <?php foreach ($rowBurgerRecipes as $rowBurgerRecipe){ ?>
                    <div class="burger-box-recipe">
                        <div class="recipe-image">
                            <a href="index.php?page=burger-recipe&id=<?php echo $rowBurgerRecipe['id'];?>"><img src="<?php echo $dirBurgerRecipeImage.$rowBurgerRecipe['image']; ?>" alt="" srcset=""></a>
                        </div>
                            <div class="recipe-left-side">
                                <div class="recipe-name">
                                    <h2><?php echo $rowBurgerRecipe['name']; ?></h2>
                                </div>
                                    <div class="recipe-description">
                                        <h3>Time for preparation: <br><span><?php echo $rowBurgerRecipe['preparation_time']; ?> minutes</span></h3>
                                        <p class="description">Description: <br><span><?php echo $rowBurgerRecipe['description']; ?></span></p>
                                        <a class="recipe-link" href="index.php?page=burger-recipe&id=<?php echo $rowBurgerRecipe['id'];?>">View Recipe</a>
                                    </div>
                            </div>
                    </div>
                    <?php } ?>
                </div>
            </section>
            <section class="meat">
            <h1><a href="index.php?page=meat">Meat recipes</a></h1>
                <div class="container">
                <?php foreach ($rowMeatRecipes as $rowMeatRecipe){ ?>
                    <div class="meat-box-recipe">
                        <div class="recipe-image">
                            <a href="index.php?page=meat-recipe&id=<?php echo $rowMeatRecipe['id'];?>"><img src="<?php echo $dirMeatRecipeImage.$rowMeatRecipe['image']; ?>" alt="" srcset=""></a>
                        </div>
                        <div class="recipe-left-side">
                            <div class="recipe-name">
                                <h2><?php echo $rowMeatRecipe['name']; ?></h2>
                            </div>
                                <div class="recipe-description">
                                    <h3>Time for preparation: <br><span><?php echo $rowMeatRecipe['preparation_time']; ?> minutes</span></h3>
                                    <p class="description">Description: <br><span><?php echo $rowMeatRecipe['description']; ?></span></p>
                                    <a class="recipe-link" href="index.php?page=meat-recipe&id=<?php echo $rowMeatRecipe['id'];?>">View Recipe</a>
                                </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </section>
            <section class="soup">
            <h1><a href="index.php?page=soup">Soup recipes</a></h1>
                <div class="container">
                <?php  foreach ($rowSoupRecipes as $rowSoupRecipe){ ?>
                    <div class="soup-box-recipe">
                        <div class="recipe-image">
                            <a href="index.php?page=soup-recipe&id=<?php echo $rowSoupRecipe['id'];?>"><img src="<?php echo $dirSoupRecipeImage.$rowSoupRecipe['image']; ?>" alt="" srcset=""></a>
                        </div>
                        <div class="recipe-left-side">
                            <div class="recipe-name">
                                <h2><?php echo $rowSoupRecipe['name']; ?></h2>
                            </div>
                                <div class="recipe-description">
                                    <h3>Time for preparation: <br><span><?php echo $rowSoupRecipe['preparation_time']; ?> minutes</span></h3>
                                    <p class="description">Description: <br><span><?php echo $rowSoupRecipe['description']; ?></span></p>
                                    <a class="recipe-link" href="index.php?page=soup-recipe&id=<?php echo $rowSoupRecipe['id'];?>">View Recipe</a>
                                </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </section>
            <section class="pasta">
            <h1><a href="index.php?page=pasta">Pasta recipes</a></h1>
                <div class="container">
                <?php foreach ($rowPastaRecipes as $rowPastaRecipe) { ?>
                    <div class="pasta-box-recipe">
                        <div class="recipe-image">
                            <a href="index.php?page=pasta-recipe&id=<?php echo $rowPastaRecipe['id'];?>"><img src="<?php echo $dirPastaRecipeImage.$rowPastaRecipe['image']; ?>" alt="" srcset=""></a>
                        </div>
                        <div class="recipe-left-side">
                            <div class="recipe-name">
                                <h2><?php echo $rowPastaRecipe['name'] ?></h2>
                            </div>
                                <div class="recipe-description">
                                    <h3>Time for preparation: <br><span><?php echo $rowPastaRecipe['preparation_time'] ?> minutes</span></h3>
                                    <p class="description">Description: <br><span><?php echo $rowPastaRecipe['description'] ?></span></p>
                                    <a class="recipe-link" href="index.php?page=pasta-recipe&id=<?php echo $rowPastaRecipe['id'];?>">View Recipe</a>
                                </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </section>
            <section class="pizza">
            <h1><a href="index.php?page=pizza">Pizza recipes</a></h1>
                <div class="container">
                <?php foreach ($rowPizzaRecipes as $rowPizzaRecipe){ ?>
                    <div class="pizza-box-recipe">
                        <div class="recipe-image">
                            <a href="index.php?page=pizza-recipe&id=<?php echo $rowPizzaRecipe['id'];?>"><img src="<?php echo $dirPizzaRecipeImage.$rowPizzaRecipe['image']; ?>" alt="" srcset=""></a>
                        </div>
                        <div class="recipe-left-side">
                            <div class="recipe-name">
                                <h2><?php echo $rowPizzaRecipe['name']; ?></h2>
                            </div>
                                <div class="recipe-description">
                                    <h3>Time for preparation: <br><span><?php echo $rowPizzaRecipe['preparation_time']; ?> minutes</span></h3>
                                    <p class="description">Description: <br><span><?php echo $rowPizzaRecipe['description']; ?></span></p>
                                    <a class="recipe-link" href="index.php?page=pizza-recipe&id=<?php echo $rowPizzaRecipe['id'];?>">View Recipe</a>
                                </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </section>
            <section class="vegan">
            <h1><a href="index.php?page=vegan">Vegan recipes</a></h1>
                <div class="container">
                <?php foreach ($rowVeganRecipes as $rowVeganRecipe){ ?>
                    <div class="vegan-box-recipe">
                        <div class="recipe-image">
                            <a href="index.php?page=vegan-recipe&id=<?php echo $rowVeganRecipe['id'];?>"><img src="<?php echo $dirVeganRecipeImage.$rowVeganRecipe['image']; ?>" alt="" srcset=""></a>
                        </div>
                        <div class="recipe-left-side">
                            <div class="recipe-name">
                                <h2><?php echo $rowVeganRecipe['name']; ?></h2>
                            </div>
                                <div class="recipe-description">
                                    <h3>Time for preparation: <br><span><?php echo $rowVeganRecipe['preparation_time']; ?> minutes</span></h3>
                                    <p class="description">Description: <br><span><?php echo $rowVeganRecipe['description']; ?></span></p>
                                    <a class="recipe-link" href="index.php?page=vegan-recipe&id=<?php echo $rowVeganRecipe['id'];?>">View Recipe</a>
                                </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </section>
            <section class="cake">
            <h1><a href="index.php?page=cake">Cake recipes</a></h1>
                <div class="container">
                <?php  foreach ($rowCakeRecipes as $rowCakeRecipe){ ?>
                    <div class="cake-box-recipe">
                        <div class="recipe-image">
                            <a href="index.php?page=cake-recipe&id=<?php echo $rowCakeRecipe['id'];?>"><img src="<?php echo $dirCakeRecipeImage.$rowCakeRecipe['image']; ?>" alt="" srcset=""></a>
                        </div>
                        <div class="recipe-left-side">
                            <div class="recipe-name">
                                <h2><?php echo $rowCakeRecipe['name']; ?></h2>
                            </div>
                                <div class="recipe-description">
                                    <h3>Time for preparation: <br><span><?php echo $rowCakeRecipe['preparation_time']; ?> minutes</span></h3>
                                    <p class="description">Description: <br><span><?php echo $rowCakeRecipe['description']; ?></span></p>
                                    <a class="recipe-link" href="index.php?page=cake-recipe&id=<?php echo $rowCakeRecipe['id'];?>">View Recipe</a>
                                </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </section>
        </div>