<?php

class Ankieta {
    
    private $id;
    private $nazwa;
    private $db;
    
    function __construct() {
        $this->db = new PDO(
                'mysql:dbname=test2;host=localhost',
                'root',
                'CodersLab'
        );
    }
    
    public function setID($id){
        $this->id = $id;
    }
    
    
    
    public function getNazwa(){
        return $this->nazwa;
    }
    public function setNazwa($nowaNazwa) {
        $this->nazwa = $nowaNazwa;
    }
    
    public function saveToDb() {
        //zapis do bazy
        //$this->id
        //$this->nazwa
        $sql = "UPDATE Ankieta SET nazwa_ankiety='".$this->nazwa."' WHERE id=".$this->id;
        //print $sql;
        $this->db->query($sql);
    }
    
    public function getPytania() {
      $pytania = array();
      
      $sql = "SELECT id, tekst_pytanie from Pytania where ankieta_id=" . $this->ankieta_id;
      foreach ($this->conn->query($sql) as $row) {
          //$row['id]
          //$row['tekst_pytanie']
          //$pytania = new pytanie($id)
          
      }
    }
    
    public static function createAnkieta($nazwa_ankiety) {
        $dbs = new PDO(
                'mysql:dbname=test2;host=localhost',
                'root',
                'CodersLab'
                );
        
        $sql = "INSERT INTO Ankieta (nazwa_ankiety) values ('".$nazwa_ankiety."');";
        $dbs->query($sql);
        
        $ankieta = new Ankieta();
        $ankieta->setID($dbs->lastInsertId());
        $ankieta->setNazwa($nazwa_ankiety);
        
        return $ankieta;
        //return $dbs->lastInsertId();
    }
    public static function loadAnkieta($id) {
        $dbs = new PDO(
                'mysql:dbname=test2;host=localhost',
                'root',
                'CodersLab'
                );
        
        $sql = 'SELECT nazwa_ankiety, id FROM Ankieta WHERE id=' . $id;
        $row = $dbs->query($sql)->fetch();
        
        //var_dump($row);
        
        $ankieta = new Ankieta();
        $ankieta->setID($id);
        $ankieta->setNazwa($row['nazwa_ankiety']);
        
        return $ankieta;
    }
    public static function deleteAnkieta($id){
        $dbs = new PDO(
                'mysql:dbname=test2;host=localhost',
                'root',
                'CodersLab'
                );
        
        $sql = "DELETE FROM Ankieta WHERE id=$id";
        $dbs->query($sql);
    }
}

//$a = new Ankieta;
//$a->setNazwa("moja pierwsza ankieta");


//$ankieta = Ankieta::createAnkieta("Nowa ankieta");
//$ankieta->setNazwa("Nowa nazwa ankiety");
//$ankieta->saveToDb();

Ankieta::loadAnkieta(2);

?>
