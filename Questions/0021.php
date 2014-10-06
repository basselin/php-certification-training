<?php

// What is wrong with the following code?

function duplicate($obj) {
    $newObj = $obj;
    return $newObj;
}

$a = new MyClass();

$a_copy = duplicate($a);

$a->setValue(10);
$a_copy->setValue(20);

/*

1) You must use return &$newObj instead
2) There is nothing wrong with this code
3) duplicate() must accept its parameter by reference
4) You must use the clone operator to make a copy of an object									OK
5) duplicate() must return a reference

*/

