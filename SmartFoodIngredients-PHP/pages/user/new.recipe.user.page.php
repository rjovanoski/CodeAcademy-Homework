<div class="new-recipe-box"> 
            <?php 
                if (isset($_POST['new-recipe-submit']) && count($errors) == 0) {

                    include "includes/messages.inc.php";

                    echo    "<div class='new-recipe-after'>                    
                                <a href='index.php?page=user-new-recipe' class='nav-link user-new-recipe'>Another Recipe</a>
                            </div>";
                }else{
            ?>
        <form name="user-recipe" method="POST" enctype="multipart/form-data">
            
            <div class="recipe-image">       
                <img src="" alt="" srcset="">
                <input type="file" id="file" name="recipe-image"> 
                <label for="file">Upload Image</label>
            </div>
                <div class="new-recipe">
                    <h3>New Recipe</h3>
                    <?php include "includes/errors.inc.php" ?>
                        <div class="recipe-name">
                            <label for="recipe-name">Recipe Name:</label> 
                                <div>
                                    <input type="text" placeholder="" name="recipe-name">                  
                                </div>
                        </div>  
                            <div class="recipe-type">
                                <label for="recipe-type">Recipe Type:</label> 
                                    <div>
                                        <select name="recipe-type">
                                            <option name="" value="" selected>...</option>
                                            <option name="breakfast" value="breakfast">Breakfast</option>
                                            <option name="bread" value="bread">Bread</option>
                                            <option name="burger" value="burger">Burger</option>                                            
                                            <option name="meat" value="meat">Meat</option>
                                            <option name="soup" value="soup">Soup</option>
                                            <option name="pasta" value="pasta">Pasta</option>
                                            <option name="pizza" value="pizza">Pizza</option>
                                            <option name="vegan" value="vegan">Vegan</option>
                                            <option name="cake" value="cake">Cake</option>
                                        </select>
                                    </div>
                            </div> 
                                <div class="ingredients">                                            
                                    <label for="ingredients">Write all the ingredients and the quantity necessary for making the recepe:</label>                                                            
                                        <div>
                                            <textarea name="ingredients" id="" cols="50" rows="5"></textarea>
                                        </div>
                                </div>
                            <div class="recipe-time-preparation">
                                <label for="recipe-time-preparation">Time For Preparation in minutes:</label> 
                                <div>
                                    <input type="number" placeholder="" name="preparation-time">                  
                                </div>
                            </div>          
                                <div class="preparation">                                            
                                    <label for="preparation">Preparation</label>                                                            
                                        <div>
                                            <textarea name="preparation" id="" cols="50" rows="5"></textarea>
                                        </div>
                                </div>
                                <div class="description">                                            
                                    <label for="description">Recipe Description</label>                                                            
                                        <div>
                                            <textarea name="description" id="" cols="50" rows="5"></textarea>
                                        </div>
                                </div>
                                <button type="submit" name="new-recipe-submit">Add Recipe</button>                
                </div>
        </form>
            <?php } ?>
</div>