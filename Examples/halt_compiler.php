<?php
/**
 * __halt_compiler()
 * @version 5.1+
 */

// Open this file
$file = fopen(__FILE__, 'rb');

// Seek file pointer to the end of the __halt_compiler();
fseek($file, __COMPILER_HALT_OFFSET__);

// Output it
echo stream_get_contents($file);

// The end of the script execution
__halt_compiler();DATAS TAR, GZ...