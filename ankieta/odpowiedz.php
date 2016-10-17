<?php

class Odpowiedz {
    
    private $nowaOdpowiedz;
    private $idPytania;
    private $idOdpowiedzi;
    
    private $odpowiedz;
    public function setOdpowiedzText($nowaOdpowiedz) {
        $this->nowaOdpowiedz = $nowaOdpowiedz;
    }
    public function getOdpowiedzText() {
        return $this->nowaOdpowiedz;
    }
    
    
    public static function createOdpowiedz($idPytania) {}
    public static function loadOdpowiedz($idOdpowiedzi) {}
    public static function deleteOdpowiedz($idOdpowiedzi){}
}

$o = new Odpowiedz;
$o->setOdpowiedzText("nowa odpowiedz");

print $o->getOdpowiedzText();


?>
