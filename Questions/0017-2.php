<?php

// What are the values of $a in $obj_one and $obj_two when this script is executed?

class myClass {
    private $a;

    public function __construct() {
        $this->a = 10;
    }

    public function printValue() {
        print "The Value is: {$this->a}\n";
    }

    public function changeValue($val, $obj = null) {
        if(is_null($obj)) {
            $this->a = $val;
        } else {
        //$obj->a = $val;
            $obj->b = $val;
        }
    }

    public function getValue() {
        return $this->a;
    }
}

class mySubClass extends myClass {
    private $b;
}

$obj_one = new myClass();
$obj_two = new mySubClass();

$obj_one->changeValue(20, $obj_two);
$obj_two->changeValue($obj_two->getValue(), $obj_one);

$obj_two->printValue();
$obj_one->printValue();

/*

FATAL ERROR: Cannot access private property

*/

