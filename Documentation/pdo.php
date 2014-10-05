<?php
	error_reporting(E_ALL);
	ini_set('display_errors', true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>PDO PHP Data Objetcs - Zend Certification PHP 5.5</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>
			<a href="http://php.net/manual/en/book.pdo.php" target="_blank">PDO PHP Data Objetcs</a>
			<span class="badge">Version</span>
		</h1>
		
		
		
		<pre>
try {
    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
    foreach ($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error !: " . $e->getMessage() . "\n";
    die();
}
</pre>
		
		
		
		<h2>Class PDO <span class="badge">5.1+</span></h2>
		<pre>
PDO {
	public __construct(string $dns [, string $username [, string $password [, array $options]]])
	public bool beginTransaction()
	public bool commit()
	public bool errorCode()
	public mixed errorInfo()
	public int exec(string $statement)
	public mixed getAttribute(int $attribute)
	public static array getAvailableDrivers()
	<strong class="text-danger">public bool inTransaction() // PHP 5.3.3+</strong>
	public string lastInserId([string $name = null])
	public PDOStatement prepare(string $statement [, array $driver_options = array()])
	public string quote(string $string [, int $parameter_type = PDO::PARAM_STR])
	public bool rollBack()
	public bool setAttribute(int $attribute, $mixed $value)
}
</pre>
		
		
		
		<h2>Class PDOStatement <span class="badge">5.1+</span></h2>
		<pre>
PDOStatement implments Traversable {
	readonly string $queryString;
	
	public bool bindColumn(mixed $column, mixed &amp;$param [, int $type [, int $maxlen [, mixed $driverdata]]])
	public bool bindParam(mixed $parameter, mixed &amp;$variable [, int $data_type = PDO::PARAM_STR [, int $length [, mixed $driver_options]]])
	public bool bindValue(mixed $parameter, mixed $value [, int $data_type = PDO::PARAM_STR])
	public bool closeCursor()
	public bool int columnCount()
	public void debugDumpParams()
	public string errorCode()
	public array errorInfo()
	public bool execute([arrat $input_parameters])
	public mixed fetch([int $fetch_style [, int $cursor_orientation = PDO::FETCH_ORI_NEXT [, int $cursor_offset = 0]]])
	public array fetchAll([int $fetch_style [, mixed $fetch_argument [, array $ctor_args = array()]]])
	public string fetchColumn([int $column_number = 0])
	public mixed fetchObject([string $class_name = 'stdClass' [, array $ctor_args]])
	public mixed getAttribute(int $attribute)
	public array getColumnMeta(int $column)
	public bool nextRowset()
	public int rowCount()
	public bool setAttribute(int $attribute, mixed $value)
	public bool setFetchMode(int $mode)
}
</pre>
		
		
		
		<h2>Class PDOException <span class="badge">5.1+</span></h2>
		<pre>
PDOException extends RuntimeException {
	public array $errorInfo;
	protected $string $code;
	
	protected string $message;
	protected int $code;
	protected string $file;
	protected int $line;
	
	final public string Exception::getMessage()
	<strong class="text-danger">final public Exception Exception::getPrevious() // PHP 5.3+</strong>
	final public mixed Exception::getCode()
	final public string Exception::getFile()
	final public int Exception::getLine()
	final public array Exception::getTrace()
	final public string Exception::getTraceAsString()
	public string Exception::__toString()
	final public void Exception::__clone()
}
</pre>
		
		
		
		<!--
		<h2>() <span class="badge">4+</span></h2>
		<div><?php
			var_dump();
		?></div>
		-->
		
		
		
	</div>

<body>
</html>