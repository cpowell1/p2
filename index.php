<?php
require 'logic.php'
?>

<!doctype html>

<html lang="en">
<head>
    <title>Nutro Dog Food Calculator</title>
    <meta charset="utf-8">
    <link href='style.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">

</head>

<body>
<div class='container'>
    <img src='/images/nutro.png' alt='Dog Food'/>
    <h1>Nutro Dog Food Calculator</h1>

    <form method='Get' action='calculate.php'>
        <label>Your Pet's Name:
            <input type='text' name='petName'>
        </label>

        <label for='size'>Select Your Pet's Size:</label>
        <select name='size' id='size'>
            <option value='choose'>Choose one...</option>
            <option value='15'>Up to 15 lbs.</option>
            <option value='25'>16-25lbs.</option>
            <option value='40'>26-40lbs.</option>
            <option value='60'>41-60lbs.</option>
            <option value='80'>61-80lbs.</option>
            <option value='100'>81-100lbs.</option>
            <option value='101'>Over 100lbs.</option>
        </select>

        <label class='age'>Your Pet's Age:</label>
            <ul>
                <li>
                    <label><input type='checkbox' name='petAge'> Puppy</label>
                </li>
                <li>
                    <label><input type='checkbox' name='petAge'> Adult</label>
                </li>
                <li>
                    <label><input type='checkbox' name='petAge'> Senior</label>
                </li>
            </ul>
            <input type='submit' value='Enter' id='submit'>

    </form>

</div>
</body>
</html>
