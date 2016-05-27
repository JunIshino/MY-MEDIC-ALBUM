<!DOCTYPE html >
<html>
	<!-- this is the bog heading -->
	<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	</script>
	<!-- CSS styling for displaying -->	
	<style>
		.box {
		    display: inline-block;
		    width: 200px;
		    height: 25px;
		    margin: 10px;
		    border: 3px solid black;  
		}
		.col{
			color: yellow;
		}
	</style>
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

		<!-- set the name of the page tab -->
		<title>MY MEDIC ALBUM</title> 
		<!-- Logo with link at the top of the page and enable the user to back to page index.php-->
		<a href="menu.php">
			<!-- Set the name of the class for CSS and sidplay the Sting  -->
			<p class="col">HOME</p>
			<!-- Set the image  -->	
			<img src="image/logo.png" />
		</a> 
	</head>

	<!-- Main body of the browser -->
	<body style="background-color:red;" >

		<!-- OUERT DIV that hols one context -->
		<div style="width:70% ; margin:auto"  >
			<!-- Set the name of the class for CSS and sidplay the Sting  -->
			<h1 class="col">PERSONAL DETAILS</h1>
		</div>

		<!--form name="myForm"-->	
			<!-- table tag to add structure to HTML   -->
			<table>
				<!-- First row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">NAME : 
					</td> 
					<!-- Second Column : USER CANNOT CHANGE NAME-->
					<td>
						<?php
					      //start the session to make a new session with in this file
					      session_start();    
					      //print the username to the screen
					      echo $_SESSION['name'];      
					    ?>
					</td>
				</tr>
				<!-- Second row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">SURNAME : 
					</td>
					<!-- Second Column : give the text field to the user for entering the information-->
					<td>
						<?php
					      //start the session to make a new session with in this file
					      session_start();    
					      //print the username to the screen
					      echo $_SESSION['sn'];      
					    ?>
					</td>
				</tr>
				<!-- Third row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">DATE OF BIRTH : </td>
					<!-- Second Column : USER CANNOT CHANGE -->
					<td>
						<?php
					      //start the session to make a new session with in this file
					      session_start();    
					      //print the username to the screen
					      echo $_SESSION['dob'];      
						?>
					</td>
				</tr>
				<!-- Forthth row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">NATIONALITY :
					</td>
					<!-- Second Column : give the text field to the user for entering the information-->
					<td>
						<?php
					      //start the session to make a new session with in this file
					      session_start();    
					      //print the username to the screen
					      echo $_SESSION['na'];      
						?>
					</td>
				</tr>
				<!-- Fifthth row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">GENDER :
					</td>
					<!-- Second Column : give the field to select option-->
					<td>
						<?php
					      //start the session to make a new session with in this file
					      session_start();    
					      //print the username to the screen
					      echo $_SESSION['gen'];      
						?>
					</td>
				</tr>
				<!-- Sixth row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">ADDRESS :
					</td>
					<!-- Second Column : give the text field to the user for entering the information-->
					<td>
						<?php
					      //start the session to make a new session with in this file
					      session_start();    
					      //print the username to the screen
					      echo $_SESSION['add'];      
						?>
					</td> 
				</tr>
				<!-- Seventh row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">PHONE NUMBER :
					</td>
					<!-- Second Column : give the text field to the user for entering the information-->
					<td>
						<?php
					      //start the session to make a new session with in this file
					      session_start();    
					      //print the username to the screen
					      echo $_SESSION['ph'];      
						?>
					</td>
				</tr>
				<!-- Eighth row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">E-MAIL :
					</td>
					<!-- Second Column : give the text field to the user for entering the information BUT with mail address form-->
					<td>
						<?php
					      //start the session to make a new session with in this file
					      session_start();    
					      //print the username to the screen
					      echo $_SESSION['email'];      
						?>
					</td>
				</tr>
				<!-- Nineth row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">HRIGHT :
					</td>
					<!-- Second Column : give the number field to the user for entering the information-->
					<td>
						<?php
					      //start the session to make a new session with in this file
					      session_start();    
					      //print the username to the screen
					      echo $_SESSION['ht'];      
						?>
					</td>
				</tr>
				<!-- Tenth row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">WEIGHT :
					</td>
					<!-- Second Column : give the number field to the user for entering the information-->
					<td>
						<?php
					      //start the session to make a new session with in this file
					      session_start();    
					      //print the username to the screen
					      echo $_SESSION['wt'];      
						?>
					</td>
				</tr>
				<!-- Elenventh row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">BLOOD TYPE :
					</td>
					<!-- Second Column : give the text field to the user for entering the information-->
					<td>
						<?php
					      //start the session to make a new session with in this file
					      session_start();    
					      //print the username to the screen
					      echo $_SESSION['bd'];      
						?>
					</td>
				</tr>
				<!-- Twelveth row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">MY ALLERGIES :
					</td>
					<!-- Second Column : give the text field to the user for entering the information-->
					<td>
						<?php
					      //start the session to make a new session with in this file
					      session_start();    
					      //print the username to the screen
					      echo $_SESSION['ma'];      
						?>
					</td>
				</tr>
				<!-- Thirteenth row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">MY VACCINATIONS :
					</td>
					<!-- Second Column : give the text field to the user for entering the information-->
					<td>
						<?php
					      //start the session to make a new session with in this file
					      session_start();    
					      //print the username to the screen
					      echo $_SESSION['vac'];      
						?>
					</td>
				</tr>
				<!-- Last row: Submit Details -->
				<tr>
					<!-- First Column  : no value to align the submit button-->
					<td></td>
					<!-- Second Column :Calling a method 'validate' to check if the input field has any value-->
					<td><a href="sendChange.php">UPDATE</a></td>
				</tr>
			</table>	
		<!--/form-->
	</body>
</html>
<!-- end of html -->
<!-- PHP: include this pages -->
<?php
	//include the file as footer
	include("footer.php");
?>

