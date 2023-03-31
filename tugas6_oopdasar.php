<?php 

require_once __DIR__."/Class/Lingkaran.php";
require_once __DIR__."/Class/PersegiPanjang.php";
require_once __DIR__."/Class/SegiTiga.php";


// Lingkarang  
$lingkaran = new Lingkaran(33);
$namaLing = $lingkaran->NamaBidang();
$luasLing = $lingkaran->luasBidang() ;
$kelilingLing = $lingkaran->kelilingBidang();

// Persigi Panjang 
$persegiPanjang = new PersegiPanjang(20, 10);
$namaPer = $persegiPanjang->namaBidang();
$luasPer = $persegiPanjang->luasBidang();
$kelilingPer = $persegiPanjang->kelilingBidang();

// Persigi Tiga
$persegiTiga = new SegiTiga(29, 10, 25, 5,11);
$namaTiga = $persegiTiga->namaBidang();
$luasTiga = $persegiTiga->luasBidang();
$kelilingTiga = $persegiTiga->kelilingBidang();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas OOP yang ke 6</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            line-height: 1.5;
        }  
        div {
            width: 400px;
            margin: auto;
        }    
        td{
            padding: 10px;
        }
        h1{
            margin-bottom: 5px;
            margin-top: 30px;
        }
    </style>
</head>
<body>

  <!-- table lingkarang -->
   <div>
    <h1>lingkaran </h1>
    <table border="1px" cellpadding="10"  cellspacing ="0">
        <tr>
            <th>Nama Bidang</th>
            <th>Luas Bidang</th>
            <th>Keliling Bidang</th>
        </tr>
        <tr>
            <td> <?php  echo $namaLing ?></td>
            <td> <?php  echo $luasLing ?></td>
            <td> <?php  echo $kelilingLing ?></td>
        </tr>
    </table>
    </div>

    <!-- tabel Persegi Panjang -->
    <div>
    <h1>Persegi Panjang</h1>
    <table border="1px" cellpadding="10"  cellspacing ="0">
        <tr>
            <th>Nama Bidang</th>
            <th>Luas Bidang</th>
            <th>Keliling Bidang</th>
        </tr>
        <tr>
            <td> <?php  echo $namaPer ?></td>
            <td> <?php  echo $luasPer ?></td>
            <td> <?php  echo $kelilingPer ?></td>
        </tr>
    </table>
    </div>

    <!-- tabel Segi Tiga -->
    <div>
    <h1>Segi Tiga</h1>
    <table border="1px" cellpadding="10"  cellspacing ="0">
        <tr>
            <th>Nama Bidang</th>
            <th>Luas Bidang</th>
            <th>Keliling Bidang</th>
        </tr>
        <tr>
            <td> <?php  echo $namaTiga ?></td>
            <td> <?php  echo $luasTiga ?></td>
            <td> <?php  echo $kelilingTiga ?></td>
        </tr>
    </table>
    </div>

    <!-- 
        Catatan:
        1. Diperlukan file Bentuk2D.php
        2. Diperlukan file Lingkaran.php
        3. Diperlukan file PersegiPanjang.php
        4. Diperlukan file SegiTiga.php
     -->
</body>
</html>