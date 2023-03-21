<?php 

$jari = 7;
define('PHI', 3.14);

$luas = PHI * $jari * $jari;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Luas lingkarannya adalah <b><?= $luas; ?></b></p>
</body>
</html>