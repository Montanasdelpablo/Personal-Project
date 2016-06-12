<?php


if (isset($_POST['loginsubmit'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username && $password)
	{
				require_once 'connection.php';
				$username = strtolower($username);
				$password = strtolower($password);

				$sql = "SELECT * FROM users WHERE 'username' = '$username' AND 'password' = '$password'";
					
				// Runt de Query en stopt resultaat in een variabel		
				$result = mysqli_query($link, $sql);

				// Als er geen resultaat is word er een error gegeven
				if (!$result) {
	    		printf("Error: %s\n", mysqli_error($link));
	    		exit();
				}	 
				
				if ($result) {
					include_once 'classes/User.php';
					session_start();
					$user = new User($username, $password);
					$_SESSION['user'] = serialize($user);

					session_write_close();

					header("Location: main.php");
				}
			}

	else {
		echo "There was an error validating your credentials.";
	}


}




?>