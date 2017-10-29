<?php
$view = new stdClass();
$view->pageTitle = 'Converter';
require_once('Models/Converter.php');

if(isset($_POST['submit']))
{
    $converter = new Converter($_POST['number'],$_POST['unit']);
    $value = $converter->convert();
    $view->result = 'Converting ' . $_POST['number'] .
        ' from ' . $_POST['unit'] . ' is ' . $value . '.';
}
require_once('Views/converter.phtml');
