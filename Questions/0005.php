<?php

// What is the output of the following PHP script?

$a = 1;												// 1
$b = 2.5;											// 2.5
$c = 0xFF;											// 255

$d = $b + $c;										// 257.5
$e = $d * $b;										// 643.75
$f = ($d + $e) % $a;								// ? % 1 = 0

print ($f + $e);

/*

1) 643.75				OK
2) 432
3) 643
4) 257
5) 432.75

*/

