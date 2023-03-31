<?php 


class Person {
    public $name;
    public $gendar;
    public $email;
    
    public function __construct($name, $gender, $email) {
        $this->name = $name;
        $this->gendar = $gender;
        $this->email = $email;
    }

    public function cetak() {
        echo "Nama: ". $this->name. PHP_EOL;
        echo "Gender: ".$this->gendar. PHP_EOL;
        echo "Email: ".$this->email. PHP_EOL;
    }

}

?>