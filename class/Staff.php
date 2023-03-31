<?php 

require_once "Person.php";

class Staff extends Person {
    public $nip;
    public $bidang;
    public $gaji;

    public function __construct($nama, $nim, $email, $nip, $bidang, $gaji){
        parent:: __construct($nama, $nim, $email);
        $this->nip = $nip;
        $this->bidang = $bidang;
        $this->gaji = $gaji;
    }

    public function cetak () {
        parent::cetak();
        echo "Nomor Induk Pegawai: " . $this->nip . PHP_EOL;
        echo "Gaji: ". $this->gaji. PHP_EOL;
        echo "Bidang: ". $this->bidang. PHP_EOL;
    }
}


?>