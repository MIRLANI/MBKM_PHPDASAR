<?php 

require_once "Person.php";


class Mahasiswa extends Person {

    public string $semester;
    public string $jurussan;

    public function __construct($name, $gender, $email, $semester, $jurussan){
        parent::__construct($name, $gender, $email);
        $this->semester = $semester;
        $this->jurussan = $jurussan;
    }

    public function cetak()
    {
        parent::cetak();
        echo "Semester: " . $this->semester . PHP_EOL;
        echo "Jurusan: " . $this->jurussan . PHP_EOL;
    }
}


?>

