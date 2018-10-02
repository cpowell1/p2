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
    <img src='images/nutro.png' alt='Dog Food'/>
    <h1>Nutro Dog Food Calculator</h1>

    <form method='GET' action='calculate.php'>
        <label>Your Pet's Name:
            <input type='text' name='petName' value='<?php if ($petName) echo $petName ?>'>
        </label>

        <label for='size'>Select Your Pet's Size:</label>
        <select name='size' id='size'>
            <option value='choose' <?php if ($size == 'choose') echo 'selected' ?>>Choose one...</option>
            <option value='0-15' <?php if ($size == '0-15') echo 'selected' ?>>up to 15 lbs.</option>
            <option value='16-25' <?php if ($size == '16-25') echo 'selected' ?>>16-25lbs.</option>
            <option value='26-40' <?php if ($size == '26-40') echo 'selected' ?>>26-40lbs.</option>
            <option value='41-60' <?php if ($size == '41-60') echo 'selected' ?>>41-60lbs.</option>
            <option value='61-80' <?php if ($size == '61-80') echo 'selected' ?>>61-80lbs.</option>
            <option value='81-100' <?php if ($size == '81-100') echo 'selected' ?>>81-100lbs.</option>
            <option value='Over 100' <?php if ($size == 'Over 100') echo 'selected' ?>>Over 100lbs.</option>
        </select>

        <label class='age'>Your Pet's Age:</label>
        <input type='hidden' name='submitted' value='1'>
        <ul>
            <li>
                <label><input type='checkbox'
                              name='petAge'
                              value='Puppy' <?php if (strstr($petAge, 'Puppy')) echo 'checked' ?>>Puppy</label>
            </li>
            <li>
                <label><input type='checkbox'
                              name='petAge'
                              value='Adult' <?php if (strstr($petAge, 'Aduly')) echo 'checked' ?>> Adult</label>
            </li>
            <li>
                <label><input type='checkbox'
                              name='petAge'
                              value='Senior' <?php if (strstr($petAge, 'Senior')) echo 'checked' ?>>Senior</label>
            </li>
        </ul>
        <input type='submit' value='Enter' id='submit'>

        <?php if ($hasErrors): ?>
            <ul>
                <div class='error-alert'>
                    <?php foreach ($errors as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </div>
            </ul>
        <?php endif; ?>
    </form>


<?php if (!$hasErrors): ?>
    <div id='results'>
        <?php if (isset($petName, $size, $petAge)): ?>
        <div class='alert' role='alert'>
            <p><?= $petName ?> is a <?= $petAge ?> and is <?= $size ?> pounds. He/she needs <?= $result ?> cup(s) of food per day.</p>
            <?php endif; ?>
        </div>

        <?php endif; ?>
    </div>

</body>
</html>