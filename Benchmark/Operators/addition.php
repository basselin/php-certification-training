<?php
include('../benchmark.php');


# TEST 1
$var = 0;
for($i = 0; $i < 100000; $i++) {
	$var = $var + $i;
}

score('= .. +');


# TEST 2 - Winner!
$var = 0;
for($i = 0; $i < 100000; $i++) {
	$var += $i;
}

score('+=');


