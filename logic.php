<?php

session_start();

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $petName = $results['petName'];
    $size = $results['size'];
}

session_unset();