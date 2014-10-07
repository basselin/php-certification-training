<?php
	error_reporting(E_ALL);
	ini_set('display_errors', true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Filesystem Functions - Zend Certification PHP 5.5</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>
			<a href="http://php.net/manual/en/ref.filesystem.php" target="_blank">Filesystem Functions</a>
			<span class="badge">Version</span>
		</h1>
		
		
		
		<h2><code>string</code> basename(<code>string $path [, string $suffix]</code>) <span class="badge">4+</span></h2>
		<div><?php
			var_dump(
				basename(__FILE__),
				basename(__FILE__, '.php')
			);
		?></div>
		
		
		
		<h2><code>bool</code> chgrp(<code>string $filname, mixed $group</code>) <span class="badge">4+</span></h2>
		
		
		
		<h2><code>bool</code> chmod(<code>string $filename, int $mode</code>) <span class="badge">4+</span></h2>
		
		
		
		<h2><code>bool</code> chown(<code>string $filename, mixed $user</code>) <span class="badge">4+</span></h2>
		
		
		
		<h2>clearstatcache(<code>[bool $clear_realpath_cache = false [, string $filename]]</code>) <span class="badge">4+</span></h2>
		
		
		
		<h2><code>bool</code> copy(<code>string $source, string $dest [, resource $context]</code>) <span class="badge">4+</span></h2>
		
		
		
		<h2>delete &raquo; unlink(), unset()</h2>
		
		
		
		<h2><code>string</code> dirname(<code>string $path</code>) <span class="badge">4+</span></h2>
		<div><?php
			var_dump(dirname(__DIR__));
		?></div>
		
		
		
		<h2><code>float</code> disk_free_space(<code>string $directory</code>) <span class="badge">4.1+</span></h2>
		<div><?php
			var_dump(disk_free_space('.'));
		?></div>
		
		
		
		<h2><code>float</code> disk_total_space(<code>string $directory</code>) <span class="badge">4.1+</span></h2>
		<div><?php
			var_dump(disk_total_space('.'));
		?></div>
		
		
		
		<h2>diskfreespace() &raquo; disk_free_space()</h2>
		
		
		
		<h2><code>bool</code> fclose(<code>resource $handle</code>) <span class="badge">4+</span></h2>
		
		
		
		<!--
		<h2>() <span class="badge">4+</span></h2>
		<div><?php
		?></div>
		-->
		
		
		
	</div>

<body>
</html>
