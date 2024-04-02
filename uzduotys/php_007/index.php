<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Uzduotis 007</title>
</head>
<body>
<?php
    $cities4 = [
        'Tokijas',
        'Vasingtonas',
        'Maskva',
        'Londonas',
    ];
    ?>

<ul>

<?php
    for ($i = 0; $i < count($cities4); $i++) {

        echo "<li>$cities4[$i]</li>";
    }
?>

</ul>


<ul>
<!-- foreach cikle galime tureti indeksa, ko negalima atlikti su for ciklu -->
<?php
    foreach ($cities4 as $index => $sostine) {

        echo "<li>$index . $sostine</li>";
    }
?>

</ul>


    
</body>
</html>