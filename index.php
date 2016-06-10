<?php 

require 'header.php'

require_once 'connection.php';

$query = "INSERT INTO users (username, password, email) VALUES  ('Test', 'Test', 'Test@gmail.com')";
$resultmode = MYSQLI_STORE_RESULT;

mysqli_query($link, $query , $resultmode) or die(mysql_error());


require 'footer.php'

?>