<?php

session_start();

require 'helpers.php';


$petName = $_GET['petName'];

$size = $_GET['size'];

$petAge = $_GET['petAge'];


$_SESSION['results'] = [
    'petName' => $petName,
    'size' => $size,
    'petAge' => $petAge,
    ];

header('Location: index.php');
