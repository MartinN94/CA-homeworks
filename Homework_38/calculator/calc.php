<?php
require 'includes/Calc.php';

use Includes\Calc\Calc;

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $calc = $_POST['cal'];

    $calcClass = new Calc($num1, $num2, $calc);
    echo 'The result is: '.$calcClass->calcMethod();