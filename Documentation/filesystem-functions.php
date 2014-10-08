<?php
	error_reporting(E_ALL);
	ini_set('display_errors', true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Filesystem Functions - Zend Certification PHP 5.5</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>
			<a href="http://php.net/manual/en/ref.filesystem.php" target="_blank">Filesystem Functions</a>
			<span class="badge">Version</span>
		</h1>
		
		
		
		<h3><code>string</code> basename(<code>string $path [, string $suffix]</code>) <span class="badge">4+</span></h3>
		<div><?php
			var_dump(
				basename(__FILE__),
				basename(__FILE__, '.php')
			);
		?></div>
		
		
		
		<h3><code>bool</code> chgrp(<code>string $filname, mixed $group</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> chmod(<code>string $filename, int $mode</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> chown(<code>string $filename, mixed $user</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3>clearstatcache(<code>[bool $clear_realpath_cache = false [, string $filename]]</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> copy(<code>string $source, string $dest [, resource $context]</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3>delete &raquo; unlink(), unset()</h3>
		
		
		
		<h3><code>string</code> dirname(<code>string $path</code>) <span class="badge">4+</span></h3>
		<div><?php
			var_dump(dirname(__DIR__));
		?></div>
		
		
		
		<h3><code>float</code> disk_free_space(<code>string $directory</code>) <span class="badge">4.1+</span></h3>
		<div><?php
			var_dump(disk_free_space('.'));
		?></div>
		
		
		
		<h3><code>float</code> disk_total_space(<code>string $directory</code>) <span class="badge">4.1+</span></h3>
		<div><?php
			var_dump(disk_total_space('.'));
		?></div>
		
		
		
		<h3>diskfreespace() &raquo; disk_free_space()</h3>
		
		
		
		<h3><code>bool</code> fclose(<code>resource $handle</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> feof(<code>resource $handle</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> fflush(<code>resource $handle</code>) <span class="badge">4.0.1+</span></h3>
		
		
		
		<h3><code>string</code> fgetc(<code>resource $handle</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>array</code> fgetcsv(<code>resource $handle [, int $length = 0 [, string $delimiter = "," [, string $enclosure = '"' [, string $escape = "\\"]]]]</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>string</code> fgets(<code>resource $handle [, int $length]</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>string</code> fgetss(<code>resource $handle [, int $length [, string $allowble_tags]]</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> file_exists(<code>string $filename</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>string</code> file_get_contents(<code>string $filename [, bool $user_include_path = false [, resource $context [, int $offset = -1 [, int $maxlen]]]]</code>) <span class="badge">4.3+</span></h3>
		
		
		
		<h3><code>int</code> file_put_contents(<code>string $filename, mixed $datas [, int $flags = 0 [, resource $context]]</code>) <span class="badge">5+</span></h3>
		
		
		
		<h3><code>array</code> file(<code>string $filename [, int $flags = 0 [, resource $context]]</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>int</code> fileatime(<code>string $filename</code>) <span class="badge">4+</span></h3>
		<div><?php
			var_dump(date('F d Y H:i:s', fileatime(__FILE__)));
		?></div>
		
		
		
		<h3><code>int</code> filectime(<code>string $filename</code>) <span class="badge">4+</span></h3>
		<div><?php
			var_dump(date('F d Y H:i:s', filectime(__FILE__)));
		?></div>
		
		
		
		<h3><code>int</code> filegroup(<code>string $filename</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>int</code> fileinode(<code>string $filename</code>) <span class="badge">4+</span></h3>
		<div><?php
			var_dump(
				getmyinode(),
				fileinode(__FILE__)
			);
		?></div>
		
		
		
		<h3><code>int</code> filemtime(<code>string $filename</code>) <span class="badge">4+</span></h3>
		<div><?php
			var_dump(date('F d Y H:i:s', filemtime(__FILE__)));
		?></div>
		
		
		
		<h3><code>int</code> fileowner(<code>string $filename</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>int</code> fileperms(<code>string $filename</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>int</code> filesize(<code>string $filename</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>string</code> filetype(<code>string $filename</code>) <span class="badge">4+</span></h3>
		<div><?php
			var_dump(
				filetype(__DIR__),
				filetype(__FILE__)
			);
		?></div>
		
		
		
		<h3><code>bool</code> flock(<code>resource $handle, int $operation [, int &amp;$wouldblock]</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> fnmatch(<code>string $pattern, string $string [, $flags = 0]</code>) <span class="badge">4.3+</span></h3>
		
		
		
		<h3><code>resource</code> fopen(<code>string $filename, string $mode [, bool $use_include_path = false [, resource $context]]</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>int</code> fpassthru(<code>resource $handle</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>int</code> fputcsv(<code>resource $handle, array $fields [, string $delimiter = "," [, string $enclosure = '"']]</code>) <span class="badge">5.1+</span></h3>
		
		
		
		<h3>fputs() &raquo; fwrite()</h3>
		
		
		
		<h3><code>string</code> fread(<code>resource $handle, int $length</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>mixed</code> fscanf(<code>resource $handle, string $format [, mixed &amp;$...]</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>int</code> fseek(<code>resource $handle, int $offset [, int $whence = SEEK_SET]</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>array</code> fread(<code>resource $handle</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>string</code> ftell(<code>resource $handle</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> ftruncate(<code>resource $handle, int $size</code>) <span class="badge">4+</span></h3>
		
		
		<h3><code>string</code> fwrite(<code>resource $handle, string $string [, int $length]</code>) <span class="badge">4+</span></h3>
		
		
		<h3><code>array</code> glob(<code>string $pattern [, int $flags = 0]</code>) <span class="badge">4.3+</span></h3>
		<div><?php
			var_dump(glob('*.php'));
		?></div>
		
		
		
		<h3><code>bool</code> is_dir(<code>string $filename</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> is_executable(<code>string $filename</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> is_file(<code>string $filename</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> is_link(<code>string $filename</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> is_readable(<code>string $filename</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> is_uploaded_file(<code>string $filename</code>) <span class="badge">4.0.3+</span></h3>
		<p><code>$_FILES['userfile']['tmp_name']</code></p>
		
		
		
		<h3><code>bool</code> is_writable(<code>string $filename</code>) <span class="badge">4+</span></h3>
		
		
		
		
		<h3>is_writeable() &raquo; is_writable()</h3>
		
		
		
		<h3><code>bool</code> lchgrp(<code>string $filename, mixed $group</code>) <span class="badge">5.1.2+</span></h3>
		
		
		
		<h3><code>bool</code> lchown(<code>string $filename, mixed $user</code>) <span class="badge">5.1.2+</span></h3>
		
		
		
		<h3><code>bool</code> link(<code>string $target, string $link</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>int</code> linkinfo(<code>string $path</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>array</code> lstat(<code>string $filename</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> mkdir(<code>string $pathname [, int $mode = 0777 [, bool $recursive = false [, resource $context]]]</code>) <span class="badge">4+</span></h3>
		<div><?php
			var_dump(0777);
		?></div>
		
		
		
		<h3><code>bool</code> move_uploaded_file(<code>string $filename, string $destination</code>) <span class="badge">4.0.3+</span></h3>
		
		
		
		<h3><code>array</code> parse_ini_file(<code>string $filename [, bool $process_sections = false [, int $scanner_mode = INI_SCANNER_NORMAL]]</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>array</code> parse_ini_string(<code>string $ini [, bool $process_sections = false [, int $scanner_mode = INI_SCANNER_NORMAL]]</code>) <span class="badge">5.3+</span></h3>
		
		
		
		<h3><code>mixed</code> pathinfo(<code>string $path [, int $options = PATHINFO_DIRNAME | PATHINFO_BASENAME | PATHINFO_EXTENSION | PATHINFO_FILENAME ]</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>int</code> pclose(<code>resource $handle</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>resource</code> popen(<code>string $command, $string $mode</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>int</code> readfile(<code>string $filename [, bool $use_include_path = false [, resource $context]]</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>string</code> readlink(<code>string $path</code>) <span class="badge">4+</span></h3>		
		
		
		
		<h3><code>int</code> realpath_cache_get() <span class="badge">5.3.2+</span></h3>
		<div><?php
			var_dump(realpath_cache_get());
		?></div>
		
		
		
		<h3><code>int</code> realpath_cache_size() <span class="badge">5.3.2+</span></h3>
		
		
		
		<h3><code>string</code> realpath(<code>string $path</code>) <span class="badge">4+</span></h3>
		<div><?php
			var_dump(realpath('..'));
		?></div>
		
		
		
		<h3><code>booll</code> rename(<code>string $oldname, string $newname [, resource $context]</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> rewind(<code>resource $handle</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> rmdir(<code>string $dirname [, resource $context]</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3>set_file_buffer() &raquo; stream_set_write_buffer()</h3>
		
		
		
		<h3><code>array</code> stat(<code>string $filename</code>) <span class="badge">4+</span></h3>
		<div><?php
			var_dump(stat(__FILE__));
		?></div>
		
		
		
		<h3><code>bool</code> symlink(<code>string $target, string $link</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>string</code> tempnam(<code>string $dir, string $prefix</code>) <span class="badge">4+</span></h3>
		<div><?php
			var_dump(tempnam("/tmp", "FOO"));
		?></div>
		
		
		
		<h3><code>resource</code> tmpfile() <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> touch(<code>string $filename [, int $time = time() [, int $atime]]</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>int</code> umask(<code>int $mask</code>) <span class="badge">4+</span></h3>
		
		
		<h3><code>bool</code> unlink(<code>string $filename [, resource $context]</code>) <span class="badge">4+</span></h3>
		
		
		
		<!--
		<h3>() <span class="badge">4+</span></h3>
		<div><?php
		?></div>
		-->
		
		
		
	</div>

<body>
</html>
