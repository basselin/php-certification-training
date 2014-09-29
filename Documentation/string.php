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
			$str = 'one|two|three|four';
			var_dump(
				explode('|', $str),
				explode('|', $str, 2),
				explode('|', $str, -1) // 5.1+
			);
		?></div>
		
		
		
		<h2>fprintf() <span class="badge">5+</span></h2>
		<div><?php
			if ($fp = fopen('date.txt', 'w')) {
				var_dump(fprintf($fp, '%04d-%02d-%02d', 2014, 9, 28));
				unlink('date.txt');
			}
		?></div>
		
		
		
		<h2>get_html_translation_table() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(
				get_html_translation_table(HTML_SPECIALCHARS, ENT_COMPAT | ENT_HTML401),
				get_html_translation_table(HTML_SPECIALCHARS, ENT_COMPAT | ENT_HTML5),
				get_html_translation_table(HTML_ENTITIES, ENT_COMPAT | ENT_HTML5)
			);
		?></div>
		
		
		
		<h2>hebrev() <span class="badge">4+</span></h2>
		
		
		
		<h2>hebrevc() <span class="badge">4+</span></h2>
		
		
		
		<h2 class="text-danger">hex2bin() <span class="badge">5.4+</span></h2>
		<div><?php
			var_dump(hex2bin('4578616d706c6520686578'));
		?></div>
		
		
		
		<h2>html_entity_decode() <span class="badge">4.3+</span></h2>
		<div><?php
			/*
			ENT_COMPAT
			ENT_QUOTES
			ENT_NOQUOTES
			ENT_HTML401
			ENT_XML1
			ENT_XHTML
			ENT_HTML5
			*/
		?></div>
		
		
		
		<h2>htmlentities() <span class="badge">4+</span></h2>
		<div><?php
			/*
			ENT_COMPAT
			ENT_QUOTES
			ENT_NOQUOTES
			ENT_IGNORE
			ENT_SUBSTITUTE
			ENT_DISALLOWED
			ENT_HTML401
			ENT_XML1
			ENT_XHTML
			ENT_HTML5
			*/
			
			$str = 'Un \'apostrophe\' en <strong>gras</strong>';
			var_dump(
				htmlentities($str),
				htmlentities($str, ENT_QUOTES)
			);
			$str = "\x8F!!!";
			var_dump(
				$str,
				htmlentities($str, ENT_QUOTES, "UTF-8"),
				htmlentities($str, ENT_QUOTES | ENT_IGNORE, "UTF-8")
			);
		?></div>
		
		
		
		<h2>htmlspecialchars_decode() <span class="badge">5.1+</span></h2>
		<div><?php
			/*
			ENT_COMPAT
			ENT_QUOTES
			ENT_NOQUOTES
			ENT_HTML401
			ENT_XML1
			ENT_XHTML
			ENT_HTML5
			*/
		?></div>
		
		
		
		<h2>htmlspecialchars() <span class="badge">4+</span></h2>
		<div><?php
			/*
			ENT_COMPAT
			ENT_QUOTES
			ENT_NOQUOTES
			ENT_IGNORE
			ENT_SUBSTITUTE
			ENT_DISALLOWED
			ENT_HTML401
			ENT_XML1
			ENT_XHTML
			ENT_HTML5
			*/
		?></div>
		
		
		
		<h2>implode() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(
				implode(',', ['lastname', 'email', 'phone',]),
				implode('hello', [])
			);
		?></div>
		
		
		
		<h2>join() <span class="badge">4+</span> &raquo; implode()</h2>
		
		
		
		<h2 class="text-danger">lcfirst() <span class="badge">5.3+</span></h2>
		<div><?php
			var_dump(
				lcfirst('HelloWorld'),
				lcfirst('HELLO WORLD')
			);
		?></div>
		
		
		
		<h2>levenshtein() <span class="badge">4.0.1+</span></h2>
		
		
		
		<h2>localeconv() <span class="badge">4.0.5+</span></h2>
		<div><?php
			var_dump(
				setlocale(LC_ALL, 'fr_FR'),
				localeconv(),
				strftime("%A %d %B %Y")
			);
		?></div>
		
		
		
		<h2>ltrim() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(
				ltrim('Hello World', 'Hdle')
			);
		?></div>
		
		
		
		<h2>md5_file() <span class="badge">4.2+</span></h2>
		<div><?php
			var_dump(
				md5_file(__FILE__),
				md5_file(__FILE__, true)
			);
		?></div>
		
		
		
		<h2>md5() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(
				md5('apple'),
				md5('apple', true)
			);
		?></div>
		
		
		
		<h2>metaphone() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(
				metaphone('programming'),
				metaphone('programmer'),
				metaphone('programming', 5),
				metaphone('programmer', 5)
			);
		?></div>
		
		
		
		<h2>money_format() <span class="badge">4.3+</span></h2>
		<div><?php
			var_dump(
				setlocale(LC_ALL, 'fr_FR'),
//				setlocale(LC_ALL, 'en_US'),
				money_format('%i', 1234.567),
				money_format('%(#10n', 1234.567)
			);
		?></div>
		
		
		
		<h2>nl_langinfo() <span class="badge">4.1+</span></h2>
		
		
		
		<h2>nl2br() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(
				nl2br("Ceci\r\nest\n\rune\nchaine\r"),
				nl2br("Ceci\r\nest\n\rune\nchaine\r", false)
			);
		?></div>
		
		
		
		<h2>number_format() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(number_format(132456.789, 2, ',', ' '));
		?></div>
		
		
		
		<h2>ord() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(ord("\n"));
		?></div>
		
		
		
		<h2>parse_str() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(
				parse_str('first=value&arr[]=foo+bar&arr[]=baz', $output),
				$output
			);
		?></div>
		
		
		
		<h2>print() <span class="badge">4+</span></h2>
		
		
		
		<h2>printf() <span class="badge">4+</span></h2>
		<div><code>@see sprintf()</code></div>
		
		
		
		<h2>quoted_printable_decode() <span class="badge">4+</span> &raquo; imap_qprint()</h2>
		
		
		
		<h2 class="text-danger">quoted_printable_encode() <span class="badge">5.3+</span> &raquo; image_8bit()</h2>
		<div><?php
			var_dump(quoted_printable_encode('Hello World!'));
		?></div>
		
		
		
		<h2>quotemeta() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(quotemeta("Hello world. (can you hear me?)"));
		?></div>
		
		
		
		<h2>rtrim() <span class="badge">4+</span></h2>
		
		
		
		<h2>setlocale() <span class="badge">4+</span></h2>
		<div><?php
			// LC_ALL
			// LC_COLLATE
			// LC_CTYPE
			// LC_MONETARY
			// LC_NUMERIC
			// LC_TIME
			// LC_MESSAGES
		?></div>
		
		
		
		<h2>sha1_file() <span class="badge">4.3+</span></h2>
		<div><?php
			var_dump(
				sha1_file(__FILE__),
				sha1_file(__FILE__, true)
			);
		?></div>
		
		
		
		<h2>sha1() <span class="badge">4.3+</span></h2>
		<div><?php
			var_dump(
				sha1('apple'),
				sha1('apple', true)
			);
		?></div>
		
		
		
		<h2>similar_text() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(
				similar_text('first', 'second', $percent),
				$percent
			);
		?></div>
		
		
		
		<h2>soundex() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(
				soundex('Euler'),	soundex('Ellery'),
				soundex('Gauss'),	soundex('Ghosh')
			);
		?></div>
		
		
		
		<h2>sprintf() <span class="badge">4+</span></h2>
		<div><?php
			$format = 'The %2$s contains %1$04d monkeys';
			var_dump(
				sprintf($format, 5, 'tree')
			);
		?></div>
		
		
		
		<h2>sscanf() <span class="badge">4.0.1+</span></h2>
		<div><?php
			$auth = "24\tLewis Carroll";
			var_dump(
				sscanf($auth, "%d\t%s %s", $id, $first, $last),
				"<author id='$id'>
	<firstname>$first</firstname>
	<surname>$last</surname>
</author>"
			);
		?></div>
		
		
		
		<h2 class="text-danger">str_getcsv() <span class="badge">5.3+</span></h2>
		<div><?php
			// http://php.net/manual/fr/function.str-getcsv.php
		?></div>
		
		
		
		<!--
		<h2>() <span class="badge">4+</span></h2>
		<div><?php
			
		?></div>
		-->
		
		
		
	</div>

<body>
</html>