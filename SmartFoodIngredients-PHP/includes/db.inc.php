<?php

$host = 'localhost';
$dbname = 'root';
$dbpass = '';
$db = '';

$conn = mysqli_connect($host, $dbname, $dbpass, $db);

if (!$conn) {
    echo "ERROR: connection:" . mysqli_error();
    die();
};