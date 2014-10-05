<?php

// The following code snippet displays what for the resultant array?

$a = array(1 => 0, 3 => 2, 4 => 6);
$b = array(3 => 1, 4 => 3, 6 => 4);

print_r(array_intersect($a, $b));

/*

1) 1 => 0
2) 1 => 3, 3 => 1, 4 => 3
3) 3 => 1, 3=> 2, 4 => 3, 4=> 6
4) 1 => 0, 3 => 2, 4 => 6
5) An empty Array							OK

*/

