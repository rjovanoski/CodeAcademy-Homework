<?php
include 'db.inc.php';
$error = "";
$errors = array();

// Update user information  

    if(isset($_POST['profile-update'])){

        $userLastName = mysqli_real_escape_string($conn, $_POST['lname']);
        $userAddress = mysqli_real_escape_string($conn, $_POST['address']);
        $userBiography = mysqli_real_escape_string($conn, $_POST['biography']);
        $userFacebookAccount = mysqli_real_escape_string($conn, $_POST['fb-account']);
        $userGithubAccount = mysqli_real_escape_string($conn, $_POST['git-account']);
        $userTwitterAccount = mysqli_real_escape_string($conn, $_POST['twitter-account']);
        //Profile image user folder
        $dirImage = "img/users/";
        $fileName = basename($_FILES['profile-image']['name']);        
        $fileError = $_FILES['profile-image']['error'];     
        
        // Update user Lastname
        if (isset($_POST['lname']) && !empty($_POST['lname'])) {
            $sql = "UPDATE users SET last_name='$userLastName' WHERE email = '".$_SESSION['name']['email']."'";
            $rs = mysqli_query($conn, $sql);
            
        }else {
            $error = array_push($errors, "Error updating Lastname");
        }

        // Update user Address
        if (isset($_POST['address']) && !empty($_POST['address'])) {
            $sql = "UPDATE users SET address='$userAddress' WHERE email = '".$_SESSION['name']['email']."'";
            $rs = mysqli_query($conn, $sql);
            
        }else {
            $error = array_push($errors, "Error updating Your Address");
        }

        // Update user Biography
        if (isset($_POST['biography']) && !empty($_POST['biography'])) {
            $sql = "UPDATE users SET biography='$userBiography' WHERE email = '".$_SESSION['name']['email']."'";
            $rs = mysqli_query($conn, $sql);
            
        }else {
            $error = array_push($errors, "Error updating Your Biography");
        }

        // Update user Facebook Account
        if (isset($_POST['fb-account']) && !empty($_POST['fb-account'])) {
            $sql = "UPDATE users SET fb_account='$userFacebookAccount' WHERE email = '".$_SESSION['name']['email']."'";
            $rs = mysqli_query($conn, $sql);
            
        }else {
            $error = array_push($errors, "Error updating Facebook Account");
        }

        // Update user Github Account
        if (isset($_POST['git-account']) && !empty($_POST['git-account'])) {
            $sql = "UPDATE users SET git_account='$userGithubAccount' WHERE email = '".$_SESSION['name']['email']."'";
            $rs = mysqli_query($conn, $sql);
            
        }else {
            $error = array_push($errors, "Error updating Github Account");
        }
        
        // Update user Twitter Account
        if (isset($_POST['twitter-account']) && !empty($_POST['twitter-account'])) {
            $sql = "UPDATE users SET twitter_account='$userTwitterAccount' WHERE email = '".$_SESSION['name']['email']."'";
            $rs = mysqli_query($conn, $sql);
            
        }else {
            $error = array_push($errors, "Error updating Twitter Account");
        }
        
        // Update user Profile Image
        if (isset($_FILES['profile-image']['name']) && !empty($_FILES['profile-image']['name'])) {
            //Get the image extension
            $fileExt = explode('.', $fileName);
            //Make the image extension lovercase
            $fileActualExtension = strtolower(end($fileExt));
            //Set the file types that are alowed for recipe image 
            $allowedFile = array('jpg','jpeg', 'png');
            //Check if the extension is allowed
            if (in_array($fileActualExtension, $allowedFile)) {
    
                if ($fileError === 0) {
                    
                    $sql = "UPDATE users SET image = '$fileName' WHERE email = '".$_SESSION['name']['email']."'";
                    $rs = mysqli_query($conn, $sql); 
                    //Copy user profile image to user folder       
                    move_uploaded_file($_FILES['profile-image']['tmp_name'], $dirImage.$fileName);
    
                }else {
    
                    $error = array_push($errors, "Error uploading file");
                }
    
            }else {
    
                $error = array_push($errors, "File Type is not supported");
            }     
        }
        	
    }

// Get user information from database and display on user page  
    $dirImage = "img/users/";
    $name = "";
    $userName =""; 
    $userEmail = "";
    $userLastName = "";
    $userAddress = "";
    $userBio = "";
    $userFbAccount = "";
    $userGitAccount = "";
    $userTwitterAccount = ""; 
    $userProfileImage = "";

    $sql = "SELECT * FROM users WHERE email = '".$_SESSION['name']['email']."'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    
    while ($row = mysqli_fetch_array($result)) {
        
        $name = $row['name'];
        $userName = $row['username'];
        $userEmail = $row['email'];
        $userLastName = $row['last_name'];
        $userAddress = $row['address'];
        $userBio = $row['biography'];
        $userFbAccount = $row['fb_account'];
        $userGitAccount = $row['git_account'];
        $userTwitterAccount = $row['twitter_account'];
        $userProfileImage = $row['image'];
    
    }
/*******************************CLOSE CONNECTION************************************/
mysqli_close($conn);
/***********************************************************************************/