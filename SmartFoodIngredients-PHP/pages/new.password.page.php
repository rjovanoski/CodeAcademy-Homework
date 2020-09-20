<div class="newpass-form">
    <div class="newpass-left-side">
        <img src="img/edgar-castrejon-1CsaVdwfIew-unsplash.jpg" alt="" srcset="">    
    </div>
    <div class="newpass-right-side">
    <form action="" method="POST" name="newpass">
    <?php include 'includes/messages.inc.php'; ?>
        <h1>New Password</h1>
            <?php include 'includes/errors.inc.php'; ?>
                <div class="newpass-input">
                    <div class="newpass">
                        <input type="password" name="newpass" placeholder="Enter New Password">
                    </div> 
                    <div class="newpass-confirm">
                        <input type="password" name="newconfirmpass" placeholder="Confirm Password">
                    </div>                        
                </div>
                    <div class="login-link-page">
                      <span>Remembered your password? <a href="index.php?page=login">Click here.</a>
                    </div>
                        <button type="submit" name="newpass-submit" class="newpass-submit">Submit</button>
    </form>
    </div>
</div>