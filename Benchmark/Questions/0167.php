<?php

// What is the output of the following?

function 1dotEach($n) {
	if ($n > 0) {
		1dotEach(--$n);
		echo ".";
	} else {
		return $n;
	}
}

1dotEach(4);

