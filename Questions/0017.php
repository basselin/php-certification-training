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
            $obj->a = $val;
        }
    }

    public function getValue() {
        return $this->a;
    }
}

$obj_one = new myClass();
$obj_two = new myClass();

$obj_one->changeValue(20, $obj_two);
$obj_two->changeValue($obj_two->getValue(), $obj_one);

$obj_two->printValue();
$obj_one->printValue();

/*

1) 10,20
2) You cannot modify private member variables of a different class
3) 20,20																OK ( not 2) because its own class )
4) 10,10
5) 20,10

*/

