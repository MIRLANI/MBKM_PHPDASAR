<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php
    // Data nilai mahasiswa
    $nilai = array(
        array('nama' => 'Mahasiswa A', 'nilai' => 85),
        array('nama' => 'Mahasiswa B', 'nilai' => 70),
        array('nama' => 'Mahasiswa C', 'nilai' => 95),
        array('nama' => 'Mahasiswa D', 'nilai' => 60),
        array('nama' => 'Mahasiswa E', 'nilai' => 80)
    );

    // Hitung jumlah mahasiswa, nilai tertinggi, nilai terendah, dan rata-rata
    $count = count($nilai);
    $max = $nilai[0]['nilai'];
    $min = $nilai[0]['nilai'];
    $sum = 0;
    foreach ($nilai as $n) {
        $sum += $n['nilai'];
        if ($n['nilai'] > $max) {
            $max = $n['nilai'];
        }
        if ($n['nilai'] < $min) {
            $min = $n['nilai'];
        }
    }
    $avg = $sum / $count;

    // Tampilkan data dalam tabel
    echo "<table>";
    echo "<thead><tr><th>Nama Mahasiswa</th><th>Nilai</th></tr></thead>";
    echo "<tbody>";
    foreach ($nilai as $n) {
        echo "<tr><td>" . $n['nama'] . "</td><td>" . $n['nilai'] . "</td></tr>";
    }
    echo "</tbody>";
    echo "<tfoot>";
    echo "<tr><td>Jumlah Mahasiswa: " . $count . "</td><td></td></tr>";
    echo "<tr><td>Nilai Tertinggi: " . $max . "</td><td></td></tr>";
    echo "<tr><td>Nilai Terendah: " . $min . "</td><td></td></tr>";
    echo "<tr><td>Rata-rata Nilai: " . $avg . "</td><td></td></tr>";

    // Hitung predikat nilai dan tampilkan dalam tabel
    echo "<tr><td>Predikat Nilai:</td><td>";
    foreach ($nilai as $n) {
        switch (true) {
            case $n['nilai'] >= 85:
                echo "A ";
                break;
            case $n['nilai'] >= 70:
                echo "B ";
                break;
            case $n['nilai'] >= 60:
                echo "C ";
                break;
            default:
                echo "D ";
        }
    }
    echo "</td></tr>";
    echo "</tfoot>";
    echo "</table>";
    ?>
</body>

</html>