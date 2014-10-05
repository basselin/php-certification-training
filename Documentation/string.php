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
			/*
			var_dump(
				array_map('str_getcsv', file('data.csv'))
			);
			 */
		?></div>
		
		
		
		<h2>str_ireplace() <span class="badge">5+</span></h2>
		<div><?php
			$str = 'text="%BODY%"';
			var_dump(
				$str,
				str_ireplace('%body%', 'black', $str)
			);
		?></div>
		
		
		
		<h2>str_pad() <span class="badge">4.0.1+</span></h2>
		<div><?php
			$input = 'Alien';
			var_dump(
				str_pad($input, 10), // STR_PAD_RIGHT
				str_pad($input, 10, '_', STR_PAD_LEFT),
				str_pad($input, 10, '-=', STR_PAD_BOTH)
			);
		?></div>
		
		
		
		<h2>str_repeat() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(
				str_repeat('-=-', 3)
			);
		?></div>
		
		
		
		<h2>str_replace() <span class="badge">4+</span></h2>
		<div><?php
			$str     = "Line 1\nLine 2\rLine 3\r\nLine 4\n";
			$order   = array("\r\n", "\n", "\r");
//			$order   = array("\n", "\r", "\r\n"); // WARNING
			$replace = '<br />';
			
			var_dump(
				str_replace($order, $replace, $str),
				str_replace($order, ' ', $str)
			);
		?></div>
		
		
		
		<h2>str_rot13() <span class="badge">4.2+</span></h2>
		<div><?php
			var_dump(
				str_rot13(utf8_decode('Hello PHP 4.2 ! c\'est l\'étè...'))
			);
		?></div>
		
		
		
		<h2>str_shuffle() <span class="badge">4.3+</span></h2>
		<div><?php
			$str = 'abcdef';
			var_dump(
				str_shuffle($str), str_shuffle($str)
			);
		?></div>
		
		
		
		<h2>str_split() <span class="badge">5+</span></h2>
		<div><?php
			$str = 'Hello Friend';
			var_dump(
				str_split($str),
				str_split($str, 5)
			);
		?></div>
		
		
		
		<h2>str_word_count() <span class="badge">4.3+</span></h2>
		<div><?php
			$str = utf8_decode('Hey! voici une bien belle histoire racontée par B3noit.');
			var_dump(
				str_word_count($str), // 10
				str_word_count($str, 1), // 10
				str_word_count($str, 2, '!3') // 9
			);
		?></div>
		
		
		
		<h2>strcasecmp() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(
				strcasecmp('Hello', 'hello'),
				strcasecmp('Pedro', 'hello')
			);
		?></div>
		
		
		
		<h2>strchr() <span class="badge">4+</span> &raquo; strstr()</h2>
		
		
		
		<h2>strcmp() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(
				strcmp('Bonjour', 'Bonjour'),
				strcmp('Bonjour', 'bonjour')
			);
		?></div>
		
		
		
		<h2>strcoll() <span class="badge">4.0.5+</span> <em>Locale strcmp()</em></h2>
		
		
		
		<h2>strcspn() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(
				strcspn('abcd', 'apple'),
				strcspn('abcd', 'banana'),
				strcspn('hello', 'l', 1),
				strcspn('hello', 'world'),
				strcspn('world', 'hello')
			);
		?></div>
		
		
		
		<h2>strip_tags() <span class="badge">4+</span></h2>
		<div><?php
			$html  = "<p>Hello <b class=\"bold\">World<i>!</b></p>\n";
			$html .= "<p><u<u>>Security</u<u>></p>"; // No problem!
			var_dump(
				strip_tags($html),
				strip_tags($html, '<b><i>'),
				strip_tags($html, '<B>')
			);
		?></div>
		
		
		
		<h2>stripcslashes() <span class="badge">4+</span> <em>addcslashes()</em></h2>
		
		
		
		<h2>stripos() <span class="badge">5+</span></h2>
		<div><?php
			$find = 'ab';
			$str1 = 'wxyz';
			$str2 = 'ABCD';
			var_dump(
				stripos($str1, $find),
				stripos($str2, $find),
				stripos($str2, 'a', 2),
				stripos($str2, 'c', 2)
			);
		?></div>
		
		
		
		<h2>stripslashes() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(
				stripslashes("C\'est magnifique!")
			);
		?></div>
		
		
		<h2 class="text-danger">stristr() <span class="badge">4+</span></h2>
		<div><?php
			$email = 'USER@DOMAIN.com';
			var_dump(
				$email,
				stristr($email, 'e'),
				stristr($email, 'e', true) // PHP 5.3+
			);
		?></div>
		
		
		<h2>strlen() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(
				strlen('count'), // 5
				count('count'), // 1
				count(str_split('count')) // 5
			);
		?></div>
		
		
		
		<h2>strnatcasecmp() <span class="badge">4+</span> <em>strcasecmp()</em></h2>
		
		
		
		<h2>strcasecmp() <span class="badge">4+</span> <em>strcmp()</em></h2>
		
		
		
		<h2>strcasecmp() <span class="badge">4+</span> <em>strcmp()</em></h2>
		
		
		
		<h2>strncasecmp() <span class="badge">4+</span> <em>strncmp()</em></h2>
		
		
		
		<h2>strncmp() <span class="badge">4+</span></h2>
		
		
		
		<h2>strpbrk() <span class="badge">5+</span></h2>
		<div><?php
			$str = 'This is a Simple text.';
			var_dump(
				$str,
				strpbrk($str, 'mi'),
				strpbrk($str, 'S')
			);
		?></div>
		
		
		
		<h2>strpos() <span class="badge">4+</span></h2>
		<div><?php
			$find = 'ab';
			$str1 = 'wxyz';
			$str2 = 'abcd';
			var_dump(
				strpos($str1, $find),
				strpos($str2, $find),
				strpos($str2, 'a', 2),
				strpos($str2, 'c', 2)
			);
		?></div>
		
		
		
		<h2>strrchr() <span class="badge">4+</span></h2>
		<div><?php
			$path = 'c:/windows/';
			var_dump(
				$path,
				strrchr($path, ':'),
				substr(strrchr($path, ':'), 1)
			);
		?></div>
		
		
		
		<h2>strrev() <span class="badge">4+</span></h2>
		<div><?php
			$str = 'Zend Certification';
			var_dump(
				$str,
				strrev($str)
			);
		?></div>
		
		
		
		<h2>strripos() <span class="badge">5+</span> <em>strrpos()</em></h2>
		
		
		
		<h2>strrpos() <span class="badge">4+</span></h2>
		<div><?php
			$str = 'abcABCabc';
			var_dump(
				strrpos($str, 'b'),
				strrpos($str, 'b', 5),
				strrpos($str, 'b', -5)
			);
		?></div>
		
		
		
		<h2>strspn() <span class="badge">4+</span></h2>
		<div><?php
			$str = '1256 abcdef';
			var_dump(
				$str,
				strspn($str, '123456789'),
				strspn($str, 'abcdefgh ')
			);
		?></div>
		
		
		
		<h2 class="text-danger">strstr() <span class="badge">4+</span></h2>
		<div><?php
			$email = 'user@domain.com';
			var_dump(
				$email,
				strstr($email, '@'),
				strstr($email, '@', true) // 5.3+
			);
		?></div>
		
		
		
		<h2>strtok() <span class="badge">4+</span></h2>
		<div><?php
			$str = '/do/something';
			var_dump(
				strtok($str, '/'),
				strtok('/'),
				strtok('/')
			);
		?></div>
		
		
		
		<h2>strtolower() &amp; strtoupper() <span class="badge">4+</span></h2>
		<div><?php
			$str = utf8_decode('Marie a Été Gentille!');
			var_dump(
				$str,
				strtolower($str),
				strtoupper($str)
			);
		?></div>
		
		
		
		<h2>strtr() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(
				strtr('baab', 'ab', '01'),
				strtr('baab', ['ab' => '01'])
			);
		?></div>
		
		
		
		<h2>substr_compare() <span class="badge">5+</span></h2>
		<div><?php
			var_dump(
				substr_compare("abcde", "bc", 1, 2), // 0
				substr_compare("abcde", "de", -2, 2), // 0
				substr_compare("abcde", "bcg", 1, 2), // 0
				substr_compare("abcde", "BC", 1, 2, true), // 0
				substr_compare("abcde", "bc", 1, 3), // 1
				substr_compare("abcde", "cd", 1, 2) // -1
			);
		?></div>
		
		
		
		<h2>substr_count() <span class="badge">4+</span></h2>
		<div><?php
			$str = 'Ceci est un test';
			var_dump(
				substr_count($str, 'est'), // 2
				substr_count($str, 'est', 6), // 1
				substr_count($str, 6, 4), // 0
				substr_count($str, 8, 10) // 0
			);
		?></div>
		
		
		
		<h2>substr_replace() <span class="badge">4+</span></h2>
		<div><?php
			$str = 'ABCDEFGH:/MNRPQR/';
			var_dump(
				substr_replace($str, 'bob', 0),
				substr_replace($str, 'bob', 0, strlen($str)),
				substr_replace($str, 'bob', 10, -1),
				substr_replace($str, 'bob', -7, -1)
			);
		?></div>
		
		
		
		<h2>substr() <span class="badge">4+</span></h2>
		<div><?php
			$str = 'abcdef';
			var_dump(
				substr($str, 1),
				substr($str, 2),
				substr($str, 3, 2),
				substr($str, -1),
				substr($str, -2),
				substr($str, -3, 2)
			);
		?></div>
		
		
		
		<h2>trim() <span class="badge">4+</span></h2>
		<div><?php
			$str = 'Hello world! ';
			var_dump(
				trim($str),
				trim($str, 'hHle ')
			);
		?></div>
		
		
		
		<h2>ucfirst() <span class="badge">4+</span></h2>
		<div><?php
			$str = 'Bonjour tout le monde';
			var_dump(
				ucfirst($str)
			);
		?></div>
		
		
		
		<h2>ucwords() <span class="badge">4+</span></h2>
		<div><?php
			$str = 'Bonjour tout le monde';
			var_dump(
				ucwords($str)
			);
		?></div>
		
		
		
		<h2>vfprintf() <span class="badge">5+</span></h2>
		
		
		
		<h2>vprintf() <span class="badge">4.1+</span></h2>
		<div><?php
			vprintf("%04d-%02d-%02d", explode('-', '1988-8-1'));
		?></div>
		
		
		
		<h2>vsprintf() <span class="badge">4.1+</span></h2>
		<div><?php
			var_dump(
				vsprintf("%04d-%02d-%02d", explode('-', '1988-8-1'))
			);
		?></div>
		
		
		
		<h2>wordwrap() <span class="badge">4+</span></h2>
		<div><?php
			$str = "Portez ce vieux whisky au juge blond qui fume.";
			var_dump(
				wordwrap($str, 20, "<br />\n")
			);
		?></div>
		
		
		
		<!--
		<h2>() <span class="badge">4+</span></h2>
		<div><?php
			var_dump();
		?></div>
		-->
		
		
		
	</div>

<body>
</html>