<!DOCTYPE html >
<html>
	<!-- this is the bog heading -->
	<head> 
		<!-- set the name of the page tab -->
		<title>MY MEDIC ALBUM</title>
		<!-- linking to the web home page when the logo is clicked -->
		<a href="index.php">
			<!-- source for the logo picture which is in image file -->
			<img src="image/logo.png" />
		</a>
	</head>
	<?php
		//start the session to make a new session with in this file
		session_start();
		//print out goodbye message with user's name
		echo 'SEE YOU ! '; 
		//print the username to the screen
		echo $_SESSION['name'];
		echo $_SESSION['sn'];
		
		// if user is not logged in
		if($_SESSION['name'] == ""){
		   // then send them to the index page
		   echo'<script>window.location="index.php";</script>';
		}
	?>
	<!-- Main body of the browser -->
	<body>
		<!-- this is the big heading -->
		<h1>Closing...</h1>
	</body>
</html>
<!-- end of html -->
<!-- PHP: include this pages -->
<?php
	//kill session to stop carrying information
	session_destroy();
	//include the file as footer
	include("footer.php");
?>
