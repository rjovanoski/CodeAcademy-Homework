<div class="recipe">
        <div class="recipe-left-side">
            <img src="<?php echo $dirSoupRecipeImage.$resultSoup[7]; ?>" alt="" srcset="">
        </div>
            <div class="recipe-right-side">
                <div class="recipe-name">
                    <h2><?php echo $resultSoup[2]; ?></h2>
                </div>
                <div class="recipe-description">
                        <p>Ingredients:</p>
                        <span><?php echo $resultSoup[3]; ?></span>
                        <p>Time to prepare: <span><?php echo $resultSoup[4]; ?> minutes</p>
                        <p>Preparation:</p>
                        <span><?php echo $resultSoup[5]; ?></span>
                        <p>Description:</p>
                        <span><?php echo $resultSoup[6]; ?></span>
                    </div>
            </div>
    </div>  