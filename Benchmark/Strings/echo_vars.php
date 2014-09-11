<?php
include('../benchmark.php');

# TEST 1
for($i = 0; $i < 10000; $i++) {
	echo '<span style="display:none;">'. $i .'</span>' . "\n";
}

score('echo .$i.');


# TEST 2
for($i = 0; $i < 10000; $i++) {
	echo '<span style="display:none;">', $i, '</span>', "\n";
}

score('echo ,$i,');


# TEST 3 - Winner...
for($i = 0; $i < 10000; $i++) {
	echo '<span style="display:none;">';
	echo $i;
	echo '</span>';
	echo "\n";
}

score('echo echo echo');


# TEST 4
for($i = 0; $i < 10000; $i++) {
	echo "<span style=\"display:none;\">{$i}</span>\n";
}

score('echo {$i}');



