<?php 
require 'classes/User.php';

$user = unserialize($_SESSION['user']);
$dbinput = serialize($user);


$user->saveUser($dbinput);

session_destroy();




?>