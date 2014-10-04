<pre><?php
/**
 * yield $var;
 * foreach ($datas as list($a, $b)) { .. }
 * Generator
 *
 * @version PHP5.5+
 * @see Iterator interface
 */

function fileLineGenerator($file)
{
    if (!$fh = fopen($file, 'r')) { return; }
    $ln = 1;
    while (false !== ($line = fgets($fh))) {
        echo '&gt;';
        yield [$ln, $line]; // 5.5+ ( Short array syntax 5.4+ )
        ++$ln;
    }
    fclose($fh);
  //return; // OK
  //return null; // OK
  //return true; // FATAL ERROR
}

var_dump(
    fileLineGenerator(null),
    fileLineGenerator(null) instanceof Generator // true!
);

foreach (fileLineGenerator(__FILE__) as list($ln, $line)) { // 5.5+
    echo str_pad($ln, 4, ' ', STR_PAD_LEFT);
    echo '  ' . htmlspecialchars($line);
}

$generator = fileLineGenerator(__FILE__);
$generator->rewind(); // OK
var_dump(
    $generator->valid(),
    $generator->key(),
    $generator->next(),
    $generator->key(),
    $generator->current(),
    $generator->next(),
  //$generator->rewind(), // FATAL ERROR => Already begun
    $generator->current()
);



echo '<hr />';



function echoGenerator()
{
    $i = 0;
    while (true) {
        $str = yield; // Classic
      //$str = yield $i; // PARSE ERROR
      //$str = (yield $i); // OK
        var_dump($str);
        $i++;
    }
}

$echo = echoGenerator();
$echo->send('Hello Generator!');
$echo->send('Bye Generator...');



?></pre>