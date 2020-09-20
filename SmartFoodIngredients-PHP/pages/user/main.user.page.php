<div class="user-box"> 
    <div class="profile-image">                      
        <img src="<?php echo $dirImage.$userProfileImage;?>" alt="<?php echo $userProfileImage;?>" srcset="">
    </div>
        <div class="user-information">
            <div class="name">
                <h3><?php echo $name; ?></h3>                    
            </div>
                <div class="username">
                    <span>Username: <?php echo $userName; ?></span>
                </div>
                <div class="email">
                    <span>Email: <?php echo $userEmail; ?></span>
                </div>
                    <div class="description">
                        <h3>Short Bio</h3>
                        <p><?php echo $userBio; ?></p>
                    </div>
                        <h3>My recipes</h3>
                        <div class="recipes">  
                        <?php foreach ($rowBreakfastUserRecipes as $rowBreakfastUserRecipe) :?>                                                          
                                <p><?php echo $rowBreakfastUserRecipe['name'];?></p>    
                        <?php endforeach; ?>
                        <?php foreach ($rowBreadUserRecipes as $rowBreadUserRecipe) :?>                                                          
                                <p><?php echo $rowBreadUserRecipe['name'];?></p>                           
                        <?php endforeach; ?>
                        <?php foreach ($rowMeatUserRecipes as $rowMeatUserRecipe) :?>                                                          
                                <p><?php echo $rowMeatUserRecipe['name'];?></p>  
                        <?php endforeach; ?>
                        <?php foreach ($rowBurgerUserRecipes as $rowBurgerUserRecipe) :?>                                                          
                                <p><?php echo $rowBurgerUserRecipe['name'];?></p>                           
                        <?php endforeach; ?>
                        <?php foreach ($rowPastaUserRecipes as $rowPastaUserRecipe) :?>                                                          
                                <p><?php echo $rowPastaUserRecipe['name'];?></p>    
                        <?php endforeach; ?>
                        <?php foreach ($rowPizzaUserRecipes as $rowPizzaUserRecipe) :?>                                                          
                                <p><?php echo $rowPizzaUserRecipe['name'];?></p>                           
                        <?php endforeach; ?>
                        <?php foreach ($rowVeganUserRecipes as $rowVeganUserRecipe) :?>                                                          
                                <p><?php echo $rowVeganUserRecipe['name'];?></p>                           
                        <?php endforeach; ?>
                        <?php foreach ($rowSoupUserRecipes as $rowSoupUserRecipe) :?>                                                          
                                <p><?php echo $rowSoupUserRecipe['name'];?></p>                           
                        <?php endforeach; ?>
                        <?php foreach ($rowCakeUserRecipes as $rowCakeUserRecipe) :?>                                                          
                                <p><?php echo $rowCakeUserRecipe['name'];?></p>                           
                        <?php endforeach; ?>
                        </div>
        </div>                        
</div>  