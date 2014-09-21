<?php

// What is the output of the following?

function _1dotEach($n) {
	if ($n > 0) {
		_1dotEach(--$n);
		echo ".";
	} else {
		return $n;
	}
}

_1dotEach(4);

