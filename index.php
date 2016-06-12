<?php 

require 'header.php';


?>




<div id="maincontent" class="container">
	

<div id="login" class="container">
	
	<div id="loginheader" class="row">

	<h1> The True LCS Manager </h1>
	<h4> A PHP Simulation Game made by Gamers for Gamers </h4>


	</div>

	<div id="logininfo" class="row">
	
		<div id="logincredentials" class="col-md-10">
		
		<form class="col-md-6" method="post" action="loginhandler.php">
			<h1> Log in </h1>

			<label> Username: </label>
			<input type="text" name="username"> <br>

			<label> Password: </label>
			<input type="password" name="password"> <br>

			<br>

			<input type="submit" value="Start managing!" name="loginsubmit">

		</form>

		<form class="col-md-6" method="post" action="register.php">

			<h1> Register </h1>
			<label> Username: </label>
			<input type="text" name="username"> <br>

			<label> Password: </label>
			<input type="password" name="password"> <br>

			<label> Email: </label> <br>
			<input type="text" name="email"> <br>

			<br>

			<input type="submit" value="Register now" name="submit">

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