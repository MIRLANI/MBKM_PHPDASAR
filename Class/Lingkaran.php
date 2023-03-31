<?php 

//  class Lingkaran 

require_once __DIR__."/../Abstract/Bentuk2D.php";

class Lingkaran extends Bentuk2D {

    

    public int $jari_jari;
    
    public function __construct(int $jari_jari){
        $this->jari_jari=$jari_jari;
    }

    public function NamaBidang() 
    {
        return "Lingkaran";
    }

    // rumus luas lingkaran L = 3.14 * r * r
    public function luasBidang()
    {
        $luas = 3.14 * $this->jari_jari * $this->jari_jari;
        return $luas;
    }

    // rumus keliling lingkaran K = 2 x π x r
    public function kelilingBidang()
    {
        $keliling = 2 * 3.14 * $this->jari_jari;
        return $keliling;
    }
}


?>