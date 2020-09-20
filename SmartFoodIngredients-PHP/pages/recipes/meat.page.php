<div class="meat-hero">
    <img src="img/markus-spiske-A1Yob9kBmKk-unsplash.jpg" alt="" srcset="">
        <div class="meat-hero-text">MEAT<br>Smoked, dried and fried</div>
</div>
    <div class="meat-recipes">
        <section class="meat">
            <div class="container">
                <?php foreach ($rowMeatRecipes as $rowMeatRecipe){ ?>
                    <div class="meat-box-recipe">
                        <div class="recipe-image">
                            <a href="index.php?page=meat-recipe&id=<?php echo $rowMeatRecipe['id'];?>">
                                <img src="<?php echo $dirMeatRecipeImage.$rowMeatRecipe['image']; ?>" alt="<?php echo $rowMeatRecipe['image']; ?>" srcset="">
                            </a>
                        </div>
                            <div class="recipe-left-side">
                                <div class="recipe-name">
                                    <h2><?php echo $rowMeatRecipe['name']; ?></h2>
                                </div>
                                    <div class="recipe-description">
                                        <h3>Time for preparation: <br><span><?php echo $rowMeatRecipe['preparation_time']; ?> minutes</span></h3>
                                        <p class="description">Description: <br><span><?php echo $rowMeatRecipe['description']; ?></span></p>
                                        <a href="index.php?page=meat-recipe&id=<?php echo $rowMeatRecipe['id'];?>">View Recipe</a>
                                    </div>                                    
                            </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </div>