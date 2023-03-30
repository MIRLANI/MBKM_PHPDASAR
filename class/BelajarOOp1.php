<?php 

class Bank {
    // mendeklarasikan variabel di oop
    protected int $norek;
    public string $nama;
    private int $saldo;
    static $jml = 0;
    
    const BANK = "Bank Syariah Indonesia";

    public function __construct(string $no, string $nasabah, string $saldo)
    {
        $this->norek = $no;
        $this->nama = $nasabah;
        $this->saldo = $saldo;
        self::$jml++;
    } 

    public function setor ($uang) {
        $this->saldo += $uang;
    }
    public function ambil ($uang) {
        $this->saldo -= $uang;
    }

    public function cetak(){
        echo "<b> <u> " . Bank::BANK . "</u></b>";
        echo "<br> Nomor Rekening" . $this->norek ;
        echo "<br> Nama Nasabah" . $this->nama ;
        echo "<br> Saldo Rp." . number_format($this->saldo, 0, ",", ".") ;
        echo "<br>";
        
    }
}



?>