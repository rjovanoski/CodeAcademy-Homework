<div class="login">
    <div class="left-side">
        <img src="img/karly-gomez-lK1Q5RyD6tc-unsplash2.jpg" alt="" srcset="">
    </div>
        <div class="right-side">               
            <div class="form-box">
                <h1 class="title">Login</h1>
                    <?php include 'includes/errors.inc.php'; ?>
                        <form action="" method="POST" name="login">
                            <div>                        
                                <input type="email" name="email" placeholder="Enter Email ..." value="<?php echo $email; ?>">
                            </div>
                                <div>
                                    <input type="password" name="password" placeholder="Enter Password ...">
                                </div>
                                    <button class="btn" type="submit" name="login-submit">Login</button>
                        </form>
                            <div class="forgot-noAccount">
                                <p>Forgot Your Password? <a href="index.php?page=pass-resset">Enter Here</a></p> 
                                <p>No Account? <a href="index.php?page=register">Register Here</a></p> 
                            </div>    
            </div>
        </div>
</div>