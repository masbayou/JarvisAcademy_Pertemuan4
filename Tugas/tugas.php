<?php 

class Motor{
    public $warna;
    public $merk;

    public function __construct($warna, $merk, ){
        $this->warna = $warna;
        $this->merk = $merk;
    }
    public function Motorapa(){
        echo "motor ini berwarna $this->warna, dengan merk $this->merk";
    }
}
// class baru 
class Mobil extends Motor {
    public $tahun;

    public function __construct($tahun, $merk, $warna){
        $this->tahun = $tahun;
        parent::__construct($merk, $warna);
        $this->tahun = $tahun;
    }
    public function Merk(){
        echo "kendaraan ini ber merk $this->merk, dengan warna $this->warna, dan juga tahun pembuatan nya $this->tahun ";
    }
}
$toyota = new Mobil ("2022", "Hitam mengkilat", "Toyota");
$toyota->Merk();