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
					

					// Checks to see if serialized object is in db
					// Use object to load main if there is one in db
					require_once 'connection.php';
				
					$sql = "SELECT obj_user FROM 'users' WHERE 'username' = '$username' AND password = '$password'";
					
					// Runt de Query en stopt resultaat in een variabel		
					$result = mysqli_query($link, $sql);

					if (!empty($result)) {
					session_start();
					$result = unserialize($result);
					$_SESSION['user'] = serialize($result);

					session_write_close();

					header("Location: main.php");
					}

					else {
					include_once 'classes/User.php';

					session_start();
					$user = new User($username, $password);
					$userid = $user->setUserid($username, $password);
					$_SESSION['user_id'] = serialize($userid);
					$_SESSION['user'] = serialize($user);


					session_write_close();

					header("Location: main.php");

					}
					// If not then create new object

				}
			}

	else {
		echo "There was an error validating your credentials.";
	}


}




?>