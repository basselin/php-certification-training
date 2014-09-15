<?php
	error_reporting(E_ALL);
	ini_set('display_errors', true);
?>
<html>
<head>
	<title>Control Structures - Certification PHP 5.5</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>
			<a href="http://php.net/manual/en/language.control-structures.php" target="_blank">Control Structures</a>
			<span class="badge">Version</span>
		</h1>
		
		
		
		<h2>if: else:</h2>
		<div><?php
			$var = 'true';
			if('true' == $var): echo 'true';
			else: echo 'false';
			endif;
		?></div>
		
		
		
		<h2>if: elseif: else:if:</h2>
		<div><?php
			$var1 = 'false';
			$var2 = 'true';
			if('true' == $var1) :
				echo 'true 1';
//			elseif('true' == $var2) : // OK!
//			else if('true' == $var2) : // PARSE ERROR
			else :	if('true' == $var2) : // Solution
					echo 'true 2';
				endif; // /Solution
			endif;
		?></div>
		
		
		
		<h2>?: <span class="badge">5.3+</span></h2>
		<div><?php
			$var = 'true';
			echo ($var ?: 'false');
		?></div>
	</div>

<body>
</html>
