<?php

// When connecting to a database using PDO, what must be done to ensure that database credentials are not compromised if the connection were to fail?

/*

1) wrap the PDO DSN in a try/catch block to catch any connection exception					http://php.net/manual/en/pdo.connections.php
2) Use constants in the PDO DSN
3) Place the login credentials in the php.ini file
4) Disable E_STRICT and E_NOTICE error reporting levels

*/

