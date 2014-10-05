<?php

// Consider the following code snippet:

$query = "SELECT first,
            last,
            phone
          FROM contacts
          WHERE first LIKE 'John%'";
	
$statement = mysqli_prepare($link, $query);
mysqli_execute($statement);
	
/* ???? */

while(($result = mysqli_stmt_fetch($statement)))
{
  print "Name: $first $last\n";
  print "Phone: $phone\n\n";
}

// Assuming this code snippet is part of a larger correct application, what must be done in place of the ???? above for the correct output to be displayed?

/*

1) None of the above
2) mysqli_fetch_columns($first, $last, $phone);
3) mysqli_stmt_bind_result($statement, $first, $last, $phone);
4) A while loop, fetching the row and assigning $first, $last, and $phone the proper value				http://php.net/manual/en/mysqli-stmt.bind-result.php

*/

