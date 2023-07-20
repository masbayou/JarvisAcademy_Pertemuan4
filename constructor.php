<?php 
class Laptop {
    public $merk;
    public $processor;
    public $memori;

    public function __construct($merk, $processor, $memori){
        $this->merk = $merk;
        $this->processor = $processor;
        $this->memori = $memori;

    }
    public function desc(){
        echo "Merk Laptop ini adalah $this->merk, dengan processor $this->processor, dan RAM $this->memori";
    }
}
$lenovo = new Laptop ("Lenovo", "Intel i5 gen 10", "8 GB");
$lenovo->desc();