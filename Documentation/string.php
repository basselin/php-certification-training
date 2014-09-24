<?php
	error_reporting(E_ALL);
	ini_set('display_errors', true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>String Functions - Zend Certification PHP 5.5</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>
			<a href="http://php.net/manual/en/ref.strings.php" target="_blank">String Functions</a>
			<span class="badge">Version</span>
		</h1>
		
		
		
		
		<h2>addcslahes() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(
				addcslashes('Hello !', 'a..z'),
				addcslashes('Hello !', 'A..z')
			);
		?></div>
		
		
		
		<h2>addslashes() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(addslashes("Hello O'reilly"));
		?></div>
		
		
		
		<h2>bin2hex() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(bin2hex('Hello !'));
		?></div>
		
		
		
		<h2>chop() <span class="badge">4+</span> &raquo; rtrim()</h2>
		
		
		
		<h2>chr() <span class="badge">4+</span></h2>
		<p><a href="http://www.asciitable.com" target="blank">ASCII-Table</a></p>
		<div><?php
			var_dump(
				chr(48), chr(57), // 0, 9
				chr(65), chr(90), // A, Z
				chr(97), chr(122) // a, z
				);
		?></div>
		
		
		
		<h2>chunk_link() <span class="badge">4+</span></h2>
		<div><?php
			$str = base64_encode(file_get_contents(__FILE__));
			var_dump(chunk_split($str, 78, PHP_EOL));
		?></div>
		
		
		
		<h2>convert_cyr_string() <span class="badge">4+</span></h2>
		
		
		
		<h2>convert_uudecode() <span class="badge">5+</span></h2>
		<div><?php
			var_dump(convert_uudecode("+22!L;W9E(%!(4\"$`\n`"));
		?></div>
		
		
		
		<h2>convert_uuencode() <span class="badge">5+</span></h2>
		<div><?php
			var_dump(convert_uuencode(__FILE__));
		?></div>
		
		
		
		<h2>count_chars() <span class="badge">4+</span></h2>
		<div><?php
			$chars = count_chars(__FILE__, 1);
			var_dump(__FILE__, $chars);
			array_walk($chars, function($item, $key) {
				echo chr($key) . ' = ' . $item . '<br />';
			});
		?></div>
		
		
		<h2>crc32() <span class="badge">4.0.1+</span></h2>
		<div><?php
			var_dump(
				crc32(__FILE__),
				sprintf("%u", crc32(__FILE__))
				);
		?></div>
		
		
		
		<h2>crypt() <span class="badge">4+</span></h2>
		<div><?php
			if(CRYPT_STD_DES == 1) { // 2
				var_dump('DES standard : ' . crypt('rasmuslerdorf', 'rl'));
			}
			if(CRYPT_EXT_DES == 1) { // 9
				var_dump('DES &eacute;tendu : ' . crypt('rasmuslerdorf', '_J9..rasm'));
			}
			if(CRYPT_MD5 == 1) { // $1$ et 12
				var_dump('MD5 :          ' . crypt('rasmuslerdorf', '$1$rasmusle$'));
			}
			if(CRYPT_BLOWFISH == 1) { // "$2a$", "$2x$" ou "$2y$", un parametre a 2 chiffres, $, et enfin 22
				var_dump('Blowfish :     ' . crypt('rasmuslerdorf', '$2a$07$usesomesillystringforsalt$'));
			}
			if(CRYPT_SHA256 == 1) { // rounds et 16
				var_dump('SHA-256 :      ' . crypt('rasmuslerdorf', '$5$rounds=5000$usesomesillystringforsalt$'));
			}
			if(CRYPT_SHA512 == 1) { // rounds et 16
				var_dump('SHA-512 :      ' . crypt('rasmuslerdorf', '$6$rounds=5000$usesomesillystringforsalt$'));
			}
		?></div>
		
		
		
		<h2>echo <span class="badge">4+</span></h2>
		<div><?php
			// echo is not a function !
			echo 'Toto';
			echo ' ', 'est', ' ', 'beau !<br />';
			
//			(true ? echo 'true ' : echo 'false '); // PARSE ERROR
			(true ? print 'true ' : print 'false ');
			echo (true ? 'true ' : 'false ');
			
			$echo = 'echo';
//			$echo('echo'); // FATAL ERROR
			echo '<hr />';
			$print = 'print';
//			$print('print'); // FATAL ERROR
		?></div>
		
		
		
		<h2>explode() <span class="badge">4+</span></h2>
		<div><?php
			// http://php.net/manual/en/function.explode.php
		?></div>
		
		
		
		<!--
		<h2>() <span class="badge">+</span></h2>
		<div><?php
			
		?></div>
		-->
		
		
		
	</div>

<body>
</html>