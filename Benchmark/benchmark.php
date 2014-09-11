<?php
/**
 * Benchmark
 *
 * @author	Benoit Asselin <contact(at)ab-d.fr>
 * @version	benchmark.php, 2014-03-12
 * @link	http://www.ab-d.fr
 *
 */

error_reporting(E_ALL);
ini_set('display_error', true);

/**
 * Display result
 * @param string $label [optional]
 */
function score($label = '') {
	static $microtime_start = null;
	static $test = 0;
	if(null === $microtime_start) {
		// First run
		$microtime_start = microtime(true);
		return;
	}
	$microtime_score = microtime(true) - $microtime_start;
	
	++$test;
	echo '<p style="font-family:sans-serif;font-size:1em;">Test #' . $test . ($label ? ' <code style="font-size:1.1em;">'.$label.'</code> ' : '') .'<br />';
	echo '<span style="color:blue;">Time: ' . sprintf('%.8f', $microtime_score) . ' sec</span></p>';
	
	// Reset
	$microtime_start = microtime(true);
}

// First run
score();


