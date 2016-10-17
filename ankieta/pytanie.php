<?php

class Pytanie {
    private $nowePytanie;
    private $idAnkiety;
    private $idPytania;
    
    function __construct() {
         $this->db = new PDO(
                'mysql:dbname=test2;host=localhost',
                'root',
                'CodersLab'
        );
    
    }
    
    
    private $pytanieTekst;
    public function getOdpowiedzi() {}
    public function setPytanieText($nowePytanie) {
        $this->nowePytanie = $nowePytanie;
    }
    public function getPytanieText(){
        return $this->nowePytanie;
    }
    
    
    
    public static function createPytanie($idAnkiety) {}
    public static function loadPytanie($idPytania) {}
    public static function deletePytanie($idPytania){}
}

$p = new Pytanie;
$p->setPytanieText("Nowe pytanie");

print $p->getPytanieText();


?>
