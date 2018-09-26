<?php

session_start();

require 'helpers.php';

$petName = $_GET['petName'];
$dogsPHP = file_get_contents('dogdata.php');



$_SESSION['results'] = [
    'petName' => $petName,
];

header('Location: index.php');

