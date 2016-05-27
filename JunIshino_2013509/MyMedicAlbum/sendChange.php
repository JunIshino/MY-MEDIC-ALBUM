<!DOCTYPE html >
<html>
	<!-- this is the bog heading -->
	<head>
	<script src="JS/jquery-1.11.3.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script>
	var selected = 1;
	//Function that sends value to Database
	function sendChangesToDatabase(){
		//Alart  STDERR
		alert(selected);

		//Stores a value into JS variable getting value from HTML document by its ID
		var surname = document.getElementById('sn').value;
		var nationality = document.getElementById('na').value;
		var gender = document.getElementById('gen').value;
		var address = document.getElementById('add').value;
		var phone = document.getElementById('ph').value;
		var email = document.getElementById('email').value;
		var height = document.getElementById('ht').value;
		var weight = document.getElementById('wt').value;
		var blood = document.getElementById('bd').value;
		var allergy = document.getElementById('ma').value;
		var vaccinations = document.getElementById('vac').value;
	  
	  	//Post the values to PHP using "profiledetails.php" page
		$.post( "profiledetails.php", {type:"updatebox",rid: selected, sn: surname, 
										na:nationality, gen: gender, add: address, 
										ph: phone, email: email, ht: height, wt: weight, 
										bd: blood, ma: allergy, vac: vaccinations})
		    //inner function that has data and send the user to other page 
			.done(function( data ) {
				//showing user name to popup window
				alert( "Data Loaded: " );
				//Lead the user to other page
				window.location="menu.php";
			});//endInnerFunction
	}//endOuterFunction

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

		<form name="myForm">	
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
					</td><br/>
					<td>
						<input class="box" type="text" id="sn"/>
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
					<td>
						<input class="box" type="text" id="na"/>
					</td>
					<br/>
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
					<!-- Second Column : give the text field to the user for entering the information-->
					<td>
						<input  class="box" type="text" id="gen" />
					</td>  <br/>
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
					<td>
						<input class="box" type="text" id="add"/>
					</td><br/>
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
					<td>
						<input class="box" type="text" id="ph"/>
					</td> <br/>
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
					<td>
						<input class="box" type="text" id="email"/>
					</td> <br/>
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
					<td>
						<input class="box" type="text" id="ht"/>
					</td> <br/>
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
					<td>
						<input class="box" type="text" id="wt"/>
					</td><br/>
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
					<td>
						<input class="box" type="text" id="bd"/>
					</td> <br/>
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
					<td>
						<input class="box" type="text" id="ma"/>
					</td> <br/>
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
					<td>
						<input class="box" type="text" id="vac"/>
					</td> <br/><br/>
				</tr>
				<!-- Last row: Submit Details -->
				<tr>
					<!-- First Column  : no value to align the submit button-->
					<td></td>
					<!-- Second Column : no value to align the submit button-->
					<td></td>
					<!-- Second Column :Calling a method 'validate' to check if the input field has any value-->
					<td><button id="bt" onclick="sendChangesToDatabase();">CHANGE</button></td>
				</tr>
			</table>	
		</form>
	</body>
</html>
<!-- end of html -->
<!-- PHP: include this pages -->
<?php
	//include the file as footer
	include("footer.php");
?>

