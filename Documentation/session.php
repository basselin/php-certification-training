<?php
	error_reporting(E_ALL);
	ini_set('display_errors', true);
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Session Handling - Zend Certification PHP 5.5</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>
			<a href="http://php.net/manual/en/book.session.php" target="_blank">Session Handling</a>
			<span class="badge">Version</span>
		</h1>
		
		
		
		<h2><code>int</code> session_cache_expire(<code>[string $new_cache_expire]</code>) <span class="badge">4.2+</span></h2>
		
		
		
		<h2><code>string</code> session_cache_limiter(<code>[string $cache_limiter]</code>) <span class="badge">4.0.3+</span></h2>
		
		
		
		<h2>session_commit() <span class="badge">4.0.3+</span> &raquo; session_write_close()</h2>
		
		
		
		<h2><code>bool</code> session_decode(<code>string $data</code>) <span class="badge">4+</span></h2>
		
		
		
		<h2><code>bool</code> session_destroy() <span class="badge">4+</span></h2>
		
		
		
		<h2><code>string</code> session_encode() <span class="badge">4+</span></h2>
		
		
		
		<h2><code>array</code> session_get_cookie_params() <span class="badge">4+</span></h2>
		<div><?php
			var_dump(session_get_cookie_params());
		?></div>
		
		
		
		<h2><code>string</code> session_id(<code>[string $id]</code>) <span class="badge">4+</span></h2>
		
		
		
		<h2><del>session_is_registered()</del> <span class="badge">5.3-</span></h2>
		
		
		
		<h2><code>string</code> session_module_name(<code>[string $module]</code>) <span class="badge">4+</span></h2>
		
		
		
		<h2><code>string</code> session_name(<code>[string $name]</code>) <span class="badge">4+</span></h2>
		
		
		
		<h2><code>bool</code> session_regenerate_id(<code>[bool $delete_old_session = false]</code>) <span class="badge">4.3.2+</span></h2>
		
		
		
		<h2 class="text-danger">session_register_shutdown() <span class="badge">5.4+</span></h2>
		
		
		
		<h2><del>session_register()</del> <span class="badge">5.3-</span></h2>
		
		
		
		<h2><code>string</code> session_save_path(<code>[string $path]</code>) <span class="badge">4+</span></h2>
		
		
		
		<h2>session_set_cookie_params(<code>int $lifetime [, string $path [, string $domain [, bool $secure = false [, bool $httponly = false ]]]]</code>) <span class="badge">4+</span></h2>
		
		
		
		<h2><code>bool</code> session_set_save_handler(<code>callable $open, callable $close, callable $read, callable $write, callable $destroy, callable $gc [, callable $create_sid ]</code>) <span class="badge">4+</span></h2>
		<h2 class="text-danger"><code>bool</code> session_set_save_handler(<code>SessionHandlerInterface $sessionhandler [, bool $register_shutdown = true ]</code>) <span class="badge">5.4+</span></h2>
		<pre>
interface SessionHandlerInterface {
	abstract public bool close ( void )
	abstract public bool destroy ( string $session_id )
	abstract public bool gc ( string $maxlifetime )
	abstract public bool open ( string $save_path , string $name )
	abstract public string read ( string $session_id )
	abstract public bool write ( string $session_id , string $session_data )
}

class SessionHandler implements SessionHandlerInterface {
	public bool close ( void )
	<strong class="text-danger">public string create_sid ( void ) // PHP 5.5.1+</strong>
	public bool destroy ( string $session_id )
	public bool gc ( int $maxlifetime )
	public bool open ( string $save_path , string $session_id )
	public string read ( string $session_id )
	public bool write ( string $session_id , string $session_data )
}
</pre>
		
		
		
		<h2><code>bool</code> session_start() <span class="badge">4+</span></h2>
		
		
		
		<h2 class="text-danger"><code>int</code> session_status() <span class="badge">5.4+</span></h2>
		<p>
			<code>PHP_SESSION_DISABLED</code>,
			<code>PHP_SESSION_NONE</code>,
			<code>PHP_SESSION_ACTIVE</code>
		</p>
		
		
		
		<h2><del>session_unregister()</del> <span class="badge">5.3-</span></h2>
		<div>
			<code>unset($_SESSION['key']);</code>
		</div>
		
		
		
		<h2>session_unset() <span class="badge">4+</span></h2>
		
		
		
		<h2>session_write_clode() <span class="badge">4.0.4+</span></h2>
		
		
		
		<!--
		<h2>() <span class="badge">4+</span></h2>
		<div><?php
			var_dump();
		?></div>
		-->
		
		
		
	</div>

<body>
</html>