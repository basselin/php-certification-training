<pre><?php
/**
 * yield $var;
 * foreach ([] as list($a, $b)) { .. }
 *
 * @version PHP5.5+
 */

function fileLineGenerator($file)
{
    if (!$fh = fopen($file, 'r')) { return; }
    $l = 1;
    while (false !== ($line = fgets($fh))) {
        echo '&gt;';
        yield [$l, $line]; // 5.5+ ( Short array syntax 5.4+ )
        ++$l;
    }
    fclose($fh);
}

foreach (fileLineGenerator(__FILE__) as list($ln, $line)) { // 5.5+
    echo str_pad($ln, 4, ' ', STR_PAD_LEFT);
    echo '  ' . htmlspecialchars($line);
}

?></pre>
