<?php
class Pegawai{
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    static $jml = 0;
    const PT = 'PT. HTP Indonesia';

    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
    }
    
    public function setGajiPokok(){
        switch($this->jabatan){
            case 'Manager': $gapok = 15000000; break;
            case 'Asisten Manager': $gapok = 10000000; break;
            case 'Kepala Bagian': $gapok = 7000000; break;
            case 'Staff': $gapok = 5000000; break;
            default: $gapok = 400000;
        }
        return $gapok;
    }

    public function setTunjab(){
        $tunjab = 0.2 * $this->setGajiPokok();
        return $tunjab;
    }

    public function setTunkel(){
        $tunkel = $this->status == 'Menikah' ? 0.1 * $this->setGajiPokok() : 0;
        return $tunkel;
    }

    public function setZakatProfesi(){
        $gaji_kotor = $this->setGajiPokok() + $this->setTunjab() + $this->setTunkel();
        $zakat = $this->agama == 'Islam' && $gaji_kotor >= 6000000 ? 0.025 * $gaji_kotor : 0;
        return $zakat;
    }

    public function getGajiBersih(){
        $gaji_bersih = $this->setGajiPokok() + $this->setTunjab() + $this->setTunkel() - $this->setZakatProfesi();
        return $gaji_bersih;
    }

    public function cetak(){
        echo 'NIP Pegawai '.$this->nip;
        echo '<br>Nama Pegawai '.$this->nama;
        echo '<br>Jabatan '. $this->jabatan;
        echo '<br>Agama '.$this->agama;
        echo '<br>Status '.$this->status;
        echo '<br>Gaji Pokok Rp.'.number_format($this->setGajiPokok(), 0, ',', '.');
        echo '<br>Tunjangan Jabatan Rp.'.number_format($this->setTunjab(), 0, ',', '.');
        echo '<br>Tunjangan Keluarga Rp.'.number_format($this->setTunkel(), 0, ',', '.');
        echo '<br>Zakat Profesi Rp.'.number_format($this->setZakatProfesi(), 0, ',', '.');
        echo '<br>Gaji Bersih Rp.'.number_format($this->getGajiBersih(), 0, ',', '.');
        echo '<hr>';
    }
}

$objPegawai1 = new Pegawai('1111', 'Mirlani', 'Manager', 'Islam', 'Menikah');
$objPegawai2 = new Pegawai('2222', 'Siti','Kepala Bagian', 'Kristen', 'Belum Menikah');
$objPegawai3 = new Pegawai('3333', 'Ahmad', 'Asisten Manager', 'Islam', 'Menikah');
$objPegawai4 = new Pegawai('4444', 'Lani', 'Asisten Manager', 'Islam', 'Menikah');
$objPegawai5 = new Pegawai('5555', 'Arman', 'Asisten Manager', 'Islam', 'Menikah');


$pegawai = [$objPegawai1, $objPegawai2, $objPegawai3, $objPegawai4, $objPegawai5];

foreach ($pegawai as $pe) {
    $pe->cetak();
}

echo 'Jumlah Pegawai: '.Pegawai::$jml.'<br>';
echo 'Perusahaan: '.Pegawai::PT.'<br>';
