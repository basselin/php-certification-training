<?php

/*

// How can one take advantage of the time waiting for a lock during a stream access,
// to do other tasks using the following locking code as the base:
//	$retval = flock($fr, LOCK_EX);

1) Use flock_lazy() instead of flock()
2) Use LOCK_EX|LOCK_NB instead of LOCK_EX							// http://php.net/manual/en/function.flock.php
3) Use LOCK_UN instead of LOCK_EX
4) Check the value of $retval to see if the lock was obtained
5) Check to see if $retval == LOCK_WAIT

*/

