<?php

include ('zadaniea5.php');

class zadaniea5Test extends PHPUnit_Framework_TestCase {

    private $spodziewanyWynik;

    public static function setUpBeforeClass() {
        echo "setUpBeforeClass()\n";
    }

    protected function setUp() {
        parent::setUp();
        echo "setUp\n";
        
        echo "\n" . $_POST['user_email'] . "\n";
        echo "\n" . $_GET['order_id'] . "\n";
        
        $this->spodziewanyWynik = [1, 2, 5, 10];
    }

//    public function testAssertEquals() {
//        $wynik = 0;
//        $this->assertEquals(1, 0);
//    }
//    public function testFirstValueis1() {
//        $this->assertTrue($array[0] == '1');
//    }
//    public function testLastValue() {
//        $dlugosc = count($wynik);
//        $ostatnia = $wynik[$dlugosc - 1];
//        $this->assertEquals($n, $ostatnia);
//    }

    public function testJedynka() {
        $wynik = PrimeGenerator::generate(10);
        $this->assertEquals(1, $wynik[0], "brak 1 na pierwszej pozycji");
    }

    public function testOstatniaWartosc() {
        $n = 10;
        $wynik = PrimeGenerator::generate(10);
        $this->assertEquals($n, $wynik[count($wynik) - 1], "zla ostatnia wartosc");
    }

    public function testPoprawnoscizawartosci() {
        $wynik = PrimeGenerator::generate(10);
        $poprawnyWynik = [1, 2, 5, 10];
        $this->assertEquals($poprawnyWynik, $wynik);
    }

    public function testDlugosci() {
        $this->markTestIncomplete();
        $wynik = PrimeGenerator::generate(10);
        $this->assertTrue(count($wynik) > 0, "niepoprawna dlugosc");
    }
    
    protected function tearDown() {
        echo "\ntearDown()";
        parent::tearDown();
    }
    
    public static function tearDownAfterClass() {
        echo "\ntearDownAfterClass()";
    }

}

?>