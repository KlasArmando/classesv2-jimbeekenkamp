<?php

class Product{
    public $naam;
    public $prijs;
    public function __construct($naam, $prijs)
    {
        $this->naam = $naam;
        $this->prijs = $prijs;
    }
}
$product1 = new Product('Audi' , 120000);

var_dump($product1) ;

class Klant{
    public $naam;
    public $leeftijd;
    public $klantnummer;
    public function __construct($naam, $leeftijd, $klantnummer)
    {
        $this->naam = $naam;
        $this->leeftijd = $leeftijd;
        $this->klantnummer = $klantnummer;
    }
}
$client1 = new Klant('Kees' , 23 , 1);

var_dump($client1);
