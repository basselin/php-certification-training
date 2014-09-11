<?php
include('../benchmark.php');


# TEST 1
for($i = 0; $i < 10000; $i++) {
	$tmp_array = array('1', '2', '3', 'a', 'b', 'c');
}

score('array()');


# TEST 2
for($i = 0; $i < 10000; $i++) {
	$tmp_array = array();
	$tmp_array[] = '1';
	$tmp_array[] = '2';
	$tmp_array[] = '3';
	$tmp_array[] = 'a';
	$tmp_array[] = 'b';
	$tmp_array[] = 'c';
}

score('[]..');


# TEST 3
for($i = 0; $i < 10000; $i++) {
	$tmp_array = array();
	$x = 0;
	$tmp_array[$x++] = '1';
	$tmp_array[$x++] = '2';
	$tmp_array[$x++] = '3';
	$tmp_array[$x++] = 'a';
	$tmp_array[$x++] = 'b';
	$tmp_array[$x++] = 'c';
}
score('[$x]..');


# TEST 4 - Winner!
for($i = 0; $i < 10000; $i++) {
	// PHP 5.4+
	$tmp_array = ['1', '2', '3', 'a', 'b', 'c'];
}

score('[ .. ]');


