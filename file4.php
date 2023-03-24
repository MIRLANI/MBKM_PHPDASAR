<?php 


$nama = "mirlani";
$totalBelanja = 30000;
$keterangan = '';

if ($totalBelanja > 10000) {
    $keterangan = "selamat $nama anda mendapatkan hadiah";
}else{
    $keterangan = "Terima kasih $nama sudah berbelanja";
}
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
    <p>Nama Pelanggan <?= $nama; ?></p>
    <p>Total Belanja <?= $totalBelanja; ?></p>
    <p>Keterangan <?= $keterangan; ?></p>
</body>
</html>