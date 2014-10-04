<?php

$fh = false;
$filename = 'fopen.txt';

// Read
//$fh = fopen($filename, 'r'); // Reading only
//$fh = fopen($filename, 'r+'); // Reading and writing

// Write
//$fh = fopen($filename, 'w'); // Writing only
//$fh = fopen($filename, 'w+'); // Writing and reading

// Append
//$fh = fopen($filename, 'a'); // Writing only
//$fh = fopen($filename, 'a+'); // Writing and reading

// not eXist
//$fh = fopen($filename, 'x'); // Create and open for writing only
//$fh = fopen($filename, 'x+'); // Create and open for writing only

// Create
//$fh = fopen($filename, 'c'); // Writing only
//$fh = fopen($filename, 'c+'); // Writing and reading

if ($fh) {
    var_dump(fwrite($fh, date('Y-m-d H:i:s')));
    var_dump(fread($fh, filesize($filename)));
    fclose($fh);
}

