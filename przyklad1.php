<?php

class AAObject implements ArrayAccess {
    protected $value=1;
    
    public function offsetExists($offset) {
        return true;
    }
    public function offsetGet($offset) {
        return $this->value;
    }
    public function offsetSet($offset, $value) {
        $this->value = $value;
    }
    public function offsetUnset($offset) {
        $this->value = 0;
    }
}

class JS implements JsonSerializable {
    private $tablica = array(1,2,3,4,5);
    
    public function jsonSerialize() {
        return implode('-', $this->tablica);
    }
}

