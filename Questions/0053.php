<?php

// What is the result of the following code snippet?

$array = array('a' => 'John',
               'b' => 'Coggeshall',
               'c' => array('d' => 'John',
                            'e' => 'Smith'));

function something($array) {
    extract($array);
    return $c['e'];
}

print something($array);

/*

1) Smith						OK
2) A PHP Warning
3) Coggeshall
4) NULL
5) Array

*/

