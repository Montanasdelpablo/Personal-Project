<?php 

if (isset($_POST['submit'])) {

	

	if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']))
	{
				require_once 'connection.php';
				$username = $_POST['username'];
				$password = $_POST['password'];
				$email = $_POST['email'];
				$username = strtolower($username);
				$password = strtolower($password);
				$email = strtolower($email);

				$query = "INSERT INTO users (username, password, email) VALUES  ('$username', '$password', '$email')";
				$resultmode = MYSQLI_STORE_RESULT;
				mysqli_query($link, $query , $resultmode) or die(mysql_error());


				if ($query) {
					header("Location: index.php");
					echo "You have done it! You made an account.";
				}

				else {
					echo "There was an error validating your credentials.";
				}
	}

	else {
		header("Location: index.php");
		echo "There was an error validating your credentials.";
	}


}


?>