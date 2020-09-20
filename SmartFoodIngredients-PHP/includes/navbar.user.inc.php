<ul class="nav-list-user" id="nav-list">  
    <div class="toggle-user" onclick="userFunction(this)">
        <div class="lineOne"></div>
        <div class="lineTwo"></div>
        <div class="lineThree"></div>
    </div>                                
        <div class="nav-items-user">
            <li class="nav-item">
                <a href="index.php?page=home" class="nav-link">Home</a>
            </li>
                <?php   if($_SESSION['name']['user_type'] === 'admin'){
                 //Display links to pages only for administrator   
                            echo    "<li class='nav-item'>
                                        <a href='index.php?page=admin-main' class='nav-link'>Main Page</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a href='index.php?page=admin-recipes' class='nav-link'>New Recipes</a>
                                    </li>";

                        }else{ 
                ?>
            <li class="nav-item">
                <a href="index.php?page=user-main" class="nav-link">Profile</a>
            </li>
            <li class="nav-item">
                <a href="index.php?page=user-profile" class="nav-link">Edit Profile</a>
            </li>
            <li class="nav-item">
                <a href="index.php?page=user-recipes" class="nav-link">My Recipes</a>
            </li>
            <li class="nav-item">
                <a href="index.php?page=user-new-recipe" class="nav-link">New Recipe</a>
            </li>
                <?php } ?>
            <li class="nav-item">
                <a href="includes/logout.inc.php" class="nav-link">Logout</a>
            </li>                               
        </div>                          
</ul>

    