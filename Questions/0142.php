<?php

/*

// Consider the following PHP code segment, which attempts to execute a PDO query:

	try {
		$dbh->exec($sql);
	} catch (PDOException $e) {
		// display warning message
		$info = $e->errorInfo;
	}

// In the event of a PDOException, $info is set with the contents of the $errorInfo property of the exception.
// Which of the following are accurate descriptions of the contents?

1) $info[1] is the database-specific error code					http://php.net/manual/en/pdostatement.errorinfo.php
2) $info[2] is the database-specific error message				http://php.net/manual/en/pdostatement.errorinfo.php
3) $info[1] is the unified error code
4) $info[0] is the unified error code							http://php.net/manual/en/pdostatement.errorinfo.php
5) $info[0] Is the Database-specific error message

*/

