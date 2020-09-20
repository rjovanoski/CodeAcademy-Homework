<div class="bread-hero">
    <img src="img/wesual-click-rsWZ-P9FbQ4-unsplash.jpg" alt="" srcset="">
        <div class="bread-hero-text">Bread<br>Crunchy crust<br>Delicious softness inside</div>
</div>
    <div class="bread-recipes">
        <section class="bread">
            <div class="container">
                <?php foreach ($rowBreadRecipes as $rowBreadRecipe) { ?>                    
                    <div class="bread-box-recipe">
                        <div class="recipe-image">
                            <a href="index.php?page=bread-recipe&id=<?php echo $rowBreadRecipe['id'];?>"><img src="<?php echo $dirBreadRecipeImage.$rowBreadRecipe['image']; ?>" alt="<?php echo $rowBreadRecipe['image']; ?>" srcset=""></a>
                        </div>
                            <div class="recipe-left-side">
                                <div class="recipe-name">
                                    <h2><?php echo $rowBreadRecipe['name'] ?></h2>
                                </div>
                                    <div class="recipe-description">
                                        <h3>Time for preparation: <br><span><?php echo $rowBreadRecipe['preparation_time']; ?> minutes</span></h3>
                                        <p class="description">Description: <br><span><?php echo $rowBreadRecipe['description']; ?></span></p>
                                        <a href="index.php?page=bread-recipe&id=<?php echo $rowBreadRecipe['id'];?>">View Recipe</a>
                                    </div>                                    
                            </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </div>