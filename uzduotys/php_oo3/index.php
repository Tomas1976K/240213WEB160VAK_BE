<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$x = 8;
$y = 3;
$sudetis = $x + $y;
$atimtis = $x - $y;
$sandauga = $x * $y;
$dalyba = $x / $y;
$liekana = $x % $y;
?>

<p><?php echo "$x + $y = $sudetis"; ?></p>
<p><?php echo "$x - $y = $atimtis"; ?></p>
<p><?php echo "$x * $y = $sandauga"; ?></p>
<p><?php echo "$x / $y = $dalyba"; ?></p>
<p><?php echo "$x % $y = $liekana"; ?></p>


    
</body>
</html>



<?php
$x = 10;
$y = 7;
$sudetis = $x + $y;
echo "$x + $y= $sudetis";
?>

<?php
$sk1 = 7;
$sk2 = 10;

echo "{$sk1} + {$sk2} = " . ($sk1 + $sk2);
?>
<?php
$sk1 = 7;
$sk2 = 10;
$sudetis = $sk1 + $sk2;

echo "{$sk1} + {$sk2} = {$sudetis}";
?>
<?php
$sk1 = 7;
$sk2 = 10;

echo "{$sk1} + {$sk2} = {$sk1 + $sk2}";
?>

