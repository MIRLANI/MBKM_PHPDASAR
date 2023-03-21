<?php

if (isset($_POST["hitungluas"])) {
    $alas = $_POST["alas"];
    $tinggi = $_POST["tinggi"];
    if ($alas == ''&& $tinggi == ''){
        echo "
          <script>
          alert('Masukan Nilai Alas dan Nilai Tinggi');
          document. location. href='tugas1_phpdasar.php';
          </script> ";
       return false;

    }else if ($alas == "") {
        echo "
        <script>
        alert('Masukan Nilai Alas');
        document. location. href='tugas1_phpdasar.php';
        </script> ";
     return false;
    }else if($tinggi == ""){
        echo "
        <script>
        alert('Masukan Nilai Tinggi');
        document. location. href='tugas1_phpdasar.php';
        </script> ";
     return false;
    }else{
        $totalluas = $alas * $tinggi;
    }

}else if (isset($_POST["hitungkeliling"])) {
    $nilaiA = $_POST['nilai_a'];
    $nilaiB = $_POST['nilai_b'];
    if ($nilaiA == ''&& $nilaiB == ''){
        echo "
          <script>
          alert('Masukan Nilai a dan Nilai b');
          document. location. href='tugas1_phpdasar.php';
          </script> ";
       return false;

    }else if ($nilaiA == "") {
        echo "
        <script>
        alert('Masukan Nilai a');
        document. location. href='tugas1_phpdasar.php';
        </script> ";
     return false;
    }else if($nilaiB == ""){
        echo "
        <script>
        alert('Masukan Nilai b');
        document. location. href='tugas1_phpdasar.php';
        </script>";
     return false;
    }else{
        $totalkeliling = 2 * ($nilaiA + $nilaiB );

    }

}else if (isset($_POST["hitungalas"])) {
    $luas = $_POST['luas'];
    $tinggi = $_POST['tinggi'];
    if ($luas == ''&& $tinggi == ''){
        echo "
        <script>
        alert('Masukan Nilai luas dan Nilai tinggi');
        document. location. href='tugas1_phpdasar.php';
        </script>'";
        return false;

    }else if ($luas == "") {
        echo "
        <script>
        alert('Masukan Nilai luas');
        document. location. href='tugas1_phpdasar.php';
        </script> ";
    return false;
    }else if($tinggi == ""){
        echo "
        <script>
        alert('Masukan Nilai Tinggi');
        document. location. href='tugas1_phpdasar.php';
        </script> ";
    return false;
    }else{
        $totalalas = $luas * $tinggi;

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas php dasar</title>
</head>
<script src="https://cdn.tailwindcss.com"></script>
<body>

<!-- halaman judul -->
    <h1 class="m-20 font-bold text-6xl text-center">Kakulator <span class="bg-gradient-to-r from-sky-500 to-red-700  text-transparent bg-clip-text">Bagun Datar Jajar Genjang</span> </h1>


<!-- kakulator luas jajar genjang -->
    <div class="max-w-lg mx-auto border border-slate-200 p-5 rounded-lg shadow-md ">
        <h2 class="text-center m-3">Rumus Luas Jajar Genjang L = a x t</h2>
        <form action="" method="post">
            <label for="alas">
                <span class="mb-3 font-semibold block text-slate-700">Alas</span>
            <input type="number" name="alas" id="alas" placeholder="Masukan Alas..." class="py-2 px-3 shadow border rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none  focus:ring-1 focus:border-sky-700">
            </label>

            <!--  -->
            <label for="tinggi">
                <span class="mt-4 block text-slate-700 font-semibold">Tinggi</span> 
            <input type="number" name="tinggi" id="tinggi" placeholder="Masukan Tinggi..." class="py-2 px-3 shadow border rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none  focus:ring-1 focus:border-sky-700 mt-3">
            </label>

            <!--  -->
            <button name="hitungluas" class="my-6  bg-sky-500  px-5 py-2 rounded-full text-white  font-semibold font-inter mx-auto 
               block hover:bg-sky-700 active:bg-sky-900 focus:ring-sky-600 ">Hitung</button>
        </form>
        <h2>Hasil = <?php if (isset($totalluas)){  ?>
            <span class="font-bold"><?php echo $totalluas; ?></span>
        <?php } ?>
    </h2>
    </div>



    <!-- kakulator keliling jajar genjang -->
    <div class="m-10"></div>
    <div class="max-w-lg mx-auto border border-slate-200 p-5 rounded-lg shadow-md ">
        <h2 class="text-center m-3">Rumus keliling Jajar Genjang K = 2 x (a + b)</h2>
        <form action="" method="post">
            <label for="alas">
                <span class="mb-3 font-semibold block text-slate-700">Nilai a</span>
            <input type="number" name="nilai_a" id="alas" placeholder="Masukan Nilai a..." class="py-2 px-3 shadow border rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none  focus:ring-1 focus:border-sky-700">
            </label>

            <!--  -->
            <label for="tinggi">
                <span class="mt-4 block text-slate-700 font-semibold">Nilai b</span> 
            <input type="number" name="nilai_b" id="tinggi" placeholder="Masukan Nilai b..." class="py-2 px-3 shadow border rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none  focus:ring-1 focus:border-sky-700 mt-3">
            </label>

            <!--  -->
            <button name="hitungkeliling" class="my-6  bg-sky-500  px-5 py-2 rounded-full text-white  font-semibold font-inter mx-auto 
               block hover:bg-sky-700 active:bg-sky-900 focus:ring-sky-600 ">Hitung</button>
        </form>
        <h2>Hasil = <?php if (isset($totalkeliling)) {?>
                <span class="font-bold"><?php echo $totalkeliling; ?></span>
            <?php } ?>
        </h2>
    </div>


        <!-- kakulator Alas jajar genjang -->
        <div class="m-10"></div>
    <div class="max-w-lg mx-auto border border-slate-200 p-5 rounded-lg shadow-md ">
        <h2 class="text-center m-3">Rumus Alas Jajar Genjang T = l x t</h2>
        <form action="" method="post">
            <label for="alas">
                <span class="mb-3 font-semibold block text-slate-700">Luas</span>
            <input type="number" name="luas" id="alas" placeholder="Masukan Nilai luas..." class="py-2 px-3 shadow border rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none  focus:ring-1 focus:border-sky-700">
            </label>

            <!--  -->
            <label for="tinggi">
                <span class="mt-4 block text-slate-700 font-semibold">Tinggi</span> 
            <input type="number" name="tinggi" id="tinggi" placeholder="Masukan Nilai tinggi..." class="py-2 px-3 shadow border rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none  focus:ring-1 focus:border-sky-700 mt-3">
            </label>

            <!--  -->
            <button name="hitungalas" class="my-6  bg-sky-500  px-5 py-2 rounded-full text-white  font-semibold font-inter mx-auto 
               block hover:bg-sky-700 active:bg-sky-900 focus:ring-sky-600 ">Hitung</button>
        </form>
        <h2>Hasil = <?php if (isset($totalalas)) {?>
            <span class="font-bold"><?php echo $totalalas ?></span>
            <?php } ?>
        </h2>
    </div>

<div class="mb-96"></div>
</body>

</html>