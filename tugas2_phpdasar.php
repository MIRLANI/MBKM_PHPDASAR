<?php

if (isset($_POST['hitung_gaji'])) {
    $nama  = $_POST["nama"];
    $jabatan = $_POST["jabatan"];
    $status = $_POST["status"];
    $agama = $_POST["agama"];
    $jumlah_anak = $_POST["jumlah_anak"];

    // switch untuk menentukan jabatan dan gaji
    switch ($jabatan) {
        case 'manager':
            $gapok = 20000000;
            break;

        case 'asisten':
            $gapok = 15000000;
            break;
        case 'kabag':
            $gapok = 10000000;
            break;
        case 'staf':
            $gapok = 4000000;
            break;
    }

    // menghitung tunjangan jabatan
    $tunjangan = $gapok * 0.2;

    // menggunakan multikondisi if untuk menentukan tunjangan keluarga
    if ($status == "Menikah") {
        if ($jumlah_anak <= 2) {
            $tunjangan_keluarga = $gapok * 0.05; // 5%
        } else if ($jumlah_anak >= 3 && $jumlah_anak <= 5) {
            $tunjangan_keluarga = $gapok * 0.1; // 10%
        } else {
            $tunjangan_keluarga = '0';
        }
    } else {
        $tunjangan_keluarga = "0";
    }

    // menghitung gaji pokok
    $gaji_kotor = $tunjangan + $tunjangan_keluarga;

    // menentukan zakat profesi menggunakan ternay operator
    $zakat_profesi = ($agama == 'muslim' && $gaji_kotor >= 6000000) ? $gaji_kotor * 0.025 : 0;

    // menghitung take home pay
    $thy = $gaji_kotor - $zakat_profesi;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 2 php dasar </title>
    <script src="https://cdn.tailwindcss.com"></script>

<body>

    <!-- Halaman Form untuk penginputan data -->
    <form action="" method="post">
        <div class="max-w-2xl mx-auto border p-14 border-slate-200 rounded-xl shadow-xl mt-20 bg-gradient-to-r from-red-100 to-sky-100">

            <h4 class="text-center mb-6 font-bold text-4xl ">Inputkan Data Pegawai</h4>

            <label for="nama">
                <span class="font-semibold block text-slate-700">Nama Pegawai:</span>
            </label>
            <input type="text" name="nama" id="nama" placeholder="Masukan nama pegawai..." class="py-3 px-4 shadow border rounded w-full block text-sm placeholder:text-slate-400 mb-4 mt-1 focus:outline-none focus:ring-1  hover:shadow-slate-800" required>

            <label for="jumlah_anak">
                <span class="font-semibold block text-slate-700">Jumlah Anak:</span>
            </label>
            <input type="number" name="jumlah_anak" placeholder="Masukan jumlah Anak..." class="py-3 px-4 shadow border rounded w-full block text-sm placeholder:text-slate-400 mb-4 mt-1 focus:outline-none focus:ring-1 hover:shadow-slate-800" required>

            <label for="jabatan">
                <span class="font-semibold text-slate-700">Jabatan:</span>
            </label>
            <select name="jabatan" id="jabatan" class="ml-10 px-10 py-1 rounded mb-4 shadow focus:outline-none hover:shadow-slate-800">
                <option value="manager">Manager</option>
                <option value="asisten">Asisten</option>
                <option value="kabag">Kabag</option>
                <option value="staf">Staf</option>
            </select>



            <div>
                <label for="status">
                    <span class="font-semibold text-slate-700"> Status:</span>
                </label>
                <div class="ml-28 -mt-5">
                    <input type="radio" value="Menikah" id="status" name="status" required><label for="menikah">
                        <span>
                            Menikah
                        </span>
                    </label>
                    <input type="radio" value="Belum menikah" id="status" name="status" class="ml-3" required><label for="nomenikah"><span class="pl-1">Belum Menikah</span>
                    </label>
                </div>
            </div>


            <div class="mt-4">
                <label for="agama">
                    <span class="font-semibold text-slate-700">Agama:</span>
                </label>
                <div class="ml-28 -mt-5">
                    <input type="radio" value="muslim" id="agama" name="agama" required>
                    <label for="muslim">
                        <span class="mr-3">Muslim</span>
                    </label>
                    <input type="radio" value="kristen" id="agama" name="agama" class="ml-1" required><label for="kristen">
                        <span class="mr-3">Kristen</span>
                    </label>
                    <input type="radio" value="hindu" id="agama" name="agama" required><label for="hindu">
                        <span class="mr-3"> Hindu</span>
                    </label>

                </div>

            </div>

            <button name="hitung_gaji" class="mt-10 px-32 py-2 bg-sky-500 mx-auto block max-w-2xl rounded-full shadow font-medium text-base hover:bg-sky-800 hover:text-white active:bg-sky-900">Hitung gaji</button>

        </div>
    </form>


    <!-- menampilkan datanya setelah diproses -->
    <?php if (isset($_POST['hitung_gaji'])) {  ?>

        <div class="max-w-2xl mx-auto border p-14 border-slate-200 rounded-xl shadow-xl mt-20 bg-gradient-to-r from-red-100 to-sky-100 ">
            <p>Nama Pegawai:
                <span class="font-bold"> <?= $nama; ?></span>
            </p>
            <p>Jabatan: <span class="font-bold"><?= $jabatan; ?></span> </p>
            <p>Status: <span class="font-bold"><?= $status; ?></span> </p>
            <p>Jumlah Anak: <span class="font-bold"><?= $jumlah_anak; ?></span> </p>

            <p>Gaji Pokok: <span class="font-bold"><?= number_format($gapok, 0, ',', '.'); ?></span> </p>
            <p>Tunjangan Keluarga: <span class="font-bold"><?= number_format($tunjangan_keluarga, 0, ',', '.'); ?></span> </p>
            <p>Agama: <span class="font-bold"><?= $agama; ?></span> </p>
            <p>Gaji Kotor: <span class="font-bold"><?= number_format($gaji_kotor, 0, ',', '.'); ?></span> </p>
            <p>Zakat Profesi: <span class="font-bold"> <?= number_format($zakat_profesi, 0, ',', '.'); ?></span></p>
            <p>Take Hom Pay: <span class="font-bold"><?= number_format($thy, 0, ',', '.'); ?></span></p>

        </div>
        <div class="mb-96"></div>
    <?php  } ?>
</body>

</html>