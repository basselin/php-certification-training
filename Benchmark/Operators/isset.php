<?php
include('../benchmark.php');


# TEST 1
for($i = 0; $i < 1000000; $i++) {
	$var = isset($var0123456789) ? $var0123456789 : '';
}

score('isset()');


# TEST 2 - Winner!
for($i = 0; $i < 1000000; $i++) {
	// PHP 7.0+
	$var = $var0123456789 ?? '';
}

score('??');

