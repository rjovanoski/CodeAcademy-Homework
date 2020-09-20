<?php

session_start();

$name = "";
$username = "";
$email = "";
$errors = array();
$message = "";
$messages = array();
include 'includes/db.inc.php';

/*********************************************************REGISTER NEW USER*******************************************************/
if (isset($_POST['register-submit'])) {
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);
    $date = date('Y-m-d H:m:s');
    //ALL USERS ARE SET TYPE user, admin is entered manually 
    $user_type = "user";

    //ALL FIELDS ARE REQUIRED
    // If no name is entered display error message
    if (empty($name)) {
        array_push($errors, "Name is required!");
    }
    // If no username is entered display error message
    if (empty($username)) {
        array_push($errors, "Username is required!");
    }
    // If no email is entered display error message
    if (empty($email)) {
        array_push($errors, "Email address is required!");
    }
    // If no password is entered display error message
    if (empty($password)) {
        array_push($errors, "Password is required!");
    }
    // If two passwords don't match display error message
    if ($password != $confirmpassword) {
        array_push($errors, "The two passwords don't match!");
    }

    //Fetch data for users to check if user exists
    $query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    //Check if user exists
    if ($user) {
        //If user with that username already exists display error message
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists!");
        }
        //If user with that email already exists display error message
        if ($user['email'] === $email) {
            array_push($errors, "Email address already exists!");
        }
    }
    //If no user exists with that username and email, add new user to database
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "INSERT INTO users (name, username, email, password, date_added, user_type)
        VALUES('$name','$username','$email','$password','$date', '$user_type')";

        mysqli_query($conn, $query);
        $_SESSION['username'] = $username;
        // Display message after register success
        $_SESSION['success'] = "<div class='register-success'><h3>You are now registered</h3><a href='index.php?page=login'>Go to Login Page</a></div>";
        header("Location: index.php?page=register");
    }
} 
/*********************************************************************************************************************************/

/*************************************************************LOGIN***************************************************************/
if(isset($_POST['login-submit'])) {    
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // If no email is entered display error message
    if (empty($email)) {
        array_push($errors, "Email is required!");
    }
    // If no password is entered display error message
    if (empty($password)) {
        array_push($errors, "Password is required!");
    }

    if (count($errors) == 0) {
        //If no errors fetch user details from table
        $password = md5($password);
        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $query);
        //Check if user details exist in database
        if (mysqli_num_rows($result) == 1) {

            $logedUser = mysqli_fetch_assoc($result); 
            //Check if user is administrator or user
            if ($logedUser['user_type'] == 'admin') {
                $_SESSION['name'] = $logedUser;
                header("Location: index.php?page=admin-main");
            }else {
                $_SESSION['name'] = $logedUser;
                header("Location: index.php?page=user-main");
            }           
        // If incorect email or password is entered display error message
        }else {
            array_push($errors, "Wrong email/password!");
        }
    }
}
/**********************************************************************************************************************************/
/*********************************************************PASSWORD RESSET**********************************************************/
if (isset($_POST['resset-submit'])) {
    //Check to see if email exists in database
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $query = "SELECT email FROM users WHERE email='$email'";
    $results = mysqli_query($conn, $query);
    
    // If no email is entered display error message
    if (empty($email)) {
      array_push($errors, "Your email is required!");
    // If no user with entered email display error message 
    }else if(mysqli_num_rows($results) <= 0) {
      array_push($errors, "No user with that email address!");
    }
    //Create a random token in table
    $token = bin2hex(random_bytes(50));
  
    if (count($errors) == 0) {
        //If no errors insert email and token in table
        $query = "INSERT INTO password_resset(email, token) VALUES ('$email', '$token')";
        $result = mysqli_query($conn, $query);
        
        //Send email to user with link to resset password
        $to = $email;
        $subject = "Reset your password on smartfoodingredients.com";
        $msg = "Hi there, click on this <a href=\"index.php?page=newpassword&token=" . $token . "\">link</a> to reset your password on our site";
        $msg = wordwrap($msg,70);
        $headers = "From: admin@smartfoodingredients.com";
        mail($to, $subject, $msg, $headers);
        //redirect user to pending page
        header('location: index.php?page=pending&email='. $email);
    }
  }
/***********************************************************************************************************************************/
/*********************************************************NEW PASSWORD**********************************************************/
if (isset($_POST['newpass-submit'])){
    $newPassword = mysqli_real_escape_string($conn, $_POST['newpass']);
    $newConfirmPassword = mysqli_real_escape_string($conn, $_POST['newconfirmpass']);

    $token = $_SESSION['token'];
    //Check if two passwords match
    if(empty($newPassword) || empty($newConfirmPassword)){
        array_push($errors, "Password is required!");
    }
    if ($newPassword !== $newConfirmPassword) {
        array_push($errors, "Passwords don't match!");
    }
    //Check if no errors
    if (count($errors) == 0) {
        //Fetch data from table
        $query = "SELECT email FROM password_resset WHERE token = '$token' LIMIT 1";
        $result = mysqli_query($conn, $query);
        $email = mysqli_fetch_assoc($result)['email'];

        if ($email) {
            //Insert new password for user
            $newPassword = md5($newPassword);
            $query = "UPDATE users SET password = '$newPassword' WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            header("Location: index.php?page=newpassword");
            //Display message if password is changed
            $message = array_push($messages, "Password successfully changed");
        }
    }
}
/***************************************************************************************************************************/
/***********************************************MAIL TO SEND FROM CONTACT PAGE**********************************************/
$fromName = "";
$fromEmail = "";
$fromMessage = "";

if(isset($_POST['contact-submit'])){
    //Send mail to this email
    $to = "smartfoodingredients@test.com";
    $fromName = $_POST['name'];
    $fromEmail = $_POST['email'];
    $fromMessage = $_POST['message'];

    // If no name is entered display error message
    if (empty($fromName)) {
        array_push($errors, "Name is required!");
    }
    // If no email is entered display error message
    if (empty($fromEmail)) {
        array_push($errors, "Email is required!");
    }
    // If no message is entered display error message
    if (empty($fromMessage)) {
        array_push($errors, "Message is required!");
    }

    $subject = "Contact from ";
    $message = $fromName . " " . $fromEmail . " wrote the following:" . "\n\n" . $fromMessage;
    $headers = "From:" . $fromName;
    mail($to,$subject,$message,$headers);
    $message = array_push($messages, "Message has been sent");
}
/**************************************************************************************************************************************/