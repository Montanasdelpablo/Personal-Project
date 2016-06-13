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

		<div id="sidebarprofile" class="col-md-6">

		<img src="img/businessman.png">

		
		<div class="row" id="trophylist">
		
		<div id="trophyslot1" class="col-md-4">
			<img src="img/trophies/cup.png">
		</div>

		<div id="trophyslot2" class="col-md-4">
			<img src="img/trophies/hunting-trophy.png">	
		</div>

		<div id="trophyslot3" class="col-md-4">
			<img src="img/trophies/trophy-1.png">
		</div>

		</div>
		

		<button type="button"> My throphies </button>
		</div>
		

		<div id="profileinfo" class="col-md-6">
			<p> <strong> USERNAME: </strong> <br>
			<?php 
			
			include_once 'classes/User.php';

			$user = unserialize($_SESSION['user']);

			echo $user->showUser();

			
			
			?>
			</p>

			<p> <strong> MANAGER POINTS: </strong> <br>
			<?php 

			echo $user->showPoints();

			?>
			points.
			</p>



			<p> <strong>RP: </strong> <br>
			<?php 

			echo $user->showRP();;

			?>
			</p>

			<br>

			<button type="button"> Edit profile </button>

			</div>
	</div>


	<div id="navigationbar" class="row">
	
	<ul id="navigationlist" class="col-md-10">
		<strong> <li> <a href="main.php"> Home </a> </li> </strong>
		<strong><li> <a href="leagues.php"> Start managing </a> </li> </strong>
		<strong> <li> <a href=""> My Profile </a> </li> </strong>
		<strong> <li> <a href=""> Messages  </a> </li> </strong>
		<strong> <li> <a href=""> Help </a> </li> </strong>
		<strong> <li> <a href=""> Contact </a> </li> </strong>
		<strong> <li> <a href="logout.php"> Log out </a> </li> </strong>
	</ul>



	</div>



</div>

<div id="content" class="container">
<p>
<?php




?>

</p>

<div class="row">
	<div class="col-md-12">
		<p class="alert alert-info">
		Welcome to LCS Manager. <br>
		From here you can start managing LCS clubs and simulate the matches online. <br>
		Earn managerpoints and start climbing up the highscore rankings.


		</p>

		<p class="alert alert-info"> 
		You get manager points but also RP which you can spend ingame by for example training different players. <br>
		I have given you 100 RP to start out with, you can earn RP by ending a season and by watching ads.

		</p>

		<p class="alert alert-info"> 
		If you have any questions, feel free to contact me. You can send me a message through contact, where you can also find my email.
		</p>

		<p class="alert alert-success"> 
		Here on the left you can see your profile, when you edit your profile you will be taken to the profile editing page. <br>
		On the profile editing page you can add some info, change your profile picture and see the high score ranking.
		</p>

		<p class="alert alert-success"> 
		To start managing clubs, click on "Start managing" in the menu. This will take you to a League selection screen where you can choose the LCS you want to manage a club in. Initial release will consist of EU and NA LCS but further developement will take place in LCK and LPL region.
		</p>

		<p class="alert alert-success"> 
		Through messages you can contact users directly by knowing their username that is being logged in. 
		</p>

		<p class="alert alert-success"> 
		Make sure to log out when you are done playing, so it can save your progress. 
		</p>




	</div>

</div>
	
	


</div>

<?php 








?>

</div>


<?php


require 'footer.php';

?>