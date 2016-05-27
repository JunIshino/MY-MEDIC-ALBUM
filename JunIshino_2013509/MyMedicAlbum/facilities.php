<!DOCTYPE html>
<html>
	<head>
		<!-- PHP session to print the user name -->
		<?php
			//start the session to make a new session with in this file
			session_start();
			//print out goodbye message with user's name
			echo 'Log In as: '; 
			//print the username to the screen
			echo $_SESSION['name'];
			echo $_SESSION['sn'];
			
			// if user is not logged in
			if($_SESSION['name'] == ""){
			   // then send them to the index page
			   echo'<script>window.location="index.php";</script>';
			}
		?>
		<!-- CSS Style to cahnge the display  -->
		<style>
			.col{
				color: yellow;
			}
			.outerDiv{
				width:100% ; 
				margin:auto ;
			}
			.innerDiv{
				width : 25% ; 
				height : 327px;
				display : inline-block ; 
			}
		</style>
		<!-- set the name of the page tab -->
		<title>MY MEDIC ALBUM</title> 
		<!-- Logo at the top of the page -->
		<a href="menu.php">
			<p class="col">MENU</p>
				<img src="image/logo.png" />
		</a> 
	</head>
	<!-- Main body of the browser -->
	<body style="background-color:red;" >
		<!-- Style the tag size  -->
		<div style="width:70% ; margin:auto"  >
			<!-- Set the name of the class for CSS and sidplay the Sting  -->
			<h1 class="col">FACILITIES</h1>
		</div>
		<!-- Outer Division tag to holds context of LOCATION AND LANGUAGE-->	
		<div  class="outerDiv" style="display:inline-block;">
			<!-- Inner Division tag to holds context of LOCATION -->
			<div class="innerDiv" style="aline:left">
				<!-- Image with link to send the user to other page-->
				<!-- gps.html page has implemented Google GPS maps API code-->
				<a href="gps.html">
					<!-- Set the image and styling to fix size -->
					<img class="img" style="width : 100% ; height : 160px ;" src="image/gps.jpeg" /> 
					<!-- Set the name of the class for CSS and sidplay the Sting  -->
					<h2 class="col">LOCATION</h2>
				</a>
			</div>
			<!-- Inner Division tag to holds context of LANGUAGE-->
			<div class="innerDiv" style="aline:right "> 
				<!-- Image with link to send the user to pointed URL link --> 					
				<a href="https://translate.google.ie/">
					<!-- Set the image and styling to fix size -->
					<img style="width : 100% ; height : 160px ;" src="image/translation.jpeg" />
					<!-- Set the name of the class for CSS and sidplay the Sting  -->
					<h2 class="col">LANGUAGE</h2>
				</a>
			</div>
		</div>
	</body>
<!-- end of the html code -->
</html>
<!-- PHP: include this pages -->
<?php
	//include the file as footer
	include("footer.php");
?>