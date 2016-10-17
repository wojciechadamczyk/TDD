<?php

class wrozby implements Iterator {
    
    private $tests = ["bedziesz bogaty", "znajdziesz milosc", "umrzesz"];
    private $index = 0;
    
    
    public function current () {
        return $this->tests[$this->index];
    }
    public function next() {
        $this->index++;
    }
    public function key() {
        return $this->index;
    }
    public function valid() {
        return isset($this->tests[$this->key()]);
    }
    public function rewind() {
        $this->index = 0;
    }
    public function reverse() {
        $this->tests = array_reverse($this->tests);
    }
}

$tests = new wrozby();
print "<ol>";
foreach($tests as $test) {
    print "<li>$test</li>";
}
print "<ol>";
