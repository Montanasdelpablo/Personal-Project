<?php 


/**
* 
*/
class Game
{
	private $_team;
	private $_league;


	public function __construct ($team, $league)
	{
		$this->_team = $team;
		$this->_league = $league;
	}

	public function showGameinfo () {
		echo $this->_team;
		echo "<br>";
		echo $this->_league;
	}


}



?>