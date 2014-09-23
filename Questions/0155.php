<?php

/*

// When opening a file in writing mode using the FTP handler,
// what must be done so that the file will still be written to the server in the event it previously exists?

1) Provide a context for fopen() using stream_context_create()						http://php.net/manual/en/context.ftp.php
2) You must delete the file first before uploading a new file
3) Configure this behavior in the php.ini file using the ftp.overwrite directive
4) Open the file using the 'w+' mode

*/

