<?php

// What is the output of the following code?

function byReference(&$variable = 5) {
	echo ++$variable;
}

byReference();

