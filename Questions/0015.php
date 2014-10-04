<?php

// What is the output of the following function?

function &find_variable(&$one, &$two, &$three) {
    if($one > 10 && $one < 20) return $one;
    if($two > 10 && $two < 20) return $two;
    if($three > 10 && $three < 20) return $three;
}

$one = 2;
$two = 20;
$three = 15;

$var = &find_variable($one, $two, $three);

$var++;

print "1: $one, 2: $two, 3: $three";

/*

1) 1: 2, 2: 20, 3: 15
2) 1: 3, 2: 21, 3: 16
3) 1: 2, 2: 21, 3: 15
4) 1: 3, 2: 20, 3: 15
5) 1: 2, 2: 20, 3: 16							OK &&

*/

