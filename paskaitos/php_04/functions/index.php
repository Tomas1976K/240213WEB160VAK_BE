<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Funkciju pavyzdziai</h1>

    <?php
// isvedimo funcija echo ar print_r:
    function pasisveikinimas($vardas) {

        echo "<p>Sveiki $vardas!</p>";

    }

    pasisveikinimas('Kazimiras');
    pasisveikinimas('Tomas');
    pasisveikinimas('Donatas');


    // grazinimo funkcija return
    function pasisveikinimoTekstas($vardas) {

        return "<p>Labas $vardas!</p>";
    }

       $pasisveikinimoTekstas1 = pasisveikinimoTekstas('Jonas');
       $pasisveikinimoTekstas2 = pasisveikinimoTekstas('Petras');
       $pasisveikinimoTekstas3 = pasisveikinimoTekstas('Antanas');

       echo $pasisveikinimoTekstas1 . $pasisveikinimoTekstas2 . $pasisveikinimoTekstas3;



// nelabai funkcionali funkcija
    // function straipsnioTekstas() {
    //     echo '<p>Kazkoks tkstas</p>';

    // }

    ?>

</body>

</html>