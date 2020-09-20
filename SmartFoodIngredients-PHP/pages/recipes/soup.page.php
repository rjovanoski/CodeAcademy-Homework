<div class="soup-hero">
    <img src="img/louis-hansel-shotsoflouis-tp3M3GCbssQ-unsplash.jpg" alt="" srcset="">
        <div class="soup-hero-text">SOUP<br>Delicious compilation<br>of flavors</div>
</div>
    <div class="soup-recipes">
        <section class="soup">
            <div class="container">
                <?php  foreach ($rowSoupRecipes as $rowSoupRecipe){ ?>
                    <div class="soup-box-recipe">
                        <div class="recipe-image">
                            <a href="index.php?page=soup-recipe&id=<?php echo $rowSoupRecipe['id'];?>">
                                <img src="<?php echo $dirSoupRecipeImage.$rowSoupRecipe['image']; ?>" alt="<?php echo $rowSoupRecipe['image']; ?>" srcset="">
                            </a>
                        </div>
                            <div class="recipe-left-side">
                                <div class="recipe-name">
                                    <h2><?php echo $rowSoupRecipe['name']; ?></h2>
                                </div>
                                    <div class="recipe-description">
                                        <h3>Time for preparation: <br><span><?php echo $rowSoupRecipe['preparation_time']; ?> minutes</span></h3>
                                        <p class="description">Description: <br><span><?php echo $rowSoupRecipe['description']; ?></span></p>
                                        <a href="index.php?page=soup-recipe&id=<?php echo $rowSoupRecipe['id'];?>">View Recipe</a>
                                    </div>                                    
                            </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </div>