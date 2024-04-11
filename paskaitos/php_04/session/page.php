
<?php

session_start();

$_SESSION['vardas'] = 'Kazimiras';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Vidinis puslapis</h1>
    
<?php

echo $_SESSION['vardas'];

?>

</body>
</html>