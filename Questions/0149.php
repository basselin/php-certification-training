<?php

/*

// What is wrong with the following code snippet? Assume default configuration values apply.

	$fp = fsockopen('www.php.net', 80);
	fwrite($fp, "GET / HTTP/1.0\r\nHost: www.php.net\r\n");
	$data = fread($fp, 8192);

1) The request is blocking and may cause fread() to hang
2) The HTTP request is malformed											// double "\r\n\r\n"
3) This script should be re-written using fgets() instead of fread()
4) The request is non-blocking and fread() may miss the response
5) You cannot use fwrite() with fsockopen()

*/

