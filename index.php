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

    <form method='GET' action='calculate.php'>
        <label>Your Pet's Name:
            <input type='text' name='petName' value='<?php $petName ?>'>
        </label>

        <label for='size'>Select Your Pet's Size:</label>
        <select name='size' id='size'>
            <option value='choose'>Choose one...</option>
            <option value='Up to 15' <?php if ($size == '15') echo 'selected'?>>Up to 15 lbs.</option>
            <option value='16-25' <?php if ($size == '25') echo 'selected'?>>16-25lbs.</option>
            <option value='26-40' <?php if ($size == '40') echo 'selected'?>>26-40lbs.</option>
            <option value='41-60' <?php if ($size == '60') echo 'selected'?>>41-60lbs.</option>
            <option value='61-80' <?php if ($size == '80') echo 'selected'?>>61-80lbs.</option>
            <option value='81-100' <?php if ($size == '100') echo 'selected'?>>81-100lbs.</option>
            <option value='Over 100' <?php if ($size == '101') echo 'selected'?>>Over 100lbs.</option>
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

    <div id='results'>
        <?php if (isset($petName)): ?>
            <div class='alert' role='alert'>
                <p><?= $petName ?> is <?= $size ?> pounds, and he/she needs <?php $foodAmount ?> cups of food per day.</p>
            </div>
        <?php endif; ?>
    </div>



</div>
</body>
</html>
