<?php

$colors = [
    'r' => 'f00',
    'g' => '0f0',
    'b' => '00f',
];

next($colors);

foreach ($colors as $k => $v) { // auto reset($colors)
    echo $k; // key
}

reset($colors);
//next($colors);

// list($key, $value)
while (list($v, $k) = each($colors)) {
    echo $v;
}



$values = [
    15,
    12,
    "15",
    34,
    15 => 25,
];

var_dump($values, array_search('15', $values));

