<?php

session_start();

$hasErrors = false;
$result = true;

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $petName = $results['petName'];
    $size = $results['size'];
    $petAge = $results['petAge'];
    $result = $results['result'];
    $errors = $results['errors'];
    $hasErrors = $results['hasErrors'];
}

session_unset();