<?php

// Which key will not be displayed from the following code block?

$array = array('a' => 'John',
               'b' => 'Coggeshall',
               'c' => array('d' => 'John',
                            'e' => 'Smith'));

function display($item, $key) {
    print "$key => $item\n";
}

array_walk_recursive($array, "display");

/*

1) d
2) c									OK
3) b
4) a
5) They all will be displayed

*/

