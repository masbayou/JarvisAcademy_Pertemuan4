<?php 

class Kucing {
    public $nama;
    public static $jumlah_kucing;
    
    public function __construct($nama){
        self::$jumlah_kucing++;
        $this->nama = $nama;
    }
    public static function getJumlahkucing(){
        echo "<br> Jumlah Kucing: " . self::$jumlah_kucing;
    }
}
$oyen = new Kucing("oyen");
Kucing::getJumlahkucing();

$bleki = new Kucing("bleki");
Kucing::getJumlahkucing();