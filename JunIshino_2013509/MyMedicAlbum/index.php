<!DOCTYPE html>
<html>
	<head>
	<!-- CSS Style to cahnge the display  -->
	<style>
		.col{
			color: yellow;
		}

		.innerDiv{
			width : 25% ; 
			height : 327px;
			display : inline-block ; 
		}
	</style>
		<!-- set the name of the page tab -->
		<title>MY MEDIC ALBUM</title> 
		<!-- Logo at the top of the page and enable the user to back to page index.php-->
		<a href="index.php">
			<!-- Set the name of the class for CSS and sidplay the Sting  -->
			<p class="col">HOME</p>
				<!-- Set the image  -->
				<img src="image/logo.png" />
		</a> 
	</head>
	<!-- Main body of the browser -->
	<body style="background-color:red;" >
		<!-- Style the tag size  -->
		<div style="width:70% ; margin:auto"  >
			<!-- Set the name of the class for CSS and sidplay the Sting  -->
			<h1 class="col">HOME</h1>
		</div>
		<!-- Set the division tag to aline LEFT side of the line -->
		<div class="innerDiv" style="aline:left"> 
			<!-- Display String -->
			<p class="col">NEW USER</p>
			<!-- Make connection to send user to other page -->
			<a href="register.php">
				<!-- Display images with fixed size -->
				<img class="img" style="width : 100% ; height : 160px ;" src="image/register.jpeg" />
				<!-- Display String --> 
				<h1 class="col">REGISTER</h1>
			</a>
		</div>
		<!-- Set the division tag to aline RIGHT side of the line -->
		<div class="innerDiv" style="aline:right "> 
			<P class="col">USE ACCOUNT</P>
			<!-- Make connection to send user to other page --> 					
			<a href="signin.php">
				<!-- Display images with fixed size -->
				<img style="width : 100% ; height : 160px ;" src="image/signin.jpeg" />
				<!-- Display String --> 
				<h1 class="col">LOG IN</h1>
			</a>
		</div>
	</body>
<!-- end of the html code -->
</html>

<!-- PHP: include this pages -->
<?php
	//include the file as footer
	include("footer.php");
?>