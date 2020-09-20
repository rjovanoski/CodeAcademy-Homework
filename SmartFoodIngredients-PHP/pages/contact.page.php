<div class="contact">
    <div class="left-side">
        <img src="img/casey-lee-awj7sRviVXo-unsplash.jpg" alt="" srcset="">
    </div>
        <div class="right-side">               
            <div class="form-box">
                <?php   if (isset($_POST['contact-submit']) && count($errors) == 0) {
                            include 'includes/messages.inc.php';
                        }else {
                ?>
                <h1 class="title">Contact Us</h1>
                    <?php   include 'includes/errors.inc.php'; ?> 
                    <form action="" method="POST" name="contact">
                        <div>                        
                            <input type="text" name="name" placeholder="Enter Name ..." value="<?php echo $fromName;?>">
                        </div>
                            <div>                        
                                <input type="email" name="email" placeholder="Enter Email ..." value="<?php echo $fromEmail; ?>">
                            </div>
                                <div>
                                    <textarea name="message" id="" cols="30" rows="5" placeholder="Write your message ..."><?php echo $fromMessage; ?></textarea>
                                </div>
                                    <button class="contact-btn" type="submit" name="contact-submit">Submit</button>
                    </form> 
                <?php   } ?>  
            </div>
        </div>
</div>