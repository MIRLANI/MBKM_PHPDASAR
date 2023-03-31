<?php 

require_once __DIR__. "/../Abstract/Bentuk2D.php" ;


class PersegiPanjang extends Bentuk2D {

    public int $panjang;
    public int $lebar;

    public function __construct (int $panjang, int $lebar) 
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang() 
    {
        return "Persigi Pajang";
    }
    
    // L = p x l
    public function luasBidang()
    {
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }

    // K = 2 x (p + l)
    public function kelilingBidang()
    {
       $keliling = 2 * $this->panjang + $this->lebar;
       return $keliling; 
    }
}


?>