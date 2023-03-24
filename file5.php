<?php 

$nama = "Mirlani";
$nilai = 70;
$keterangan = '';

if ($nilai >= 80 && $nilai <= 100) {
    $grade = "A";
    
}else if ($nilai >= 70 && $nilai <= 79) {
    $grade = "B";
    
}else if ($nilai >= 60 && $nilai <= 69) {
    $grade = "C";
   
}else if ($nilai >= 50 && $nilai <= 59) {
    $grade = "D";
    
}else{
    $grade = "E";
}



switch ($grade) {
     case "A":
     $keterangan = "Lulus";
     break;
     case "B":
     $keterangan = "Bagus";
     break;
     case "C":
     $keterangan = "Cukup";
     break;
     case "D":
     $keterangan = "Kurang";
     break;
     case "E":
     $keterangan = "Buruk";
     break;
     default:
     $keterangan = '';
     break;
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
    <p>Nama <?= $nama; ?></p>
    <p>Nilai <?= $nilai; ?></p>
    <p>Grade <?= $grade; ?></p>
    <p>Keterangan <?= $keterangan; ?></p>

</body>
</html>