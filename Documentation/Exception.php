<?php
/**
 * @link http://php.net/manual/en/language.exceptions.php
 */

class Exception
{
    protected $message = 'Unknow exception';  // exception message
    private   $string;                        // __toString cache
    protected $code = 0;                      // user defined exception code
    protected $file;                          // source filename of exception
    protected $line;                          // source line of exception
    private   $trace;                         // backtrace
    private   $previous;                      // previous exception if nested exception  PHP 5.3+

    public function __construct($message = null, $code = 0, Exception $previous = null);

    final private function __clone();         // Inhibits cloning of exceptions

    final public function getMessage();       // message of exception
    final public function getCode();          // code of exception
    final public function getFile();          // source filename
    final public function getLine();          // source line
    final public function getTrace();         // an array of the backtrace()
    final public function getPrevious();      // previous exception  PHP 5.3+
    final public function getTraceAsString(); // formatted string of trace

    public function __toString();             // formatted string for display
}

