<?php

function hitung(int $a1, int $a2, string $tombol)
{
    if ($tombol == "+") {
        $hasil = $a1 + $a2;
    } else if ($tombol == "-") {
        $hasil = $a1 - $a2;
    } else if ($tombol == "/") {
        $hasil = $a1 / $a2;
    }
    return $hasil;
}



?>
<h1>Kakukalorku</h1>
<form action="" method="post">
    <div>
        <label for="a1">Angka 1
            <input type="number" name="a1" id="a1">
        </label><br>
        <label for="a1">Angka 2
            <input type="number" name="a2" id="a1">
        </label><br>
        <input type="submit" name="tombol" value="+">
        <input type="submit" name="tombol" value="/">
        <input type="submit" name="tombol" value="*">
    </div>
</form>


<?php 


if (isset($_POST['tombol'])) {
     $a1 = $_POST['a1'];
     $a2 = $_POST["a2"];
     $tombol = $_POST['tombol'];
     $hasil = hitung($a1,$a2, $tombol);

     echo "Hasilnya = $hasil";
}

?>