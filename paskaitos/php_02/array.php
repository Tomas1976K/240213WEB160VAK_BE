<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-paskaita-02</title>
</head>
<body>

<h1><?php echo 'PHP Paskaita 02'; ?></h1>

<?php

    $susirinkusieji = ['Tomas', 'Dovile', 'Pavelas', 'Donatas', 'Vytautas', 'Kazimiras'];
    // $masyvas = array();

    // Prideti i masyva nauja kintamajo reiksme;
    $susirinkusieji[] = 'Paulius';

    print_r ($susirinkusieji);

    // isvest duomenis kitoje eiluteje.
    echo '<br>';

    echo $susirinkusieji[4];

    $susirinkusieji[5] = 'Rasa';

    echo '<br>';

    print_r ($susirinkusieji);



    $darbuotojai = [
        'Kazimiras' => 'Jarmolovskis',
        'Petras' => 'Petraitis',
        'Jonas' => 'Jonaitis',
    ];

    echo '<br>';
    print_r($darbuotojai);

    echo '<br>';
    echo $darbuotojai['Kazimiras'];

// priskiria kintamajam Jonas reiksme Kazlauskas:
    $darbuotojai['Jonas'] = 'Kazlauskas';
    echo '<br>';
    print_r($darbuotojai);



    // kuriame masyva masyve:
    $zaidimai = [
        'lauko_zaidimai' => ['Tinklinis', 'Tenisas', 'Futbolas'],
        'vidaus_zaidimai' => ['Krepsinis', 'Badmintonas', 'Rankinis'],

    ];

    echo '<br>';
    // isvedame masyva reiksme pagal asociatyvaus masyvo ir parasto masyvo reksme (indeksa):

    print_r($zaidimai['vidaus_zaidimai'][2]);

    print_r($zaidimai['vidaus_zaidimai']);

?>

<?php



?>
    
</body>
</html>