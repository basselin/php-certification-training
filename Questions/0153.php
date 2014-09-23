<?php

// What should go in the ??????? assignment below to create a Zlib-compressed file foo.gz
// with a compression level of 9 ?


$file = '????????';

$fr = fopen($file, 'wb9');
fwrite($fr, $data);
fclose($fr);

/*

1) gzip://foo.gz?level=9
2) compress.zip://foo.gz?level=9
3) compress.zlib://foo.gz					// http://php.net/manual/en/wrappers.compression.php
4) compress.gzip://foo.gz?level=9
5) zlib://foo.gz

*/

