<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama"><br><br>
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat"></textarea><br><br>
        <input type="submit" name="proses" value="simpan">
    </form>
</body>
</html>

<?php 

error_reporting(0);

$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$proses = $_GET['proses'];

if (isset($_GET['proses'])) {
    // $nama = $_GET['nama'];
    // $alamat = $_GET['alamat'];
   echo "Nama " . $nama ."<br>";
   echo "Alamat " . $alamat ."<br>";

}


?>