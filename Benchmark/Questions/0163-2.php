<?php

// What is the output of the following code?

function pears(array $pears) {
	if (count($pears) > 0) {
		echo array_shift($pears);
		pears($pears);
	}
}

$fruit = ["Anjo", "Bartlet"];
pears($fruit);

