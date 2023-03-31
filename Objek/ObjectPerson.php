<?php 


require_once '../class/Dosen.php';
require_once '../class/Mahasiswa.php';

$dosen = new Dosen("Arman", "laki-laki", "laniwamubuliga@gmail.com", "39939393", "S. Kom");
$dosen1 = new Dosen("Mirlani", "laki-laki", "mirlani@gmail.com", "3993933", "S. Kom");
$mahasiswa = new Mahasiswa("Mirlani","laki-laki", "laniwambuliga@gmail.com", 6,"Ilmu Komputer");
$mahasiswa1 = new  Mahasiswa("Mirlani","laki-laki","mirlani@gmail.com", 6, "ilmu komputer");


$ar_dosen = array($dosen, $dosen1);
foreach($ar_dosen as $dosen){
    $dosen->cetak();
}

$ar_mahasiswa = array($mahasiswa, $mahasiswa1);

foreach($ar_mahasiswa as $mahasiswa){
    $mahasiswa->cetak();
}

?>