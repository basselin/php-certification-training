<?php

// What is the output of the following code block?

$array = array(1 => 0, 2, 3, 4);

array_splice($array, 3, count($array), array_merge(array('x'), array_slice($array, 3))); 

var_dump($array);

/*

1) 1 => 1, 2 => 2, 3 => x, 4 => 4
2) 0 => 1, 2 => 2, 3 => 3, 4 => 4, x => 3
3) 0 => 0, 1 => 2, 2 => 3, 3 => x, 4 => 4			OK
4) 0 => x, 1 => 0, 2 => 1, 3 => 2, 4 => 3
5) 1 => 1, 3 => x, 2 => 2, 4 => 4

*/


/*

$array = [1 => 0, 'titi' => 2, 3, 4];

var_dump(
    array_splice($array, 4),
    $array
);

*/

