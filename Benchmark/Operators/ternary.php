<?php
include('../benchmark.php');


# TEST 1
for($i = 0; $i < 100000; $i++) {
	if(10) {
		$var = 10;
	} else {
		$var = 20;
	}
}

score('if else');


# TEST 2
for($i = 0; $i < 100000; $i++) {
	$var = (10 ? 10 : 20);
}

score('.. ? .. : .. ');


# TEST 3 - Winner!
for($i = 0; $i < 100000; $i++) {
	// PHP 5.3+
	$var = (10 ?: 20);
}

score('.. ?: ..');


