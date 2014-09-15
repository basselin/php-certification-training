<?php
	error_reporting(E_ALL);
	ini_set('display_errors', true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Control Structures - Zend Certification PHP 5.5</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
		
		
		
		<h2 class="text-danger">?: <span class="badge">5.3+</span></h2>
		<div><?php
			$var = 'true';
			echo ($var ?: 'false');
		?></div>
		
		
		
		<h2>switch: case:</h2>
		<div>
<?php		$foo = 1; ?>
<?php			switch($foo) : ?>
<?php				case 1 : ?>
						Any output (including whitespace) between a switch statement and the first case will result in a syntax error.
<?php					break; ?>
<?php				default : ?>
<?php					break; ?>
<?php			endswitch; ?>
		</div>
		
		
		
		<h2>foreach</h2>
		<div><?php
			$arr = array(1, 2, 3, 4);
			foreach ($arr as &$value) {
				$value = $value * 2;
			}
//			$value = null;
			unset($value);
			var_dump($arr);
		?></div>
		
		
		
		<h2 class="text-danger">foreach as list() <span class="badge">5.5+</span></h2>
		<div><?php
			$array = [
				[1, 2],
				[3, 4],
			];

//			foreach ($array as list($a, $b, $c)) { // NOTICE
//				var_dump("A: $a; B: $b; C: $c;");
//			}
			foreach ($array as list($a, $b)) {
				var_dump("A: $a; B: $b;");
			}
			$a = 'null';
			foreach ($array as list(, $b, )) { // NO PARSE ERROR
				var_dump("A: $a; B: $b;");
			}
		?></div>
		
		
		
		<h2>break/continue (integer)</h2>
		<div><?php
//			break; // FATAL ERROR
			$break = 2; // Remove PHP 5.4
			while(true) {
				echo 'while1 ';
				do {
					echo 'do1 ';
//					break $break; // PARSE ERROR
					break 2;
				} while(true);
				echo 'while2';
			}
		?></div>
		
		
		
		<h2>declare</h2>
		<div><?php
			
		?></div>
		
		
		
		<h2>return</h2>
		<div><?php
			$a = 2;
//			$b = &$a;
//			$b += 2;
//			var_dump($b);
			function testReference(&$args) {
				$args += 2;
				return $args;
			}
			$b = testReference($a);
			$b++;
			
			var_dump($a, $b);
		?></div>
		
		
		
		<h2 class="text-danger">goto <span class="badge">5.3+</span></h2>
		<div><?php
			goto jump;
			die('die');
			jump:
			echo 'jump:';
		?></div>
	</div>

<body>
</html>
