<?php
	error_reporting(E_ALL);
	ini_set('display_errors', true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Types - Zend Certification PHP 5.5</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>
			<a href="http://php.net/manual/en/language.basic-syntax.php" target="_blank">Types</a>
			<span class="badge">Version</span>
		</h1>
		
		
		
		<h2>HEREDOC</h2>
		<div><?php
			$world = 'world';
			$heredoc = <<<END
Hello $world!
END;
			var_dump($heredoc);
			var_dump(<<< END
Hello {$world}!
END
); // Important!!!
			var_dump(<<<"END"
Hello {$world}!
END
); // Important!!!
		?></div>
		
		
		
		<h2>NOWDOC <span class="badge">5.3+</span></h2>
		<div><?php
			$world = 'world';
			$heredoc = <<<'END'
Hello $world!
END;
			var_dump($heredoc);
			var_dump(<<< 'END'
Hello {$world}!
END
); // Important!!!
		?></div>
		
		
		
		<h2>(callable) OOP <span class="badge">4+</span> <span class="badge">5.2.3+</span> <span class="badge">5.3+</span></h2>
		<div><?php
			class X {
				public $a = [1, 2, 4];
				public function __construct() {
					var_dump(array_map([$this, 'x1'], $this->a));
					var_dump(array_map('X::x2', $this->a)); // 5.2.3+
					var_dump(array_map(['X', 'x3'], $this->a));
					var_dump(array_map(['X', 'static::x3'], $this->a)); // 5.3+
					var_dump(array_map($this->x4(), $this->a)); // 5.3+
//					var_dump(array_map([self, 'x2'], $this->a)); // NOTICE
//					var_dump(array_map([static, 'x2'], $this->a)); // PARSE ERROR
				}
				public function x1($n) {
					return $n * $n + 1;
				}
				public static function x2($n) {
					return $n / $n + 2;
				}
				public static function x3($n) {
					return $n / ($n - 3);
				}
				public function x4() {
					return function($n) {
						return $n + 4;
					};
				}
				public function __destruct() {
					var_dump(__METHOD__);
				}
			}
			new X();
		?></div>
		
		
		
		<h2>$a = 'car'; $a[0]</h2>
		<div><?php
			$a = 'car';
			var_dump($a, $a[0], $a[1], $a[2]);
		?></div>
		
		
		
		<h2>$a[key]</h2>
		<div><?php
			$a = [
				'key1' => 'val1',
				'key2' => ['sub' => 'val'],
				];
			var_dump(
				$a['key1'],
//				"$a['key1']", // PARSE ERROR
				"{$a['key1']}",
				"$a[key1]", // SLOW
				"{$a[key1]}", // Notice: undefined constant key
				//
				$a['key2'],
				"{$a['key2']['sub']}",
				"$a[key2][sub]", // Notice: Array to string 	Display: Array[sub]
				"{$a[key2][sub]}" // Notice: undefined constant key
			);
		?></div>
		
		
		
		<h2>Type Juggling (type)</h2>
		<div><?php
			$var = '10.9 OSX';
			var_dump($var,
				(int)$var,   (integer)$var,
				(bool)$var,  (boolean)$var,
				(float)$var, (double)$var, (real)$var,
				(string)$var,
				(array)$var, (object)$var,
				(unset)$var // 5+
			);
		?></div>
		
		
		
	</div>

<body>
</html>