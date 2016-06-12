<?php 

/**
* 
*/
class User { 

  private $_username; 
  private $_password;
  private $_email;
  public $points = 100;
  private $object;
  private $_userid;


  public function __construct($name, $password) { 
  	
	$this->_username = $name; 
	$this->_password = $password;
	  } 

	  public function setUserid($name, $password) {

	  			$link = mysqli_connect("localhost", "root", "", "lcsmanager");

				if (!$link) {
						echo "Error: Unable to connect to MySQL." . PHP_EOL;
					    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
					    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
					    exit;
					}


  				$sql = "SELECT user_id FROM users WHERE username = '$name' AND password = '$password'";
					
				// Runt de Query en stopt resultaat in een variabel		
				$result = mysqli_query($link, $sql);

				// Als er geen resultaat is word er een error gegeven
				if (!$result) {
	    		printf("Error: %s\n", mysqli_error($link));
	    		exit();
				}
				$row = mysqli_fetch_assoc($result);

				$this->_userid = $row["user_id"];	 

	  }

public function showUserid() {
	return $this->_userid;
}


public function buyJemoeki()
	   {
	   	$this->points -= 5;
	   }


  public function showUser() { 
    return $this->_username; 
  }

  public function showPoints() {
  	return $this->points;
  }

  public function setEmail($email) { 
    $this->_email = $email; 
  }

  public function addUser() {

	

  }

  public function saveUser($obj)
  {				

  				$link = mysqli_connect("localhost", "root", "", "lcsmanager");

				if (!$link) {
						echo "Error: Unable to connect to MySQL." . PHP_EOL;
					    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
					    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
					    exit;
					}

				$obj = mysql_real_escape_string($obj); 
			

  				$sql = "UPDATE users SET obj_user = '$obj' WHERE user_id = '$this->_userid' ";
					
				// Runt de Query en stopt resultaat in een variabel		
				$result = mysqli_query($link, $sql);

				// Als er geen resultaat is word er een error gegeven
				if (!$result) {
	    		printf("Error: %s\n", mysqli_error($link));
	    		exit();
				}

				header("Location: index.php");

  }
} 






?>