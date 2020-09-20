<div class="hero">
    <img src="img/pexels-pixabay-326279.jpg" alt="" srcset="">
        <div class="hero-text">The ideal website<br>for your favourite recipes</div>
</div>
    <div class="main">
        <section class="breakfast">
            <h1><a href="index.php?page=breakfast">Breakfast recipes</a></h1>
                <div class="container">
                    <?php foreach ($rowBreakfastRecipes as $rowBreakfastRecipe){ ?>
                        <div class="breakfast-box">
                            <div class="breakfast-recipe-image">
                                <a href="index.php?page=breakfast-recipe&id=<?php echo $rowBreakfastRecipe['id'];?>">
                                    <img src="<?php echo $dirBreakfastRecipeImage.$rowBreakfastRecipe['image']; ?>" alt="<?php echo $rowBreakfastRecipe['image']; ?>" srcset="">
                                </a>
                            </div>
                                <div class="breakfast-recipe-name">
                                    <h2><?php echo $rowBreakfastRecipe['name']; ?></h2>
                                </div>
                                    <div class="breakfast-recipe-description">
                                        <p><?php echo $rowBreakfastRecipe['description']; ?></p>
                                        <a href="index.php?page=breakfast-recipe&id=<?php echo $rowBreakfastRecipe['id'];?>">Read more...</a>
                                    </div>
                        </div>  
                    <?php } ?>                  
                </div>
        </section>
            <section class="bread">
            <h1><a href="index.php?page=bread">Bread recipes</a></h1>
                <div class="container">
                <?php foreach ($rowBreadRecipes as $rowBreadRecipe) { ?>
                    <div class="bread-box">
                        <div class="bread-recipe-image">
                            <a href="index.php?page=bread-recipe&id=<?php echo $rowBreadRecipe['id'];?>">
                                <img src="<?php echo $dirBreadRecipeImage.$rowBreadRecipe['image']; ?>" alt="<?php echo $rowBreadRecipe['image']; ?>" srcset="">
                            </a>
                        </div>
                            <div class="bread-recipe-name">
                                <h2><?php echo $rowBreadRecipe['name'] ?></h2>
                            </div>
                                <div class="bread-recipe-description">
                                    <p><?php echo $rowBreadRecipe['description']; ?></p>
                                    <a href="index.php?page=bread-recipe&id=<?php echo $rowBreadRecipe['id'];?>">Read more...</a>
                                </div>
                    </div>
                <?php } ?>
                </div>
            </section>
            <section class="burger">
            <h1><a href="index.php?page=burger">Burger recipes</a></h1>
                <div class="container">
                <?php foreach ($rowBurgerRecipes as $rowBurgerRecipe){ ?>
                    <div class="burger-box">
                        <div class="burger-recipe-image">
                            <a href="index.php?page=burger-recipe&id=<?php echo $rowBurgerRecipe['id'];?>">
                                <img src="<?php echo $dirBurgerRecipeImage.$rowBurgerRecipe['image']; ?>" alt="<?php echo $rowBurgerRecipe['image']; ?>" srcset="">
                            </a>
                        </div>
                            <div class="burger-recipe-name">
                                <h2><?php echo $rowBurgerRecipe['name']; ?></h2>
                            </div>
                                <div class="burger-recipe-description">
                                    <p><?php echo $rowBurgerRecipe['description']; ?></p>
                                    <a href="index.php?page=burger-recipe&id=<?php echo $rowBurgerRecipe['id'];?>">Read more...</a>
                                </div>
                    </div>
                <?php } ?>
                </div>
            </section>
            <section class="meat">
            <h1><a href="index.php?page=meat">Meat recipes</a></h1>
                <div class="container">
                <?php foreach ($rowMeatRecipes as $rowMeatRecipe){ ?>
                    <div class="meat-box">
                        <div class="meat-recipe-image">
                            <a href="index.php?page=meat-recipe&id=<?php echo $rowMeatRecipe['id'];?>">
                                <img src="<?php echo $dirMeatRecipeImage.$rowMeatRecipe['image']; ?>" alt="<?php echo $rowMeatRecipe['image']; ?>" srcset="">
                            </a>
                        </div>
                            <div class="meat-recipe-name">
                                <h2><?php echo $rowMeatRecipe['name']; ?></h2>
                            </div>
                                <div class="meat-recipe-description">
                                    <p><?php echo $rowMeatRecipe['description']; ?></p>
                                    <a href="index.php?page=meat-recipe&id=<?php echo $rowMeatRecipe['id'];?>">Read more...</a>
                                </div>
                    </div>
                <?php } ?>
                </div>
            </section>
            <section class="soup">
            <h1><a href="index.php?page=soup">Soup recipes</a></h1>
                <div class="container">
                <?php  foreach ($rowSoupRecipes as $rowSoupRecipe){ ?>
                    <div class="soup-box">
                        <div class="soup-recipe-image">
                            <a href="index.php?page=soup-recipe&id=<?php echo $rowSoupRecipe['id'];?>">
                                <img src="<?php echo $dirSoupRecipeImage.$rowSoupRecipe['image']; ?>" alt="<?php echo $rowSoupRecipe['image']; ?>" srcset="">
                            </a>
                        </div>
                            <div class="soup-recipe-name">
                                <h2><?php echo $rowSoupRecipe['name']; ?></h2>
                            </div>
                                <div class="soup-recipe-description">
                                    <p><?php echo $rowSoupRecipe['description']; ?></p>
                                    <a href="index.php?page=soup-recipe&id=<?php echo $rowSoupRecipe['id'];?>">Read more...</a>
                                </div>
                    </div>
                <?php } ?>
                </div>
            </section>
            <section class="pasta">
            <h1><a href="index.php?page=pasta">Pasta recipes</a></h1>
                <div class="container">
                <?php foreach ($rowPastaRecipes as $rowPastaRecipe) { ?>
                    <div class="pasta-box">
                        <div class="pasta-recipe-image">
                            <a href="index.php?page=pasta-recipe&id=<?php echo $rowPastaRecipe['id'];?>">
                                <img src="<?php echo $dirPastaRecipeImage.$rowPastaRecipe['image']; ?>" alt="<?php echo $rowPastaRecipe['image']; ?>" srcset="">
                            </a>
                        </div>
                            <div class="pasta-recipe-name">
                                <h2><?php echo $rowPastaRecipe['name'] ?></h2>
                            </div>
                                <div class="pasta-recipe-description">
                                    <p><?php echo $rowPastaRecipe['description'] ?></p>
                                    <a href="index.php?page=pasta-recipe&id=<?php echo $rowPastaRecipe['id'];?>">Read more...</a>
                                </div>
                    </div>
                <?php } ?>
                </div>
            </section>
            <section class="pizza">
            <h1><a href="index.php?page=pizza">Pizza recipes</a></h1>
                <div class="container">
                <?php foreach ($rowPizzaRecipes as $rowPizzaRecipe){ ?>
                    <div class="pizza-box">
                        <div class="pizza-recipe-image">
                            <a href="index.php?page=pizza-recipe&id=<?php echo $rowPizzaRecipe['id'];?>">
                                <img src="<?php echo $dirPizzaRecipeImage.$rowPizzaRecipe['image']; ?>" alt="<?php echo $rowPizzaRecipe['image']; ?>" srcset="">
                            </a>
                        </div>
                            <div class="pizza-recipe-name">
                                <h2><?php echo $rowPizzaRecipe['name']; ?></h2>
                            </div>
                                <div class="pizza-recipe-description">
                                    <p><?php echo $rowPizzaRecipe['description']; ?></p>
                                    <a href="index.php?page=pizza-recipe&id=<?php echo $rowPizzaRecipe['id'];?>">Read more...</a>
                                </div>
                    </div>
                <?php } ?>
                </div>
            </section>
            <section class="vegan">
            <h1><a href="index.php?page=vegan">Vegan recipes</a></h1>
                <div class="container">
                <?php foreach ($rowVeganRecipes as $rowVeganRecipe){ ?>
                    <div class="vegan-box">
                        <div class="vegan-recipe-image">
                            <a href="index.php?page=vegan-recipe&id=<?php echo $rowVeganRecipe['id'];?>">
                                <img src="<?php echo $dirVeganRecipeImage.$rowVeganRecipe['image']; ?>" alt="<?php echo $rowVeganRecipe['image']; ?>" srcset="">
                            </a>
                        </div>
                            <div class="vegan-recipe-name">
                                <h2><?php echo $rowVeganRecipe['name']; ?></h2>
                            </div>
                                <div class="vegan-recipe-description">
                                    <p><?php echo $rowVeganRecipe['description']; ?></p>
                                    <a href="index.php?page=vegan-recipe&id=<?php echo $rowVeganRecipe['id'];?>">Read more...</a>
                                </div>
                    </div>
                <?php } ?>
                </div>
            </section>
            <section class="cake">
            <h1><a href="index.php?page=cake">Cake recipes</a></h1>
                <div class="container">
                <?php  foreach ($rowCakeRecipes as $rowCakeRecipe){ ?>
                    <div class="cake-box">
                        <div class="cake-recipe-image">
                            <a href="index.php?page=cake-recipe&id=<?php echo $rowCakeRecipe['id'];?>">
                                <img src="<?php echo $dirCakeRecipeImage.$rowCakeRecipe['image']; ?>" alt="<?php echo $rowCakeRecipe['image']; ?>" srcset="">
                            </a>
                        </div>
                            <div class="cake-recipe-name">
                                <h2><?php echo $rowCakeRecipe['name']; ?></h2>
                            </div>
                                <div class="cake-recipe-description">
                                    <p><?php echo $rowCakeRecipe['description']; ?></p>
                                    <a href="index.php?page=cake-recipe&id=<?php echo $rowCakeRecipe['id'];?>">Read more...</a>
                                </div>
                    </div>
                <?php } ?>
                </div>
            </section>
        </div>

