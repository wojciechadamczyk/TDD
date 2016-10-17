<?php



include('zadaniea2.php');

class testa2 extends PHPUnit_Framework_TestCase {
    
    public function testTrzy() {
        $this->assertEquals("12Fizz", fizzBuzz(3));
    }
    
}


?>

