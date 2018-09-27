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
            <option value='up to 15'>up to 15 lbs.</option>
            <option value='16-25'>16-25lbs.</option>
            <option value='26-40'>26-40lbs.</option>
            <option value='41-60'>41-60lbs.</option>
            <option value='61-80'>61-80lbs.</option>
            <option value='81-100'>81-100lbs.</option>
            <option value='Over 100'>Over 100lbs.</option>
        </select>

        <label class='age'>Your Pet's Age:</label>
        <ul>
            <li>
                <label><input type='checkbox' name='petAge' value='Puppy'>Puppy</label>
            </li>
            <li>
                <label><input type='checkbox' name='petAge' value='Adult'> Adult</label>
            </li>
            <li>
                <label><input type='checkbox' name='petAge' value='Senior'>Senior</label>
            </li>
        </ul>
        <input type='submit' value='Enter' id='submit'>

    </form>

    <div id='results'>
        <?php if (isset($petName, $size, $petAge)): ?>
        <div class='alert' role='alert'>
            <p><?= $petName ?> is a <?= $petAge ?> and is <?= $size ?> pounds.</p>
            <?php endif; ?>

            <?php
            if ($petAge == 'Puppy') {
                if (isset($size)) {
                    switch ($size) {
                        case 'up to 15' :
                            $result = '1/2 cups';
                            break;
                        case '16-25' :
                            $result = '1.5 cups';
                            break;
                        case '26-40' :
                            $result = '2 cups';
                            break;
                        case '41-60' :
                            $result = '2.5 cups';
                            break;
                        case '61-80' :
                            $result = '3 cups';
                            break;
                        case '81-100' :
                            $result = '3.5 cups';
                            break;
                        case '100+' :
                            $result = '4.5 cups';
                            break;
                    }
                    echo("$petName needs $result per day.");
                }
            } elseif ($petAge == 'Adult') {
                if (isset($size)) {
                    switch ($size) {
                        case 'up to 15' :
                            $result = '1 cups';
                            break;
                        case '16-25' :
                            $result = '1.5 cups';
                            break;
                        case '26-40' :
                            $result = '2 cups';
                            break;
                        case '41-60' :
                            $result = '2.5 cups';
                            break;
                        case '61-80' :
                            $result = '3 cups';
                            break;
                        case '81-100' :
                            $result = '3.5 cups';
                            break;
                        case '100+' :
                            $result = '5 cups';
                            break;
                    }
                    echo("$petName needs $result per day.");
                }
            } else {
                if (isset($size)) {
                    switch ($size) {
                        case 'up to 15' :
                            $result = '1/2 cups';
                            break;
                        case '16-25' :
                            $result = '1 cups';
                            break;
                        case '26-40' :
                            $result = '1.5 cups';
                            break;
                        case '41-60' :
                            $result = '2 cups';
                            break;
                        case '61-80' :
                            $result = '3 cups';
                            break;
                        case '81-100' :
                            $result = '5 cups';
                            break;
                        case '100+' :
                            $result = '5.5 cups';
                            break;
                    }
                    echo("$petName needs $result per day.");
                }
            } ?>




    </div>



</div>
</body>
</html>