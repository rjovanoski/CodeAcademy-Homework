<div class="pizza-hero">
    <img src="img/ivan-torres-MQUqbmszGGM-unsplash.jpg" alt="" srcset="">
        <div class="pizza-hero-text">Everyone likes a good<br>slice of pizza</div>
</div>
    <div class="pizza-recipes">
        <section class="pizza">
            <div class="container">
                <?php foreach ($rowPizzaRecipes as $rowPizzaRecipe){ ?>
                    <div class="pizza-box-recipe">
                        <div class="recipe-image">
                            <a href="index.php?page=pizza-recipe&id=<?php echo $rowPizzaRecipe['id'];?>">
                                <img src="<?php echo $dirPizzaRecipeImage.$rowPizzaRecipe['image']; ?>" alt="<?php echo $rowPizzaRecipe['image']; ?>" srcset="">
                            </a>
                        </div>
                            <div class="recipe-left-side">
                                <div class="recipe-name">
                                    <h2><?php echo $rowPizzaRecipe['name']; ?></h2>
                                </div>
                                    <div class="recipe-description">
                                        <h3>Time for preparation: <br><span><?php echo $rowPizzaRecipe['preparation_time']; ?> minutes</span></h3>
                                        <p class="description">Description: <br><span><?php echo $rowPizzaRecipe['description']; ?></span></p>
                                        <a href="index.php?page=pizza-recipe&id=<?php echo $rowPizzaRecipe['id'];?>">View Recipe</a>
                                    </div>                                    
                            </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </div>