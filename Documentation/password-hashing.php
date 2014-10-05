<?php
	error_reporting(E_ALL);
	ini_set('display_errors', true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Password Hashing - Zend Certification PHP 5.5</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>
			<a href="http://php.net/manual/en/book.password.php" target="_blank">Password Hashing</a>
			<span class="badge">Version</span>
		</h1>
		
		
<?php	$hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq'; ?>

		<h2><code>array</code> password_get_info(<code>string $hash</code>) <span class="badge">5.5+</span></h2>
		<div><?php
			var_dump(
				password_get_info($hash)
			);
		?></div>
		
		
		
		<h2><code>string</code> password_hash(<code>string $password, int $algo [, array $options]</code>) <span class="badge">5.5+</span></h2>
		<div><?php
			var_dump(
				password_hash("rasmuslerdorf", PASSWORD_DEFAULT),
				password_hash("rasmuslerdorf", PASSWORD_BCRYPT, ['cost' => 12]),
				password_hash("rasmuslerdorf", PASSWORD_BCRYPT, ['cost' => 11, 'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)])
				);
		?></div>
		
		
		
		<h2><code>bool</code> password_needs_rehash(<code>string $hash, int $algo [, array $options]</code>) <span class="badge">5.5+</span></h2>
		<div><?php
			var_dump(
				password_needs_rehash($hash, PASSWORD_DEFAULT, ['cost' => 20, 'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)])
			);
		?></div>
		
		
		
		<h2><code>bool</code> password_verify(<code>string $password, string $hash</code>) <span class="badge">5.5+</span></h2>
		<div><?php
			var_dump(
				$hash,
				password_verify('rasmuslerdorf', $hash),
				password_verify('', $hash)
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