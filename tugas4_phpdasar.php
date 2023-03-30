<?php

$ar_prodi = [
    "S1" => "Sistem Informasi",
    "TI" => "Teknik Informatika",
    "ILKOM" => "Ilmu Komputer",
    "TE" => "Teknik Elektron"
];



if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $js = $_POST['jk'];
    $ps = $_POST['program_studi'];

    
    
    // cek skil
    $html = isset( $_POST['skil1']);
    $css = isset( $_POST['skil2']);
    $javascrip = isset ($_POST['skil3']);
    $rwd = isset ($_POST['skil4']);
    $python = isset ($_POST['skil5']);
    $mysl = isset ($_POST['skil6']);


    // memberikan nilai
    $html = 20;
    $css = 20;
    $javascrip = 30;
    $python = 30;
    $rwd = 20;
    $mysl = 20;

    // menentukan skor skilnya
    $hasil = $html + $css + $javascrip + $python + $rwd + $mysl;

    

    function KatagoriSkil()
    {
        global $hasil;
      
        // memanggil fungsi diluar function
       
        if ($hasil > 100 || $hasil < 150) {
             $keterang = "Sangat Baik";
             return $keterang;
        }else if ($hasil > 60 || $hasil < 100) {
            $keterang = "Baik";
             return $keterang;
        }else if ($hasil > 60 || $hasil < 100) {
            $keterang = "Baik";
             return $keterang;
        }else if ($hasil > 40 || $hasil < 60) {
            $keterang = "Cukup";
             return $keterang;
        }else if ($hasil > 0 || $hasil < 40) {
            $keterang = "kurang";
             return $keterang;
        }else if ($hasil == 0){
            $keterang = "Tidak Memadai";
            return $keterang;
        }else{
            return "nilai yang anda masukan salah";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 tentang php dasar </title>
    <style>
        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <table style="padding: 10px;">
        <form action="" method="post">
            <!-- NAMA -->
            <tr>
                <th> <label for="nama"> Nama:</label> </th>
                <td> <input type="text" name="nama" id="nama" placeholder="Masukan nama..."></td>

            </tr>

            <!-- NIM -->
            <tr>
                <th> <label for="nim"> Nim:</label> </th>
                <td> <input type="text" name="nim" id="nim" placeholder="Masukan nim..."></td>
            </tr>

            <!-- EMAIL -->
            <tr>
                <th><label for="email">email:</label></th>
                <td><input type="email" name="email" id="email" placeholder="Masukkan email..."></td>
            </tr>


            <!-- JENIS KELAMIN -->
            <tr>
                <th><label for="jk">Jenis Kelamain: </label></th>
                <td>
                    <input type="radio" id="jk" name="jk" value="perempuan">perempuan
                    <input type="radio" id="jk" name="jk" value="laki-laki">laki-laki
                </td>
            </tr>

            <!-- PROGRAM STUDI -->
            <tr>
                <th><label for="ps">program studi:</label></th>
                <td>
                    <select name="program_studi" id="">
                        <?php foreach ($ar_prodi as $prodik => $pro) { ?>
                            <option value="<?= "$prodik-$pro"; ?> "><?= $prodik ?>-<?= $pro ?> </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>

            <!-- SKILL -->
            <tr>
                <th><label for="skil">Skil:</label></th>
                <td>
                    <input type="checkbox" name="skil1" value="html" id="html">
                    <label for="html">html </label>
                
            
                    <input type="checkbox"  name="skil2" value="css" id="css">
                    <label for="css">css </label>
                
            
                    <input type="checkbox"  name="skil3" value="javascrip" id="javascirp">
                    <label for="javascirp">javascirp </label>
                
            
                    <input type="checkbox" name="skil4" value="rwd_boostrap" id="rwd_boostrap">
                    <label for="rwd_boostrap">rwd boostrap </label>
                
            
                    <input type="checkbox"  name="skil5" value="python" id="python">
                    <label for="python">python </label>
                
            
                    <input type="checkbox"  name="skil6" value="mysql" id="mysql">
                    <label for="mysql">mysql </label>
                </td>
            </tr>

            <tr>
                <th colspan="2"> <button type="submit" name="submit">Submit</button>
                </th>
            </tr>
        </form>
    </table>



    <!-- TAMPIL DATA -->
       <?php if (isset($_POST['submit'])) { ?>
        <p>Nim: <?= $nim; ?> </p>
        <p>Nama: <?= $nama; ?> </p>
        <p>Jenis Kelamin: <?= $js; ?> </p>
        <p>Program Studi: <?= $ps; ?> </p>
        <p>Skil:   </p>
        <p>Skor Skil: <?= $hasil ?>  </p>
        <p>Katagori Skil: <?= KatagoriSkil(); ?> </p>
        <p>Email: <?= $email ?> </p>
    <?php } ?>

</body>

</html>