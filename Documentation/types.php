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
			var_dump(<<<END
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
			var_dump(<<<'END'
Hello {$world}!
END
); // Important!!!
		?></div>
		
		
		
	</div>

<body>
</html>