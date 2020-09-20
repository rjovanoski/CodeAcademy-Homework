<div class="user-recipes">        
            <section class="breakfast">
                <h1>Breakfast recipes</h1>
                <div class="container">
                <?php foreach ($rowBreakfastUserRecipes as $rowBreakfastUserRecipe) :?> 
                    <div class="recipe-box">
                        <div class="user-recipe-image">
                            <img src="<?php echo $dirBreakfastRecipeImage.$rowBreakfastUserRecipe['image'];?>" alt="<?php echo $rowBreakfastUserRecipe['name']?>" srcset="">
                        </div>
                            <div class="recipe-info">
                                <div class="recipe-name">
                                    <h2><?php echo $rowBreakfastUserRecipe['name']?></h2>
                                </div>
                                    <div class="recipe-ingredients">
                                            <h3>Time for preparation: <br><span><?php echo $rowBreakfastUserRecipe['preparation_time']?> minutes</span></h3>
                                            <p class="ingredients">Ingredients: <br><span><?php echo $rowBreakfastUserRecipe['ingredients']?></span></p>
                                            <p class="preparation">Preparation: <br><span><?php echo $rowBreakfastUserRecipe['preparation']?></span></p>
                                            <p class="description">Preparation: <br><span><?php echo $rowBreakfastUserRecipe['description']?></span></p>
                                    </div>
                            </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>
            <section class="bread">
                <h1>Bread recipes</h1>
                <div class="container">
                <?php foreach ($rowBreadUserRecipes as $rowBreadUserRecipe) :?> 
                    <div class="recipe-box">
                        <div class="user-recipe-image">
                            <img src="<?php echo $dirBreadRecipeImage.$rowBreadUserRecipe['image'];?>" alt="" srcset="">
                        </div>
                        <div class="recipe-info">
                            <div class="recipe-name">
                                <h2><?php echo $rowBreadUserRecipe['name']; ?></h2>
                            </div>
                                <div class="recipe-ingredients">
                                        <h3>Time for preparation: <br><span><?php echo $rowBreadUserRecipe['preparation_time']; ?> minutes</span></h3>
                                        <p class="ingredients">Ingredients: <br><span><?php echo $rowBreadUserRecipe['ingredients']?></span></p>
                                        <p class="preparation">Preparation: <br><span><?php echo $rowBreadUserRecipe['preparation']?></span></p>
                                        <p class="description">Preparation: <br><span><?php echo $rowBreadUserRecipe['description']?></span></p>
                                </div>
                        </div>
                    </div>
                <?php endforeach;?>
                </div>
            </section>
            <section class="burger">
                <h1>Burger recipes</h1>
                <div class="container">
                <?php foreach ($rowBurgerUserRecipes as $rowBurgerUserRecipe) :?> 
                    <div class="recipe-box">
                        <div class="user-recipe-image">
                            <img src="<?php echo $dirBurgerRecipeImage.$rowBurgerUserRecipe['image'];?>" alt="" srcset="">
                        </div>
                        <div class="recipe-info">
                            <div class="recipe-name">
                                <h2><?php echo $rowBurgerUserRecipe['name']; ?></h2>
                            </div>
                                <div class="recipe-ingredients">
                                        <h3>Time for preparation: <br><span><?php echo $rowBurgerUserRecipe['preparation_time']; ?> minutes</span></h3>
                                        <p class="ingredients">Ingredients: <br><span><?php echo $rowBurgerUserRecipe['ingredients']?></span></p>
                                        <p class="preparation">Preparation: <br><span><?php echo $rowBurgerUserRecipe['preparation']?></span></p>
                                        <p class="description">Preparation: <br><span><?php echo $rowBurgerUserRecipe['description']?></span></p>
                                </div>
                        </div>
                    </div>
                <?php endforeach;?>
                </div>
            </section>
            <section class="meat">
                <h1>Meat recipes</h1>
                <div class="container">
                <?php foreach ($rowMeatUserRecipes as $rowMeatUserRecipe) :?> 
                    <div class="recipe-box">
                        <div class="user-recipe-image">
                            <img src="<?php echo $dirMeatRecipeImage.$rowMeatUserRecipe['image'];?>" alt="" srcset="">
                        </div>
                        <div class="recipe-info">
                            <div class="recipe-name">
                                <h2><?php echo $rowMeatUserRecipe['name']; ?></h2>
                            </div>
                                <div class="recipe-ingredients">
                                        <h3>Time for preparation: <br><span><?php echo $rowMeatUserRecipe['preparation_time']; ?> minutes</span></h3>
                                        <p class="ingredients">Ingredients: <br><span><?php echo $rowMeatUserRecipe['ingredients']?></span></p>
                                        <p class="preparation">Preparation: <br><span><?php echo $rowMeatUserRecipe['preparation']?></span></p>
                                        <p class="description">Preparation: <br><span><?php echo $rowMeatUserRecipe['description']?></span></p>
                                </div>
                        </div>
                    </div>
                <?php endforeach;?>
                </div>
            </section>
            <section class="soup">
                <h1>Soup recipes</h1>
                <div class="container">
                <?php foreach ($rowSoupUserRecipes as $rowSoupUserRecipe) :?> 
                    <div class="recipe-box">
                        <div class="user-recipe-image">
                            <img src="<?php echo $dirSoupRecipeImage.$rowSoupUserRecipe['image'];?>" alt="" srcset="">
                        </div>
                        <div class="recipe-info">
                            <div class="recipe-name">
                                <h2><?php echo $rowSoupUserRecipe['name']; ?></h2>
                            </div>
                                <div class="recipe-ingredients">
                                        <h3>Time for preparation: <br><span><?php echo $rowSoupUserRecipe['preparation_time']; ?> minutes</span></h3>
                                        <p class="ingredients">Ingredients: <br><span><?php echo $rowSoupUserRecipe['ingredients']?></span></p>
                                        <p class="preparation">Preparation: <br><span><?php echo $rowSoupUserRecipe['preparation']?></span></p>
                                        <p class="description">Preparation: <br><span><?php echo $rowSoupUserRecipe['description']?></span></p>
                                </div>
                        </div>
                    </div>
                <?php endforeach;?>
                </div>
            </section>
            <section class="pasta">
                <h1>Pasta recipes</h1>
                <div class="container">
                <?php foreach ($rowPastaUserRecipes as $rowPastaUserRecipe) :?> 
                    <div class="recipe-box">
                        <div class="user-recipe-image">
                            <img src="<?php echo $dirPastaRecipeImage.$rowPastaUserRecipe['image'];?>" alt="" srcset="">
                        </div>
                        <div class="recipe-info">
                            <div class="recipe-name">
                                <h2><?php echo $rowPastaUserRecipe['name']; ?></h2>
                            </div>
                                <div class="recipe-ingredients">
                                        <h3>Time for preparation: <br><span><?php echo $rowPastaUserRecipe['preparation_time']; ?> minutes</span></h3>
                                        <p class="ingredients">Ingredients: <br><span><?php echo $rowPastaUserRecipe['ingredients']?></span></p>
                                        <p class="preparation">Preparation: <br><span><?php echo $rowPastaUserRecipe['preparation']?></span></p>
                                        <p class="description">Preparation: <br><span><?php echo $rowPastaUserRecipe['description']?></span></p>
                                </div>
                        </div>
                    </div>
                <?php endforeach;?>
                </div>
            </section>
            <section class="pizza">
                <h1>Pizza recipes</h1>
                <div class="container">
                <?php foreach ($rowPizzaUserRecipes as $rowPizzaUserRecipe) :?> 
                    <div class="recipe-box">
                        <div class="user-recipe-image">
                            <img src="<?php echo $dirPizzaRecipeImage.$rowPizzaUserRecipe['image'];?>" alt="<?php echo $rowPizzaUserRecipe['name']; ?>" srcset="">
                        </div>
                        <div class="recipe-info">
                            <div class="recipe-name">
                                <h2><?php echo $rowPizzaUserRecipe['name']; ?></h2>
                            </div>
                                <div class="recipe-ingredients">
                                        <h3>Time for preparation: <br><span><?php echo $rowPizzaUserRecipe['preparation_time']; ?> minutes</span></h3>
                                        <p class="ingredients">Ingredients: <br><span><?php echo $rowPizzaUserRecipe['ingredients']?></span></p>
                                        <p class="preparation">Preparation: <br><span><?php echo $rowPizzaUserRecipe['preparation']?></span></p>
                                        <p class="description">Preparation: <br><span><?php echo $rowPizzaUserRecipe['description']?></span></p>
                                </div>
                        </div>
                    </div>
                <?php endforeach;?>
                </div>
            </section>
            <section class="vegan">
                <h1>Vegan recipes</h1>
                <div class="container">
                <?php foreach ($rowVeganUserRecipes as $rowVeganUserRecipe) :?> 
                    <div class="recipe-box">
                        <div class="user-recipe-image">
                            <img src="<?php echo $dirVeganRecipeImage.$rowVeganUserRecipe['image'];?>" alt="" srcset="">
                        </div>
                        <div class="recipe-info">
                            <div class="recipe-name">
                                <h2><?php echo $rowVeganUserRecipe['name']; ?></h2>
                            </div>
                                <div class="recipe-ingredients">
                                        <h3>Time for preparation: <br><span><?php echo $rowVeganUserRecipe['preparation_time']; ?> min</span></h3>
                                        <p class="ingredients">Ingredients: <br><span><?php echo $rowVeganUserRecipe['ingredients']?></span></p>
                                        <p class="preparation">Preparation: <br><span><?php echo $rowVeganUserRecipe['preparation']?></span></p>
                                        <p class="description">Preparation: <br><span><?php echo $rowVeganUserRecipe['description']?></span></p>
                                </div>
                        </div>
                    </div>
                <?php endforeach;?>
                </div>
            </section>
            <section class="cake">
                <h1>Cake recipes</h1>
                <div class="container">
                <?php foreach ($rowCakeUserRecipes as $rowCakeUserRecipe) :?> 
                    <div class="recipe-box">
                        <div class="user-recipe-image">
                            <img src="<?php echo $dirCakeRecipeImage.$rowCakeUserRecipe['image'];?>" alt="" srcset="">
                        </div>
                        <div class="recipe-info">
                            <div class="recipe-name">
                                <h2><?php echo $rowCakeUserRecipe['name']; ?></h2>
                            </div>
                                <div class="recipe-ingredients">
                                        <h3>Time for preparation: <br><span><?php echo $rowCakeUserRecipe['preparation_time']; ?> min</span></h3>
                                        <p class="ingredients">Ingredients: <br><span><?php echo $rowCakeUserRecipe['ingredients']?></span></p>
                                        <p class="preparation">Preparation: <br><span><?php echo $rowCakeUserRecipe['preparation']?></span></p>
                                        <p class="description">Preparation: <br><span><?php echo $rowCakeUserRecipe['description']?></span></p>
                                </div>
                        </div>
                    </div>
                <?php endforeach;?>
                </div>
            </section>
</div>                  