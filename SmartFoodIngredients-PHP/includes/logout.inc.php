<?php   
    session_start(); //Start session
    session_destroy(); //Destroy session
    unset($_SESSION['name']); //Unset session
    header("location: ../index.php?page=home"); //Redirect after logout to home page
exit();
?>  