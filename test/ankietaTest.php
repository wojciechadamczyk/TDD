<?php

class ankietaTest extends PHPUnit_Extensions_Database_TestCase {
    public function getConnection() {
        $conn = new PDO(
                $GLOBALS['DB_DSN'],
                $GLOBALS['DB_USER'],
                $GLOBALS['DB_PASSWD']
        );
return new PHPUnit_Extensions_Database_DB_DefaultDatabaseConnection($conn, $GLOBALS['DB_DBNAME']);
    }
    public function getDataSet() {
        return $this->createMySQLXMLDataSet('dbTest.xml');
    }
    public function testGetRowCount() {
        $this->assertEquals(20, $this->getConnection()->getRowCount('Ankieta'));
    }
}


//mysql> SELECT * FROM Ankieta;
//+----+--------------------+
//| id | nazwa_ankiety      |
//+----+--------------------+
//|  1 | Nowa ankieta       |
//|  2 | Nowa ankieta       |
//|  3 | Nowa ankieta       |
//|  4 | Nowa ankieta       |
//|  5 | Nowa ankieta       |
//|  6 | Nowa ankieta       |
//|  7 | Nowa ankieta       |
//|  8 | Nowa ankieta       |
//|  9 | Nowa ankieta       |
//| 10 | Nowa ankieta       |
//| 11 | Nowa ankieta       |
//| 12 | Nowa ankieta       |
//| 13 | Nowa ankieta       |
//| 14 | Nowa ankieta       |
//| 15 | Nowa ankieta       |
//| 16 | Nowa ankieta       |
//| 17 | Nowa ankieta       |
//| 18 | Nowa nazwa ankiety |
//| 19 | Nowa nazwa ankiety |
//| 20 | Nowa nazwa ankiety |
//+----+--------------------+
