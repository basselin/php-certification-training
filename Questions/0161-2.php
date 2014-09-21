<?php

/*

// Which statement will return the third parameter passed to a function?

1) $argv[3];
2) $argv[2];
3) func_get_args(3);
4) func_get_arg(2);
5) func_get_arg(3);

*/


function arg() {
	print_r(func_get_arg(2));
	print_r(func_get_args(3));
}

arg(1, 2, 3, 4, 5);

