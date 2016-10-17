<?php

abstract class Animal {
    public $legs;
    public $weight;
    public $color;

public function sleep($time) {
$this->startSleep();
}
public function stop() {
$this->stopSleep();
}
abstract protected startSleep();
abstract protected stopSleep();
}

class Dog extends Animal {
    public $bark;
    
protected function startSleep() {}
protected function stopSleep() {}
}

class york extends Animal {
    public $pedigree; //rodowod
}

$york = new york;
$york->sleep;
$york->bark;
