<?php 

// Segi Tiga
require_once __DIR__. "/../Abstract/Bentuk2D.php";

class SegiTiga extends Bentuk2D {

    public int $alas;
    public int $tinggi;
    public int $sisi1;
    public int $sisi2;
    public int $sisi3;
    
    public function __construct($alas, $tinggi, $sisi1, $sisi2, $sisi3) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi1 = $sisi1;
        $this->sisi2 = $sisi2;        
        $this->sisi3 = $sisi3;

    }


    public function namaBidang() 
    {
      return "Segi Tiga";
    }

    // L = 1/2 x a x t
    public function luasBidang()
    {
        $luas = 1/2 * $this->alas * $this->tinggi;
        return $luas;
    }


    // K = s1 + s2 + s3
    public function kelilingBidang()
    {
        $keliling = $this->sisi1 + $this->sisi2 + $this->sisi3;
        return $keliling;
    }
}


?>