<pre><?php
/**
 * yield $var;
 * foreach ($datas[] as list($a, $b)) { .. }
 *
 * @version PHP5.5+
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
}

foreach (fileLineGenerator(__FILE__) as list($ln, $line)) { // 5.5+
    echo str_pad($ln, 4, ' ', STR_PAD_LEFT);
    echo '  ' . htmlspecialchars($line);
}

?></pre>
