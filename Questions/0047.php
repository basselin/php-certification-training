<?php

// What is the output of this code snippet?

$a = array(0.001 => 'b', .1 => 'c');

var_dump($a);

/*

1) An empty array
2) 0.001 => 'b', .1 => c
3) 0 => 'c'									OK
4) '0.001' => 'b', '0.1' => c'
5) A Syntax Error

*/

