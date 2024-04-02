<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uzduotis 009</title>
<style>
    /* ul {
        list-style: none;
    } */
</style>

</head>
<body>


<!-- $ceu = array( "Italija"=>"Roma",
"Liuksemburgas"=>"Liuksemburgas", "Belgija"=> "Briuselis",
"Danija"=>"Kopenhaga", "Suomija"=>"Helsinkis", "Prancūzija" =>
"Paryžius", "Slovakija"=>"Bratislava",
"Slovenija"=>"Liublijana", "Vokietija" => "Berlynas", "Graikija"
=> "Atėnai", "Airija"=>"Dublinas",
"Nyderlandai"=>"Amsterdamas", "Portugalija"=>"Lisabona",
"Ispanija"=>"Madridas", "Švedija"=>"Stokholmas", "Didžioji
Britanija"=>"Londonas", "Kipras"=>"Nikosija",
"Lietuva"=>"Vilnius", "Čekija"=>"Praha", "Estija"=>"Talinas",
"Vengrija"=>"Budapeštas", "Latvija"=>"Ryga",
"Malta"=>"Valeta", "Austrija" => "Viena", "Bulgarija" =>
“Sofija", "Rumunija" => "Bukareštas”, "Lenkija"=>"Varšuva") ;
Surūšiuokite sąrašą pagal sostines. Išveskite valstybės pavadinimus ir sostines. -->


<?php

$valstybiusostines = [
'Italija' => 'Roma',
'Liuksemburgas' => 'Liuksemburgas', 
'Belgija' => 'Briuselis',
'Danija' => 'Kopenhaga', 
'Suomija' => 'Helsinkis', 
'Prancūzija' => 'Paryžius', 
'Slovakija' => 'Bratislava',
'Slovenija' => 'Liublijana',
 'Vokietija' => 'Berlynas', 
 'Graikija' => 'Atėnai', 
 'Airija' => 'Dublinas',
'Nyderlandai' => 'Amsterdamas', 
'Portugalija' => 'Lisabona',
'Ispanija' => 'Madridas', 
'Švedija' => 'Stokholmas', 
'Didžioji Britanija' => 'Londonas',
'Kipras' => 'Nikosija',
'Lietuva' => 'Vilnius', 
'Čekija' => 'Praha', 
'Estija' => 'Talinas',
'Vengrija' => 'Budapeštas', 
'Latvija' => 'Ryga',
'Malta' => 'Valeta', 
'Austrija' => 'Viena',
'Bulgarija' => 'Sofija', 
'Rumunija' => 'Bukareštas', 
'Lenkija' => 'Varšuva',
];

asort($valstybiusostines);

// print_r($valstybiuSostines);



?>

<ul>
<?php
    foreach ($valstybiusostines as $valstybe => $sostine) {

        echo "<li>$sostine yra valstybes $valstybe sostine.</li>";
    }


?>


</ul>

    
</body>
</html>