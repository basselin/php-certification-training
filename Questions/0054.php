<?php

// What should go in the missing line ????? below to produce the output shown?

$array_one = array(1,2,3,4,5);
$array_two = array('A', 'B', 'C', 'D', 'E');

/* ??????? */

print_r($array_three);


// Result:

Array
(
    [5] => A
    [4] => B
    [3] => C
    [2] => D
    [1] => E
)

/*

1) $array_three = array_merge(array_reverse($array_one), $array_two);
2) $array_three = array_combine($array_one, $array_two);
3) $array_three = array_combine(array_reverse($array_one), $array_two);						OK
4) $array_three = array_merge($array_one, $array_two);
5) $array_three = array_reverse($array_one) + $array_two;

*/

