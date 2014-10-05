<?php

// Consider the following script:

try {
    $dbh = new PDO("sqlite::memory:");
} catch(PDOException $e) {
    print $e->getMessage();
}

$dbh->query("CREATE TABLE foo(id INT)");
$stmt = $dbh->prepare("INSERT INTO foo VALUES(:value)");
$value = null;
$data = array(1,2,3,4,5);
$stmt->bindParam(":value", $value);

/* ?????? */
try {
    foreach($data as $value) {
      /* ????? */
    }
} catch(PDOException $e) {
    /* ??????? */
}

/* ?????? */


// What lines of code need to go into the missing places above in order for this script to function properly and insert the data into the database safely?

/*

1) $dbh->beginTransaction();			1
2) $dbh->commit();						4
3) $stmt->execute();					2
4) $dbh->rollback();					3
5) $dbh->query($stmt);

*/

