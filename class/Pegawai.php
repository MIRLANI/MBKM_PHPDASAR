<?php 

class Pegawai {
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    static $jumlah = 0;
    const PT = "PT. HTP Indonesia";


    public function __construct($nip, $nama, $jabatan, $agama, $status, $jumlah)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jumlah++;

    }

    public function setGajiPoko ($jabatan) {
        $this->jabatan = $jabatan;
        switch($jabatan) {
            case "Manager":$gapok = 150000; break;
            case "Asisten Manager: ":$gapok = 100000; break;
            case "Kepala Bagian: ":$gapok =7000000 ;break;
            case "Staf: ": $gapok = 500000 ; break;
            default:$gapok = 0; break;

        }

        return $gapok;
    }


    public function cetak () {
        echo "Nip: " . $this->nip;
        echo "Nama: " . $this->nama;
        echo "Jabatan: " . $this->jabatan;
        echo "Agama: " . $this->agama;
        echo "Status: " . $this->status;
        echo "GAji Pokok" . $this->setGajiPoko($this->jabatan);
    }



}


?>