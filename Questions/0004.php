<?php

// What is the output of the following PHP code?

define('FOO', 10);

$array = array(10 => FOO,
               "FOO" => 20);
print $array[$array[FOO]] * $array["FOO"];

/*

1) FOO
2) 100
3) 200					OK
4)  20
5)  10

*/

