<?php 

require 'header.php';


?>


<!--
require_once 'connection.php';

$query = "INSERT INTO users (username, password, email) VALUES  ('Test', 'Test', 'Test@gmail.com')";
$resultmode = MYSQLI_STORE_RESULT;

mysqli_query($link, $query , $resultmode) or die(mysql_error());
*/
-->


<div id="maincontent" class="container">
	

<div id="login" class="container">
	
	<div id="loginheader" class="row">

	<h1> The True LCS Manager </h1>
	<h4> A PHP Simulation Game made by Gamers for Gamers </h4>


	</div>

	<div id="logininfo" class="row">
	
		<div id="logincredentials" class="col-md-10">
		
		<form method="post" action="loginhandler.php">

			<h1> What is your manager name? </h1>
			<input type="text" name="username">

			<input type="submit" value="Start managing!" name="submit">

		</form>

	<?php 





	?>

		</div>

		<div id="socialmediabuttons" class="col-md-2">
			
			<ul id="iconlist">
				<li> <img src="img/facebook.png"> </li>
				<li> <img src="img/twitter.png"> </li>
				<li> <img src="img/instagram.png"> </li>
			</ul>


		</div>



	</div>



</div>






</div>






<?php


require 'footer.php';

?>