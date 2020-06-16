<?php

include 'includes/Calc.php';

use Calculator\Calc;

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$calc = $_POST['cal'];

$cal = new Calc($num1, $num2, $calc);

if (isset($_POST['num1']) && !empty($_POST['num2']) && isset($_POST['num2']) && !empty($_POST['num2'])) {

        echo $cal->calcMethod();

    }else  {
    
        echo "Please enter valid number!";

}

?>