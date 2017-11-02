<?php
$view = new stdClass();
$view->pageTitle = 'Calculator';
require_once('Models/Calculator.php');

if(isset($_POST['submit']))
{
    $calculator = new Calculator($_POST['number1'],$_POST['number2'],$_POST['operation']);
    $value = $calculator->calculation();
    $view->result = 'Calculation ' . $_POST['number1'] . " " . $_POST['operation'] . " "  . $_POST['number2'].  " is " . $_POST[$value] . " . ";
}
require_once('Views/calculator.phtml');
