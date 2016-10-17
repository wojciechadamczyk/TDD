<?php

include('zadanieb1.php');

class testB1 extends PHPUnit_Framework_TestCase {
    
    private $bg;
    
    protected function setUp() {
        parent::setUp();
        $this->bg = new BowlingGame;
        
    }
    
    //1
    public function testBadGame() {
        
        //dwadzieścia rzutów
        for ($i = 0; $i < 20; $i++) {   
            $this->bg->roll(0);     
        }
        
        $this->assertEquals(0, $this->bg->score());
        
    }
    
    //2 -> zakładam po 1 zbitym w każdej RAMCE, a nie rzucie
    public function testOnePin() {
        
        //dziesięć ramek
        for ($i = 0; $i < 10; $i++) {   
            $this->bg->roll(1);     
            $this->bg->roll(0);     
        }
        
        $this->assertEquals(10, $this->bg->score());
        
    }
    
    //3 -> zmieniłam "0 zbitych" na "3 zbitych" w poleceniu poniżej
    //Strike w pierwszym rzucie, następnie 3 zbitych, a potem wszystkie pudła
    public function test3() {
        
        $this->bg->roll(10);
        
        $this->bg->roll(3);
        
        for ($i = 0; $i < 17; $i++) {   
            $this->bg->roll(0);     
        }
        
        $this->assertEquals(16, $this->bg->score());
        
    }
    
    //4
    public function test4() {
        
        $this->bg->roll(10);
        
        $this->bg->roll(3);    
        $this->bg->roll(4);
        
        for ($i = 0; $i < 16; $i++) {   
            $this->bg->roll(0);     
        }
        
        $this->assertEquals(24, $this->bg->score());
        
    }
    
    //5
    public function test5() {
        
        $this->bg->roll(4);
        $this->bg->roll(6);
        
        $this->bg->roll(4);
        $this->bg->roll(3);
        
        for ($i = 0; $i < 16; $i++) {   
            $this->bg->roll(0);     
        }
        
        $this->assertEquals(21, $this->bg->score());
    }
    
    //6
    public function testPerfectGame() {   
        
        for ($i = 0; $i < 12; $i++) {   
            $this->bg->roll(10);     
        }
        
        $this->assertEquals(300, $this->bg->score());
    }
}

