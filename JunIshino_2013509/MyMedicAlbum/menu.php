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

		<!-- OUERT DIV that hols one context -->
		<div style="width:70% ; margin:auto"  >
			<!-- Set the name of the class for CSS and sidplay the Sting  -->
			<h1 class="col">MENU</h1>
		</div>

		<!-- Outer Division tag to holds TWO contexts of Menus-->	
		<div class="outerDiv">
			<!-- SEND TO PERSONAL DETAILS PAGE -->
			<div class="innerDiv">
				<!-- Image with link to send the user to other page--> 
				<a href="userData.php">
					<!-- Set the image and styling to fix size -->
					<img style="width : 100% ; height : 160px ;" src="image/info.jpeg" /> 
					<!-- Set the name of the class for CSS and sidplay the Sting  -->
					<h1 class="col">DETAILS</h1>
				</a>
			</div>
			<!-- SEND TO CALENDAR PAGE -->
			<div class="innerDiv"> 
				<!-- Image with link to send the user to other page-->
				<a href="calendar.php">
					<!-- Set the image and styling to fix size -->
					<img style="width : 100% ; height : 160px ;" src="image/cal.jpeg" />
					<!-- Set the name of the class for CSS and sidplay the Sting  -->
					<h1 class="col">CALENDER</h1>
				</a> 
			</div>		
		</div>

		<!-- Outer Division tag to holds TWO contexts of Menus-->
		<div class="outerDiv">
			<!-- SEND TO FACILITIES PAGE -->
			<div class="innerDiv"> 
				<!-- Image with link to send the user to other page-->
				<a href="facilities.php">
					<!-- Set the image and styling to fix size -->
					<img style="width : 100% ; height : 160px ;" src="image/searching.jpeg" />
					<!-- Set the name of the class for CSS and sidplay the Sting  --> 
					<h1 class="col">FACILITIES</h1>
				</a>
			</div>
			<!-- LOGOUT -->
			<div class="innerDiv">
				<!-- Image with link to send the user to other page-->		  					
				<a href="logout.php">
					<!-- Set the image and styling to fix size -->
					<img style="width : 100% ; height : 160px ;" src="image/logout.jpeg" />
					<!-- Set the name of the class for CSS and sidplay the Sting  -->
					<h1 class="col">LOGOUT</h1>
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