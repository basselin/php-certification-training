<?php

// Consider the following code snippet:

$query = "INSERT INTO mytable 
          (myinteger, mydouble, myblob, myvarchar)
          VALUES (?, ?, ?, ?)";

$statement = mysqli_prepare($link, $query);
	
if(!$statement)
{
    die(mysqli_error($link));
}
	
/* The variables being bound to by MySQLi
   don't need to exist prior to binding */
mysqli_bind_param($statement, "idbs", $myinteger, $mydouble, $myblob, $myvarchar);
	
/* ???????????? */ 
	
/* execute the query, using the variables as defined. */
	
if(!mysqli_execute($statement))
{
    die(mysqli_error($link));
}

// Assuming this snippet is a smaller part of a correctly written script, what actions must occur in place of the ????? in the above code snippet to insert a row with the following values: 10, 20.2, foo, string ?

/*

1) A transaction must be begun and the variables must be assigned
2) Each value must be assigned prior to calling mysqli_bind_param(), and thus nothing should be done
3) Use mysqli_bind_value() to assign each of the values
4) Assign $myinteger, $mydouble, $myblob, $myvarchar the proper values						http://php.net/manual/en/mysqli-stmt.bind-param.php

*/

