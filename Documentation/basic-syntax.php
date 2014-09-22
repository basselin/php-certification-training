<?php
	error_reporting(E_ALL);
	ini_set('display_errors', true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Basic syntax - Zend Certification PHP 5.5</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>
			<a href="http://php.net/manual/en/language.basic-syntax.php" target="_blank">Basic syntax</a>
			<span class="badge">Version</span>
		</h1>
		
		
		
		<h2>&lt;?php</h2>
		<div><?php echo 'php ' . phpversion(); ?></div>
		
		
		
		<h2>&lt;?=</h2>
		<div><?= 'php ' . phpversion(); ?></div>
		
		
		
		<h2>&lt;? <span class="badge">:/</span></h2>
		<div><? echo 'php ' . phpversion(); ?></div>
		
		
		
		<h2>&lt;%</h2>
		<div><% echo 'php ' . phpversion(); %></div>
		
		
		
		<h2>&lt;script language=&quot;php&quot;&gt;</h2>
		<div><script language="php">echo 'php ' . phpversion();</script></div>
		
		
		
	</div>

<body>
</html>