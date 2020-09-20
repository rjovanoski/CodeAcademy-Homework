<div class="cake-hero">
    <img src="img/michaela-baum-VnM6_liIRJ0-unsplash.jpg" alt="" srcset="">
        <div class="cake-hero-text">CAKE<br>Spoonful of fluffy cream</div>
</div>
    <div class="cake-recipes">
        <section class="cake">
            <div class="container">
                <?php  foreach ($rowCakeRecipes as $rowCakeRecipe){ ?>
                    <div class="cake-box-recipe">
                        <div class="recipe-image">
                            <a href="index.php?page=cake-recipe&id=<?php echo $rowCakeRecipe['id'];?>">
                                <img src="<?php echo $dirCakeRecipeImage.$rowCakeRecipe['image']; ?>" alt="<?php echo $rowCakeRecipe['image']; ?>" srcset="">
                            </a>
                        </div>
                            <div class="recipe-left-side">
                                <div class="recipe-name">
                                    <h2><?php echo $rowCakeRecipe['name']; ?></h2>
                                </div>
                                    <div class="recipe-description">
                                        <h3>Time for preparation: <br><span><?php echo $rowCakeRecipe['preparation_time']; ?> minutes</span></h3>
                                        <p class="description">Description: <br><span><?php echo $rowCakeRecipe['description']; ?></span></p>
                                        <a href="index.php?page=cake-recipe&id=<?php echo $rowCakeRecipe['id'];?>">View Recipe</a>
                                    </div>                                    
                            </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </div>