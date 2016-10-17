<?php

include ('zadaniea3.php');

class zadaniea3Test extends PHPUnit_Framework_TestCase {
    public function testTrue() {
            $this->assertTrue(checkYear(2016));
}
}