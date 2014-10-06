<?php

// Consider the following code:

session_start();

if(!empty($_REQUEST['id'])
   && !empty($_REQUEST['quantity'])) {
  $id = scrub_id($_REQUEST['id']);
  $quantity = scrub_quantity($_REQUEST['quantity'])
  $_SESSION['cart'][] = array('id' => $id,
                              'quantity' => $quantity)
}

/* .... */

// What potential security hole would this code snippet produce?

/*

1) Cross-Site Scripting Attack
2) There is no security hole in this code						OK
3) Code Injection
4) SQL Injection
5) Cross-Site Request Forgery

*/

