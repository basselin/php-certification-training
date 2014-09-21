<?php

// What is the output of the following code?

function pears(Array $pears) {
	if (count($pears) > 0) {
		echo array_pop($pears);
		pears($pears);
	}
}

$fruit = array("Anjo", "Bartlet");
pears($fruit);

