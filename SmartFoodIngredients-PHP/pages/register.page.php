    <div class="register">
            <div class="register-left-side">
                <img src="img/monika-grabkowska-P1aohbiT-EY-unsplash.jpg" alt="" srcset="">
            </div>
                <div class="register-right-side"> 
                    <?php  
                        
                        if (isset($_SESSION['username']) && count($errors) == 0) {
                            
                            echo $_SESSION['success'];                            

                        }else {            
                    ?>              
                    <div class="form-box">
                        <h1 class="title">Register</h1> 
                        <?php include 'includes/errors.inc.php'; ?>                          
                            <form action="" method="POST" name="register">
                                <div>                        
                                    <input type="text" name="name" placeholder="Enter Your Name ..." value="<?php echo $name; ?>">
                                </div>
                                <div>                        
                                    <input type="text" name="username" placeholder="Enter User Name ..." value="<?php echo $username; ?>">
                                </div>
                                <div>                        
                                    <input type="email" name="email" placeholder="Enter Email ..." value="<?php echo $email;?>">
                                </div>
                                    <div>
                                        <input type="password" name="password" placeholder="Enter Password ...">
                                    </div>
                                    <div>                        
                                        <input type="password" name="confirmpassword" placeholder="Confirm Password ...">
                                    </div>
                                        <button class="btn" type="submit" name="register-submit">Register</button>
                            </form>
                            <div class="forgot-login">
                                <p>Forgot Your Password? <a href="index.php?page=pass-resset">Enter Here</a></p> 
                                <p>Have Account? <a href="index.php?page=login">Login Here</a></p> 
                            </div>
                    </div>
                </div>
                    <?php }?>
        </div>