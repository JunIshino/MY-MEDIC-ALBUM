<!DOCTYPE html >
<html>
	<!-- this is the big heading -->
	<head> 
	<!-- CSS Style to cahnge the display  -->
		<style>
			.col{
				color: yellow;
			}
		</style>
		<!-- set the name of the page tab -->
		<title>MY MEDIC ALBUM</title> 
		<!-- Logo at the top of the page and enable the user to back to page index.php-->
		<!--a href="index.php"-->
			<!-- Set the name of the class for CSS and sidplay the Sting  -->
			<!--p class="col">HOME</p-->
				<!-- Set the image  -->
				<img src="image/logo.png" />
		<!--/a--> 
	</head>
	<!-- Main body of the browser -->
	<body style="background-color:red;" class="col" >
		<!-- Style the tag size  -->
		<div style="width:70% ; margin:auto"  >
			<!-- Set the name of the class for CSS and sidplay the Sting  -->
			<h1 >About US</h1>
		</div>
		<!-- this is the second big heading -->
		<h2>MY MEDIC ALBUM</h2>
		<!-- table tag to add structure to HTML   -->
		<table border="20px"><!-- add the border with 50 px as a little design  -->
			<!-- First row -->
			<tr>
				<!-- First Column -->
				<td>SCHOOL NAME </td>
				<!-- Second Column -->
				<td>CCT - Collage of Computing Technology</td>
			</tr>
			<!-- Secomd row -->
			<tr>
				<!-- First Column -->
				<td>ADDRESS</td>
				<!-- Second Column -->
				<td>30 - 34 Westmoreland St., Dublin 2</td>
			</tr>
			<!-- Third row -->
			<tr>
				<!-- First Column -->
				<td>PHONE</td>
				<!-- Second Column -->
				<td>Tel + 353 1 6333444 </td>
			</tr>
			<!-- Fourth row -->
			<tr>
				<!-- First Column -->
				<td>FACULTY</td>
				<!-- Second Column -->
				<td>B.Sc. in Information Technology Year3</td>
			</tr>
			<!-- Fifth row -->
			<tr>
				<!-- First Column -->
				<td>TEAM NAME</td>
				<!-- Second Column -->
				<td>JCJ</td>
			</tr>
			<!-- Sixth row -->
			<tr>
				<!-- First Column -->
				<td>NUMBERS IN THE TEAM</td>
				<!-- Second Column -->
				<td>3</td>
			</tr>
			<!-- Last row -->
			<tr>
				<!-- First Column -->
				<td>ESTABLISHMENT</td>
				<!-- Second Column -->
				<td>31/05/2016</td>
			</tr>
		</table>
	</body>
</html>
<!-- end of html -->
<!-- PHP: include this pages -->
<?php
	//include the file as footer
	include("footer.php");
?>