<?php

session_start();

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $petName = $results['petName'];
    $size = $results['size'];
    $petAge = $results['petAge'];
}

session_unset();