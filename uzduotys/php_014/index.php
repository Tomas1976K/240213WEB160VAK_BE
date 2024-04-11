<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- @ -->
<?php

// function webSiteCopyRight($year = 2020) {
//     // echo '@ ' . date('Y');
//     echo "@ $year-" . date('Y');
//     if($year == '2024') {
//         echo "@ $year-" . date('Y');
//     } else {
//         echo "@ $year-" . date('Y');
//     }


// }


// webSiteCopyRight('2017');
// echo '<br>';
// webSiteCopyRight('2018');
// echo '<br>';
// webSiteCopyRight();


?>


<!-- !-- © -->
<?php
function webSiteCopyRight($year = null) {
        if($year != null) {
            echo "© $year-" . date('Y');
        } else {
            echo '© ' . date('Y');
        }
}
webSiteCopyRight('2017');
echo '<br>';
webSiteCopyRight('2018');
echo '<br>';
webSiteCopyRight();

?>
    
</body>
</html>