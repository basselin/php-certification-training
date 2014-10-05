<?php

// Consider the following script:

$oranges = 10;
$apples = 5;

$string = "I have %d apples and %d oranges";

/* ??????? */

// What could be placed in place of ?????? to output the string:
// I have 5 apples and 10 oranges

/*

1) str_format($string, $apples, $oranges);
2) print($string, $apples, $oranges);
3) printf($string, $apples, $oranges);					OK
4) print sprintf($apples, $oranges);
5) sprintf($string, $oranges, $apples);

*/

