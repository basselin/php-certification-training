<?php

// What is the output of the following script?

class ClassOne {
    protected $a = 10;

    public function changeValue($b) {
       $this->a = $b;
    }
}

class ClassTwo extends ClassOne {

    protected $b = 10;

    public function changeValue($b) {
        $this->b = 10;
        parent::changeValue($this->a + $this->b);
    }

    public function displayValues() {
        print "a: {$this->a}, b: {$this->b}\n";
    }
}

$obj = new ClassTwo();

$obj->changeValue(20);
$obj->changeValue(10);

$obj->displayValues();

/*

1) a: 30, b: 30
2) a: 30, b: 20
3) a: 30, b: 10								OK
4) a: 20, b: 20
5) a: 10, b: 10

*/

