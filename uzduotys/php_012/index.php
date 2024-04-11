<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uzduotis - PHP012</title>
</head>

<body>


    <?php
    // $a = 4;
// $b = 5;
    
    // $suma = $a * $b;
    
    function staciakampioPlotas($a, $b)
    {

        return $a * $b;

    }

    ?>
    <ul>
        <li>
            <?php echo staciakampioPlotas(5, 4); ?>
        </li>
        <li>
            <?php echo staciakampioPlotas(10, 3); ?>
        </li>
        <li>
            <?php echo staciakampioPlotas(6, 9); ?>
        </li>

    </ul>




</body>

</html>