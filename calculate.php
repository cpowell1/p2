<?php

session_start();

require 'helpers.php';

$petName = $_GET['petName'];
$dogsPHP = file_get_contents('dogdata.php');

$size = $_GET['size'];
$notSelected = ($size == 'choose');


$_SESSION['results'] = [
    'petName' => $petName,
    'size' => $size,
];

header('Location: index.php');

