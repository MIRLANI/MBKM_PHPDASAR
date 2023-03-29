<?php

$ar_prodi = [
    "S1" => "Sistem Informasi",
    "TI" => "Teknik Informatika",
    "ILKOM" => "Ilmu Komputer",
    "TE" => "Teknik Elektron"
];

$ar_skil = [
    "HTML" => 10,
    "CSS" => 10,
    "JAVASCRIPT" => "RWD boostrap",
    "PHP" => 20,
    "Msql" => 30,
    "Laravel" => 40
];


$domisili = ["Jakarta", "Bandung", "Wakatobi", "Kendari", "Ambon"];

?>

<div style="border: 1px;">
    <fieldset style="background-color: aquamarine;">
        <legend>From Registrasi Kelepok Belajar</legend>

        <table>
            <thead>
                <tr>
                    <th>
                        From Registrasi
                    </th>
                </tr>
            </thead>
            <tbody>
                <form action="" method="post">

                    <tr>
                        <td>Nama:</td>
                        <td>
                            <input type="text" name="nama">
                        </td>
                    </tr>

                    <tr>
                        <td>Nim:</td>
                        <td>
                            <input type="text" name="nim">
                        </td>
                    </tr><br><br>

                    <tr>
                        <td>Jenis Kelamain:</td>
                        <td>
                            <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
                            <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                        </td>
                    </tr>

                    <!-- INI SISTEM  -->
                    <tr>
                        <td>Program Studi: </td>
                        <td>
                            <select name="prodi" id="">
                                <?php
                                foreach ($ar_prodi as $prodi => $i) { ?>
                                    <option value="<?php echo $prodi; ?>"> <?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Skil Programing</td>
                        <td>
                            <?php foreach ($ar_skil as $skil => $sk) { ?>
                                <input type="checkbox" name="skil" value="<?php echo $sk ?>"> <?php echo $skil ?>
                            <?php } ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Program Studi</td>
                        <td>
                            <select name="domisili">
                                <?php foreach ($domisili as $domisi) { ?>
                                    <option value="<?php echo $domisi ?>"><?php echo $domisi ?> </option>
                                <?php } ?>
                        </td>
                        </select>
                    </tr>
            <tfoot>
                <tr>
                    <th colspan="2">
                        <button name="proses">Submit</button>
                    </th>
                </tr>
            </tfoot>
            </form>
            </tbody>
        </table>
    </fieldset>
</div>

<?php

if (isset($_POST['proses'])) {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $jk = $_POST["jenis_kelamin"];
    $prodi = $_POST["prodi"];
    $skil = $_POST["skil"];
    $domisili = $_POST["domisili"]; ?>

    <p> <b>Nama: <?php echo $nama ?></b></p>
    <p> <b>Nim: <?php echo $nim ?></b></p>
    <p> <b>Jenis Kelamin: <?php echo $jk ?></b></p>
    <p> <b>Prodik: <?php echo $prodi ?></b>
    <p> <b>Skil: <?php foreach ($ar_skil as $skilll => $o) { ?></b></p>
    <?php echo $skilll ?>
<?php } ?>
<p> <b>Domisili: <?php echo $domisili ?></b></p>
<?php } ?>