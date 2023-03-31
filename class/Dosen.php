<?php 


require_once "Person.php";


class Dosen extends Person {
    
    public $nim;
    public $gelar;

    function __construct($name, $gender, $email, $nim, $gelar) {
        parent::__construct($name, $gender, $email);
        $this->nim = $nim;
        $this->gelar = $gelar;
    }



    public function cetak () {
        parent::cetak();
        echo "Nim ". $this->nim . PHP_EOL;
        echo "Gelar ". $this->gelar. PHP_EOL;
    }
}


?>