<div class="pasta-hero">
    <img src="img/alex-motoc-QEbIgaxP7N8-unsplash.jpg" alt="" srcset="">
        <div class="pasta-hero-text">PASTA<br>Creamy dish that even<br>the pickiest eaters will love</div>
</div>
    <div class="pasta-recipes">
        <section class="pasta">
            <div class="container">
                <?php foreach ($rowPastaRecipes as $rowPastaRecipe) { ?>
                    <div class="pasta-box-recipe">
                        <div class="recipe-image">
                            <a href="index.php?page=pasta-recipe&id=<?php echo $rowPastaRecipe['id'];?>">
                                <img src="<?php echo $dirPastaRecipeImage.$rowPastaRecipe['image']; ?>" alt="<?php echo $rowPastaRecipe['image']; ?>" srcset="">
                            </a>
                        </div>
                            <div class="recipe-left-side">
                                <div class="recipe-name">
                                    <h2><?php echo $rowPastaRecipe['name'] ?></h2>
                                </div>
                                    <div class="recipe-description">
                                        <h3>Time for preparation: <br><span><?php echo $rowPastaRecipe['preparation_time'] ?> minutes</span></h3>
                                        <p class="description">Description: <br><span><?php echo $rowPastaRecipe['description'] ?></span></p>
                                        <a href="index.php?page=pasta-recipe&id=<?php echo $rowPastaRecipe['id'];?>">View Recipe</a>
                                    </div>                                    
                            </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </div>
