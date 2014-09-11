<?php
include('../benchmark.php');


# TEST 1
for($i = 0; $i < 10000; $i++) {
	echo $i;
}

score('echo');

# TEST 2
for($i = 0; $i < 10000; $i++) {
	?><?php echo $i; ?><?php
}

score('&lt;?php echo');


# TEST 3
for($i = 0; $i < 10000; $i++) {
	print $i;
}

score('print');


# TEST 3
for($i = 0; $i < 10000; $i++) {
	?><?php print $i; ?><?php
}

score('&lt;?php print');


# TEST 5 - Winner!
for($i = 0; $i < 10000; $i++) {
	?><?= $i ?><?php
}

score('&lt;?= ?&gt;');


