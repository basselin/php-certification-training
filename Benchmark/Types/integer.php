<?php
include('../benchmark.php');


# TEST 1
for($i = 0; $i < 10000; $i++) {
	$var = (int)'1a';
}

score('(int)');


# TEST 2 - Winner!
for($i = 0; $i < 10000; $i++) {
	$var = + '1a';
}

score('+');


# TEST 3
for($i = 0; $i < 10000; $i++) {
	$var = intval('1a');
}

score('intval()');



