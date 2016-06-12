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
			<li> <img src=""> </li>
			<li> <img src=""> </li>
			<li> <img src=""> </li>


		</ul>

	</div>

	<div class="row">
		<p> Logged in as:
		<?php 
		
		include_once 'classes/User.php';

		$user = unserialize($_SESSION['user']);

		echo $user->showUser();

		
		?>
		</p>

		<p> You have:
		<?php 

		echo $user->showPoints();

		?>
		points.
		</p>
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




?>

</p>
	
	


</div>

<?php 








?>

</div>


<?php


require 'footer.php';

?>