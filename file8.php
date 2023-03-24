<?php 

    if (isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];
        $matakuliah = $_POST["matkul"];
        $predikat = ($nilai >= 80) ? "Anda Lulus" : "Anda Gagal";
    
        if ($nilai > 100){
             $keterangan = "Nilai yang anda inputkan melaupai batas";
            
        }
    
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
    <form action="" method="post">
        <p>From Input Nilai</p>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" placeholder="Masukan nama..."><br><br>
        <label for="nilai">Nilai:</label>
        <input type="text" name="nilai" id="nilai" placeholder="Masukan nilai..."><br><br>
        <label for="matkul">Matakuliah</label>
        <select name="matkul" id="matkul">
            <option value="html css">HTML dan CSS</option>
            <option value="javascrip">JavaScript</option>
            <option value="ui">UI/UX</option>
            <option value="php">PHP</option> 
        </select>
        <input type="submit" name="submit" value="simpan">
    </form>

    <?php if (isset($_POST['submit'])){?>
        <p>Nama: <?= $nama; ?></p>
        <p>Niali: <?= $nilai; ?></p>
        <p>Matakuliah: <?= $matakuliah; ?></p>
        <p>Keterangan: <?= $keterangan; ?></p>
        <p>Prdikata: <?= $predikat; ?></p>
        <p>Grade: <?= $grade; ?></p>
           
    <?php } ?>

</body>
</html>

