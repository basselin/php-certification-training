<?php

// Consider the following script:

function func(&$arraykey) {
    return $arraykey; // function returns by value!
}

$array = array('a', 'b', 'c');
foreach (array_keys($array) as $key) {
    $y = &func($array[$key]);
    $z[] =& $y;
}

var_dump($z);

// This code has changed behavior in PHP 5. Identify the output of this script as it would have been in PHP 4, as well as the new behavior in PHP 5.

/*

1) array('a', 'a', 'b')
2) array('a', 'b', 'c')						PHP 4
3) array('c', 'b', 'a')
4) array('c', 'c', 'c')						PHP 5
5) array('b', 'b', 'b')

*/

