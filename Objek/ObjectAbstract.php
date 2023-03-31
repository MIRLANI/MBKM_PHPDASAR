<?php 

require_once "../class/Hewan1.php";
require_once "../class/Hewan2.php";
require_once "../class/Hewan3.php";

$h1 = new Kucing();
$h2 = new Kambing();
$h3 = new Anjing();


$ar_Hewan = array ($h1, $h2, $h3);

foreach($ar_Hewan as $hewan){
    $hewan->bersuara();
}