<?php 
/* Application Header */
define('DD', __DIR__);
require DD . '/src/Application.php';


/* Program Start Here */

$customer = new Customer;
$book = new Book;
$booktype = new Booktype;
var_dump($customer);
var_dump($book);
var_dump($booktype);


 ?>