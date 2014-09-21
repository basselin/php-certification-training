<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

// When your error reporting level includes E_STRICT, what will the output of the following code be?

function optionalParam($x = 1, $y = 5, $z) {
	if ((!$z > 0)) {
		$z = 1;
	}
	for ($count = $x; $count < $y; $count += $z) {
		echo "#";
	}
}

optionalParam(2, 4, 2);


/* MORE */
//optionalParam(2, 4);

