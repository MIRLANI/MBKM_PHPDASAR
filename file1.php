<?php 

// menggunakan php


echo "dokumen php say ada di " . $_SERVER["DOCUMENT_ROOT"];
echo "<br>";

echo  "Hello Word" . PHP_EOL;

$nama = "Muhammad Mirlani";
$nim = "F1G120027";
$umur = 20;
$beratBadan = 40;
$_pekerjaan = "Mahasiswa";

echo "<hr>";
echo "<br>Nama: $nama" . PHP_EOL;
echo "<br>Nim: $nim" . PHP_EOL;
echo "<br>umur: $umur" . PHP_EOL;
echo "<br>Berat Badan: $beratBadan" . PHP_EOL;
echo "<br>Perkerjaan: $_pekerjaan" . PHP_EOL;

?>


<!-- menggunaakan html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<hr>

<p>nama: <?php echo $nama ?></p>
<p>Nim: <?php echo $nim ?></p>
<p>Umur: <?php echo $umur ?></p>
<p>Berat Badan: <?php echo $beratBadan ?></p>
<p>Pekerjaan: <?php echo $_pekerjaan ?></p>
<p>Pekerjaan <?= $_pekerjaan; ?></p>
</body>
</html>