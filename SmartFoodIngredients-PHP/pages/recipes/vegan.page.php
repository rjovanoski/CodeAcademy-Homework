<div class="vegan-hero">
    <img src="img/jess-torre-6-6sVwz1N2U-unsplash.jpg" alt="" srcset="">
        <div class="vegan-hero-text">VEGAN<br>Variety of nutritional<br>and healthy recipes</div>
</div>
    <div class="vegan-recipes">
        <section class="vegan">
            <div class="container">
                <?php foreach ($rowVeganRecipes as $rowVeganRecipe){ ?>
                    <div class="vegan-box-recipe">
                        <div class="recipe-image">
                            <a href="index.php?page=vegan-recipe&id=<?php echo $rowVeganRecipe['id'];?>">
                                <img src="<?php echo $dirVeganRecipeImage.$rowVeganRecipe['image']; ?>" alt="<?php echo $rowVeganRecipe['image']; ?>" srcset="">
                            </a>
                        </div>
                            <div class="recipe-left-side">
                                <div class="recipe-name">
                                    <h2><?php echo $rowVeganRecipe['name']; ?></h2>
                                </div>
                                    <div class="recipe-description">
                                        <h3>Time for preparation: <br><span><?php echo $rowVeganRecipe['preparation_time']; ?> minutes</span></h3>
                                        <p class="description">Description: <br><span><?php echo $rowVeganRecipe['description']; ?></span></p>
                                        <a href="index.php?page=vegan-recipe&id=<?php echo $rowVeganRecipe['id'];?>">View Recipe</a>
                                    </div>                                    
                            </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </div>