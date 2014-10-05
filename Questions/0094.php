<?php

// Consider the following PHP string representing an SQL statement:

$query = "UPDATE users SET password='$password' WHERE username='$username'";

// Which of the following values for $username or $password would change the behavior of this query when executed?

/*

1) None of the above
2) $username = "foobar\' WHERE username='admin'";
3) $password = "foobar' WHERE username='admin' --:";						OK
4) $password = "\"foobar\" WHERE username=\"admin\"";

*/

