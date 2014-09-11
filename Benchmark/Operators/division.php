<?php
include('../benchmark.php');


# TEST 1
for($i = 0; $i < 100000; $i++) {
	$var = 3200 / 2;
}

score('/2');


# TEST 2 - Winner!
for($i = 0; $i < 100000; $i++) {
	$var = 3200 >> 1;
}

score('>>1');


