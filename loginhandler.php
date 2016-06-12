<?php 


if (isset($_POST['submit'])) {

	require 'classes/User.php';

	$user = new User($_POST['username']);


	if ($user) {
		header("Location: main.php");
	}

	else {
		echo "There was an error, please try again later.";
	}



}




?>