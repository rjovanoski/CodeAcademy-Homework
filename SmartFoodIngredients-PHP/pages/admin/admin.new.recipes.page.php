<div class="admin-container">
    <?php foreach ($rowRecipes as $rowRecipe) {?>
    <form name="admin-user-recipe" method="POST" enctype="multipart/form-data">
        <div class="admin-recipe-box"> 
            <?php   if (isset($_POST[$rowRecipe['id']])) {
                        include "includes/messages.inc.php" ;
                    }else{ ?>
            <?php   if (isset($_POST[str_replace(' ', '', strtolower($rowRecipe['recipe_name']))])) {
                        include "includes/messages.inc.php" ;
                    }else{
            ?>       
            <div class="user-recipe-image">       
                <img class="recipe-image" name="recipe-image" src="<?php echo $dirRecipeImage.$rowRecipe['recipe_image']; ?>" alt="" srcset="">
            </div>
                <div class="user-new-recipe">
                <?php include "includes/errors.inc.php" ?>               
                    <h3>New Recipe From User</h3>
                        <div class="user-recipe-name">
                            <label for="recipe-name">Recipe Name: </label> 
                                <div>
                                 <input type="text" class="recipe-name" name="recipe-name" value="<?php echo ucfirst($rowRecipe['recipe_name']); ?>" readonly>               
                                </div>
                        </div>  
                            <div class="recipe-type">
                                <label for="recipe-type">Recipe Type: </label> 
                                <div>
                                <input type="text" class="recipe-type" name="recipe-type" value="<?php echo ucfirst($rowRecipe['recipe_type']); ?>" readonly>  
                                </div>
                            </div> 
                                <div class="ingredients">                                            
                                    <label for="ingredients">Ingredients </label>                                                            
                                        <div>
                                        <textarea type="text" class="ingredients" name="recipe-ingredients" value="" cols="50" rows="5" readonly><?php echo $rowRecipe['recipe_ingredients']; ?></textarea>
                                        </div>
                                </div>
                            <div class="recipe-time-preparation">
                                <label for="recipe-time-preparation">Time For Preparation in minutes:</label> 
                                <div>
                                <input type="number" class="recipe-time-preparation" name="recipe-preparation-time" value="<?php echo $rowRecipe['recipe_preparation_time']; ?>" readonly> 
                                </div>
                            </div>          
                                <div class="preparation">                                            
                                    <label for="preparation">Preparation</label>                                                            
                                        <div>
                                        <textarea type="text" class="recipe-preparation" name="recipe-preparation" cols="50" rows="5" value="" readonly><?php echo $rowRecipe['recipe_preparation']; ?></textarea>
                                        </div>
                                </div>
                                <div class="description">                                            
                                    <label for="description">Recipe Description</label>                                                            
                                        <div>
                                        <textarea type="text" class="recipe-description" name="recipe-description" cols="50" rows="5" value="" readonly><?php echo $rowRecipe['recipe_description']; ?></textarea>
                                        </div>
                                </div>                
                                <button type="submit" name="<?php echo str_replace(' ', '', strtolower($rowRecipe['recipe_name'])); ?>">Confirm Recipe</button> 
                                <?php } ?> 
                                <button type="submit" name="<?php echo $rowRecipe['id']; ?>" value="<?php echo $rowRecipe['id']; ?>">Delete from admin recipes</button> 
                                         
                </div>
                <?php } ?>
    </div>
   
    </form>
    <?php  } ?>
</div>