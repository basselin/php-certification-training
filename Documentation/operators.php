<?php
	error_reporting(E_ALL);
	ini_set('display_errors', true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Operators - Zend Certification PHP 5.5</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>
			<a href="http://php.net/manual/en/language.operators.php" target="_blank">Operators</a>
			<span class="badge">Version</span>
		</h1>
		
		
		
		<h2>&amp; And</h2>
		<div><?php
			var_dump(0b0 & 0b1, 0b1 & 0b1);
		?></div>
		
		
		
		<h2>| Or</h2>
		<div><?php
			var_dump(0b0 | 0b1, 0b1 | 0b1);
		?></div>
		
		
		
		<h2>^ Xor</h2>
		<div><?php
			var_dump(0b0 ^ 0b1, 0b1 ^ 0b1);
		?></div>
		
		
		
		<h2>~ Not</h2>
		<div><?php
			// 1111111111111111111111111111111111111111111111111111111111111111		64 bits
			// 1111111111111111111111111111111111111111111111111111111111111110
			var_dump(decbin(~0b0), decbin(~0b1));
		?></div>
		
		
		
		<h2>&lt;&lt; Shift left / D&eacute;calage &agrave; gauche</h2>
		<div><?php
			var_dump(decbin(0b1 << 0b100), 0b1 << 0b100);
		?></div>
		
		
		
		<h2>&gt;&gt; Shift right / D&eacute;calage &agrave; droite</h2>
		<div><?php
			var_dump(decbin(0b1 >> 0b100), 0b1 >> 0b100);
		?></div>
		
		
		
		<h2>++$a and $a++</h2>
		<div><?php
			$a = 2;
			$b = $a;
			var_dump(++$a, $a, $b++, $b);
		?></div>
		
		
		
		<h2>String .</h2>
		<div><?php
			var_dump(1.2,
				//1. 2, 1 .2, // parse error
				1 . 2);
		?></div>
		
		
		
		<h2>instanceof</h2>
		<div><?php
			class A {}
			class B extends A {}
			$a = new A;
			$b = new B;
			var_dump(
				$a instanceof A, $a instanceof B, // true, false
				$b instanceof A, $b instanceof B, // true, true
				$b instanceof $a, $a instanceof $b // true, false
			);
		?></div>
		
		
	</div>

<body>
</html>