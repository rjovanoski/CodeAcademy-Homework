<div class="user-profile"> 
    <form name="user-profile" method="POST" enctype="multipart/form-data">  
        <div class="image">       
            <img src="<?php echo $dirImage.$userProfileImage; ?>" alt="" srcset="">
            <input type="file" id="file" name="profile-image"> 
            <label for="file" name="profile-image">Upload Image</label>
        </div>
            <div class="user-information">
                <h3>Edit Profile</h3>
                    <div class="name">
                        <p><?php echo $name. ' ' .$userLastName; ?></p> 
                    </div>
                        <div class="lname">
                                    <input type="text" placeholder="Edit Last Name" name="lname">
                        </div>
                            <div class="address">
                                <label for="address">Home Address:  <?php echo $userAddress; ?></label> 
                                    <div>
                                        <input type="text" placeholder="Edit Home Address" name="address">                  
                                    </div>
                            </div>
                                <div class="username">
                                    <label for="username">Username: <span><?php echo $userName; ?></span></label>
                                    <div class="email">
                                        <label for="email">Email: <spann> <?php echo $userEmail; ?></spann></label>
                                    </div>
                                        <div class="facebook">
                                            <label for="fbaccount">Facebook Account: <?php echo $userFbAccount; ?></label>
                                                <div>
                                                    <input type="text" placeholder="Edit Facebook Account" name="fb-account"> 
                                                </div>
                                        </div>
                                            <div class="github">
                                                <label for="gitaccount">Github Account: <?php echo $userGitAccount; ?></label>        
                                                    <div>
                                                        <input type="text" placeholder="Edit Github Account" name="git-account"> 
                                                    </div>
                                            </div>
                                                <div class="twitter">                                
                                                    <label for="twitteraccount">Twitter Account: <?php echo $userTwitterAccount; ?></label>                                                        
                                                        <div>
                                                            <input type="text" placeholder="Edit Twitter Account" name="twitter-account"> 
                                                        </div>
                                                </div>
                                                    <div class="biography">                                            
                                                        <label for="biography">Your Biography</label>                                                            
                                                            <div>
                                                                <textarea name="biography" id="" cols="50" rows="5" placeholder="Write something about yourself..."></textarea>
                                                            </div>
                                                    </div>
                                <button type="submit" name="profile-update">Update</button>
            </div>
    </form>
</div>