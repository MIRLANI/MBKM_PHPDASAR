<?php 

require_once "class/BelajarOOp1.php";

// KITA MEMBUAT OBJEKNYA
$bank1 = new Bank("001", "siti", 200000);
$bank2 = new Bank("002", "lani", 100000);
$bank3 = new Bank("003", "Mirlani", 500000);
$bank4 = new Bank("004", "Arman", 400000);



$bank1->ambil(20000);
$bank2->setor(800000);

$hasildata = array($bank1, $bank2, $bank3, $bank4);
foreach ($hasildata as $data ) {
      $data->cetak();
}



?>