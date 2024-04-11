<?php

class Car {
    public $gamintojas;
    public $spalva = 'geltona';
    public $atsarginisRatas = true;
    public $bakoTuris = 60;

    public $degalai = 0.5;

    public function prisipiltiDegalu() 
    {
        echo 'glum..glum..glum';
        $this->degalai = 1;

    }

    public function vaziuoti($atstumas) 
    {
        echo 'vrum..vrum..vaziuojam..';

        // $this->degalai = ($this->$bakoTuris - ($atstumas / 100 * $this->sanaudos)) / $this->bakoTuris;

    }


}


$bmw = new Car();
$volvo = new Car();

print_r($bmw);
echo '<br>';
print_r($volvo);
echo '<br>';

$bmw->spalva = 'balta';
$volvo->spalva = 'juoda';

echo $volvo->spalva;
echo '<br>';
echo $bmw->spalva;
echo '<br>';

$bmw->prisipiltiDegalu();


print_r($bmw);
echo '<br>';





?>