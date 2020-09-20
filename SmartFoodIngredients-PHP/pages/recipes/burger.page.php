<div class="burger-hero">
    <img src="img/ilya-mashkov-_qxbJUr9RqI-unsplash.jpg" alt="" srcset="">
        <div class="burger-hero-text">Burger<br>hot, juicy and a great<br>choice for your next meal</div>
</div>
    <div class="burger-recipes">
        <section class="burger">
            <div class="container">
                <?php foreach ($rowBurgerRecipes as $rowBurgerRecipe){ ?>
                    <div class="burger-box-recipe">
                        <div class="recipe-image">
                            <a href="index.php?page=burger-recipe&id=<?php echo $rowBurgerRecipe['id'];?>">
                                <img src="<?php echo $dirBurgerRecipeImage.$rowBurgerRecipe['image']; ?>" alt="<?php echo $rowBurgerRecipe['image']; ?>" srcset="">
                            </a>
                        </div>
                            <div class="recipe-left-side">
                                <div class="recipe-name">
                                    <h2><?php echo $rowBurgerRecipe['name']; ?></h2>
                                </div>
                                    <div class="recipe-description">
                                        <h3>Time for preparation: <br><span><?php echo $rowBurgerRecipe['preparation_time']; ?> minutes</span></h3>
                                        <p class="description">Description: <br><span><?php echo $rowBurgerRecipe['description']; ?></span></p>
                                        <a href="index.php?page=burger-recipe&id=<?php echo $rowBurgerRecipe['id'];?>">View Recipe</a>
                                    </div>                                    
                            </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </div>