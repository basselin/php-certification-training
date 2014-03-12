<?php
include('../benchmark.php');


# TEST 1 - Winner!
$array = array('1', '2', '3', 'a', 'b', 'c');
for($i = 0; $i < 10000; $i++) {
	$tmp_array = array_map('intval', $array);
}

score('intval');


# TEST 2
$array = array('1', '2', '3', 'a', 'b', 'c');
for($i = 0; $i < 10000; $i++) {
	$tmp_array = array_map(function($val) { return (int)$val; }, $array);
}

score('function() { (int) }');


# TEST 3
$int = function($val) { return (int)$val; };
$array = array('1', '2', '3', 'a', 'b', 'c');
for($i = 0; $i < 10000; $i++) {
	$tmp_array = array_map($int, $array);
}

score('$var = function() { (int) }');


# TEST 4
$int = function($val) { return intval($val); };
$array = array('1', '2', '3', 'a', 'b', 'c');
for($i = 0; $i < 10000; $i++) {
	$tmp_array = array_map($int, $array);
}

score('$var = function() { intval() }');


