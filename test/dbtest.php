<?php

class myDbTest extends PHPUnit_Extensions_Database_TestCase {

    //pusto na razie

    public function getConnection() {
        $conn = new PDO(
                $GLOBALS['DB_DSN'],
                $GLOBALS['DB_USER'],
                $GLOBALS['DB_PASSWD']
        );

        return new PHPUnit_Extensions_Database_DB_DefaultDatabaseConnection($conn, $GLOBALS['DB_DBNAME']);
    }

    public function getDataSet() {
        
    }

}
?>

