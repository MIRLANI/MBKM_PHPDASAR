<?php 


require_once "class/Gempa.php";

$gempa1 = new Gempa("Jawa", 3);
$gempa2 = new Gempa("Malaysia", 6);
$gempa3 = new Gempa("Japang", 8);

$ar_data = [$gempa1, $gempa2, $gempa3];

foreach ($ar_data as $da) {
    echo $da->cetak();
}


?>