<?php

/*

// Using flock() to lock a stream is only assured to work under what circumstances?

1) When running in a Linux environment local filesystem
2) When accessing the stream of the local filesystem				http://php.net/manual/en/function.flock.php
3) When running in a Windows environment and accessing a share
4) When accessing a bi-directional stream
5) When accessing a read-only stream

*/

