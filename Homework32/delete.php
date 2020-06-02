<?php 

if (isset($_GET['id'])) {

    $host = 'localhost';
    $user = 'predator';
    $pass = 'Marko';
    $db = 'crud_app';
 
    $link = mysqli_connect($host, $user, $pass, $db);
 
    $delete = "DELETE FROM users WHERE id=".$_GET['id'];

    mysqli_query($link, $delete);

    mysqli_close($link);

    header("Location: index.php");
    
};

?>