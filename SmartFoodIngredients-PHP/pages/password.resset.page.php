<div class="pass-resset">
    <div class="pass-resset-left-side">
        <img src="img/alex-loup-On2VseHUDXw-unsplash.jpg" alt="" srcset="">
    </div>
        <div class="pass-resset-right-side">               
            <div class="form-box">
                <h1 class="title">Password Resset</h1>
                    <?php   include 'includes/errors.inc.php'; ?> 
                        <form action="index.php?page=pass-resset" method="POST">                                
                            <div>                        
                                <input type="email" name="email" placeholder="Enter Email ...">
                            </div>                                   
                                <button class="btn" type="submit" name="resset-submit">Submit</button>
                        </form>
                            <div class="register-login">
                                <p>Don't Have Account? <a href="index.php?page=register">Sign Up</a></p> 
                                <p>Have Account? <a href="index.php?page=login">Login Here</a></p> 
                            </div>    
            </div>
        </div>
</div>