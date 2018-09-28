<?php

session_start();

require 'helpers.php';

$petName = $_GET['petName'];

$size = $_GET['size'];

$petAge = $_GET['petAge'];

$dogs = [
    'Puppy' => [
        '0-15' => '1/2',
        '16-25' => '1',
        '26-40' => '1.5',
        '41-60' => '2.4',
        '61-80' => '3.5',
        '81-100' => '4.5',
        '101' => '6'
    ],
    'Adult' => [
        '0-15' => '1',
        '16-25' => '1.',
        '26-40' => '2.5',
        '41-60' => '3.5',
        '61-80' => '4.5',
        '81-100' => '5.5',
        '101' => '6+'
    ],
    'Senior' => [
        '0-15' => '1/2',
        '16-25' => '1',
        '26-40' => '2',
        '41-60' => '3',
        '61-80' => '4',
        '81-100' => '5',
        '101' => '5.5'
    ],
];

$result = $dogs[$petAge][$size];

$_SESSION['results'] = [
    'petName' => $petName,
    'size' => $size,
    'petAge' => $petAge,
    'result' => $result,
];

header('Location: index.php');
