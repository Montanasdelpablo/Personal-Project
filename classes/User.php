<?php 

/**
* 
*/
class User { 

  private $_username; 
  private $_password;
  private $_email;
  public $points = 100;


  public function __construct($name, $password) { 
  	
	$this->_username = $name; 
	$this->_password = $password;
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

  public function addUser($name, $password, $email) {

	

  }
} 






?>