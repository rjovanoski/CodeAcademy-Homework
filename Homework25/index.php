<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $title = $_GET['title'];
}

if (!empty($page)) {
    
    switch ($page) {
        case 'about':
            $title = 'About';
            $footer = true;
            break;
        case 'contact':
            $title = 'Contact';
            $footer = false;
            break;
        case 'login':
            $title = 'Login';
            $footer = false;
            break;
        default:
            $title = 'Home';
            $footer = true;
            break;
    }

}else {
    $title = 'Home';
    $footer = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Local libraries -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="all.css">
    <script src="assets/js/all.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script defer src="assets/js/script.js"></script> -->

    <!-- cdn for libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script defer src="assets/js/script.js"></script>

    <title><?php echo $title ?></title>
    <style>
    </style>
</head>

<body>

<?php

include 'inc/menu.inc.php';

?>

<?php

if (!empty($page)) {
    
    switch ($page) {
        case 'about':
            include 'pages/about.page.php';
            break;
        case 'contact':
            include 'pages/contact.page.php';
            break;
        case 'login':
            include 'pages/login.page.php';
            break;
        default:
            include 'pages/index.page.php';
            break;
    }

}else {
    include 'pages/index.page.php';
}


?>

<?php

if ($footer) {

    include 'inc/footer.inc.php';
    
}

?>

</body>
</html>
