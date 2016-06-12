<?php 

require 'header.php';


?>

<div id="maincontent" class="container">

<div id="sidebar" class="container">
		
	<div id="sidebarlogo" class="row">
	
	<h1> LCS Manager </h1>
	
	</div>

	<div id="socialmediaicons" class="row">
		<ul id="iconlist" class="col-md-12">
			<li> <img src="img/facebook.png"> </li>
			<li> <img src="img/twitter.png"> </li>
			<li> <img src="img/instagram.png"> </li>


		</ul>

	</div>


	<div id="navigationbar" class="row">
	
	<ul id="navigationlist" class="col-md-10">
		<li> <a href="main.php"> Home </a> </li>
		<li> <a href="leagues.php"> Start managing </a> </li>
		<li> <a href=""> My Profile </a> </li>
		<li> <a href=""> Messages  </a> </li>
		<li> <a href=""> Help </a> </li>
		<li> <a href=""> Contact </a> </li>
	</ul>

	

	</div>



</div>

<div id="content" class="container">
<p>
<?php

require 'classes/Game.php';

$game = new Game("FCSchalke04", "EULCS");
$game->showGameinfo();



?>

</p>
	
	


</div>

<?php 








?>

</div>


<?php


require 'footer.php';

?>