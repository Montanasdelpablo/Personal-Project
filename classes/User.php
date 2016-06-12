<?php 

/**
* 
*/
class User { 
  private $_username; 

  public function __construct($name) { 
    $this->_username = $name; 
  } 

  public function showUser() { 
    return $this->_username; 
  } 
} 






?>