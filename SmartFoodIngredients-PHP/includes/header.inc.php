<div class="header">
    <div class="container">            
        <div class="logo">
            <h3><a href="index.php?page=home">Smart Food Ingredients</a></h3>
        </div>                               
            <ul class="nav-list" id="nav-list">  
                <div class="toggle" onclick="myFunction(this)">
                    <div class="barOne"></div>
                    <div class="barTwo"></div>
                    <div class="barThree"></div>
                </div>                                         
                    <div class="nav-items">
                        <li class="nav-item">
                            <a href="index.php?page=home" class="nav-link <?php if ($page == 'home'){echo 'active';} ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a href="index.php?page=recipes" class="nav-link <?php if ($page == 'recipes') {echo 'active';} ?>">Recipes</a>
                                     <div class="dropdown-content">
                                        <a href="index.php?page=breakfast" class="nav-link <?php if ($page == 'breakfast') {echo 'active';} ?>">Breakfast</a>
                                        <a href="index.php?page=bread" class="nav-link <?php if ($page == 'bread') {echo 'active';} ?>">Bread</a>
                                        <a href="index.php?page=burger" class="nav-link <?php if ($page == 'burger') {echo 'active';} ?>">Burger</a>
                                        <a href="index.php?page=meat" class="nav-link <?php if ($page == 'meat') {echo 'active';} ?>">Meat</a>
                                        <a href="index.php?page=soup" class="nav-link <?php if ($page == 'soup') {echo 'active';} ?>">Soup</a>
                                        <a href="index.php?page=pasta" class="nav-link <?php if ($page == 'pasta') {echo 'active';} ?>">Pasta</a>
                                        <a href="index.php?page=pizza" class="nav-link <?php if ($page == 'pizza') {echo 'active';} ?>">Pizza</a>
                                        <a href="index.php?page=vegan" class="nav-link <?php if ($page == 'vegan') {echo 'active';} ?>">Vegan</a>
                                        <a href="index.php?page=cake" class="nav-link <?php if ($page == 'cake') {echo 'active';} ?>">Cake</a>
                                    </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=about" class="nav-link <?php if ($page == 'about'){echo 'active';} ?>">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=contact" class="nav-link <?php if ($page == 'contact'){echo 'active';} ?>">Contact</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown-user">
                                <?php   if (isset($_SESSION['name'])) {
                                    
                                            if ($_SESSION['name']['user_type'] === 'admin') { 
                                                 //Display links to pages only for administrator
                                                echo "<a href='index.php?page=admin-main' class='nav-link'>". $_SESSION['name']['name']."</a>";
                                            }else{
                                                 //Display links to pages only for user
                                                echo "<a href='index.php?page=user-main' class='nav-link'>". $_SESSION['name']['name']."</a>";
                                            }
                                            
                                        }else { 
                                ?>
                                <a href="index.php?page=login" class="nav-link <?php if ($page == 'login'){echo 'active';} ?>"><i class="fas fa-user"></i></a>
                                        <?php } ?>
                                    <div class="dropdown-content-user">
                                        <?php   if (isset($_SESSION['name'])) {

                                                    if ($_SESSION['name']['user_type'] === 'admin') {   
                                                         //Display links to pages only for administrator
                                                        echo "<a href='index.php?page=admin-main' class='nav-link'>Main</a>
                                                            <a href='index.php?page=admin-recipes' class='nav-link'>Recipes</a>
                                                            <a href='includes/logout.inc.php' class='nav-link'>Log Out</a>";
                                                    
                                                    }else {
                                                         //Display links to pages only for user
                                                        echo "<a href='index.php?page=user-recipes' class='nav-link'>Recipes</a>
                                                            <a href='index.php?page=user-new-recipe' class='nav-link'>New Recipe</a>
                                                            <a href='includes/logout.inc.php' class='nav-link'>Log Out</a>";
                                                    }
                                                    
                                                }else{
                                        ?>
                                                        <a href="index.php?page=login" class="nav-link <?php if ($page == 'login'){echo 'active';} ?>">Login</a>
                                                        <a href="index.php?page=register" class="nav-link <?php if ($page == 'register'){echo 'active';} ?>">Register</a>
                                                        <a href="index.php?page=pass-resset" class="nav-link <?php if ($page == 'pass-resset'){echo 'active';} ?>">Forgot Password</a>
                                        <?php   } ?>
                                    </div>
                            </div>
                        </li>                               
                    </div>                          
            </ul>
    </div>
</div>

