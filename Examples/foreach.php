<?php

$a = ['one', 'two', 'three', 'four'];

var_dump($a);

foreach ($a as $k => &$v);

//$v = 'wtf'; // TEST 3

var_dump($a);

foreach ($a as $k => $v) { // TEST 1
  //if ($k >= 1) { break; } // TEST 2
}

var_dump($a);

