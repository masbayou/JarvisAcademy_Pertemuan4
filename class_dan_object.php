<?php 
class Mobil {
    public $merk;
    public $warna;
    public function hidupkanMesin(){
        echo "Mesin dihidupkan";
    }
    public function jalan(){
        echo "mobil berjalan";
    }
}

$toyota = new Mobil();
$toyota->merk = "toyota";
$toyota->warna = "hitam";

$toyota->hidupkanMesin();
echo "<br>";
$toyota->jalan();