<div class="breakfast-hero">
    <img src="img/ben-kolde-rQsYZnCRU00-unsplash.jpg" alt="" srcset="">
        <div class="breakfast-hero-text">Breakfast<br>The most important <br>meal of the day</div>
</div>
    <div class="breakfast-recipes">
        <section class="breakfast">
            <div class="container">
                <?php foreach ($rowBreakfastRecipes as $rowBreakfastRecipe){ ?>
                    <div class="breakfast-box-recipe">
                        <div class="recipe-image">
                            <a href="index.php?page=breakfast-recipe&id=<?php echo $rowBreakfastRecipe['id'];?>">
                                <img src="<?php echo $dirBreakfastRecipeImage.$rowBreakfastRecipe['image']; ?>" alt="<?php echo $rowBreakfastRecipe['image']; ?>" srcset="">
                            </a>
                        </div>
                            <div class="recipe-left-side">
                                <div class="recipe-name">
                                    <h2><?php echo $rowBreakfastRecipe['name']; ?></h2>
                                </div>
                                    <div class="recipe-description">
                                        <h3>Time for preparation: <br><span><?php echo $rowBreakfastRecipe['preparation_time']; ?> minutes</span></h3>
                                        <p class="description">Description: <br><span><?php echo $rowBreakfastRecipe['description']; ?></span></p>
                                        <a href="index.php?page=breakfast-recipe&id=<?php echo $rowBreakfastRecipe['id'];?>">View Recipe</a>
                                    </div>                                    
                            </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </div>