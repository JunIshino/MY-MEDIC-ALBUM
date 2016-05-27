<!DOCTYPE html >
<html>
	<!-- this is the bog heading -->
	<head> 
	<!-- Set JavaScript available to activate functions  -->
    <script src="JS/jquery-1.11.3.min.js"></script>
	<script>
	//Function that check user input validation
	function validateForm() {
		//Store value of USER NAME into variable
	    var x = document.forms["myForm"]["n"].value;
	    //Check if user left input box empty
	    if (x == null || x == "") {
	    	//Display ERROR message to the screen
	        alert("First Name must be filled out");
	        //Send failure state back
	        //return false;
	    }
	    //Store value of USER DATE OG BIRTH into variable
	    var y = document.forms["myForm"]["dob"].value;
	    //Check if user left input box empty
	    if (y == null || y == "") {
	    	//Display ERROR message to the screen
	        alert("Date of Birth must be filled out");
	        //Send failure state back
	        //return false;
	    }
	    //User entered both value
	    else{
	    	//Invoke function that sends data to Database
	    	sendToDatabase();
	    	//Send the user to login page
	    	window.location="signin.php"
	    }
	}//end Function
	//Function that sends value to Database
	function sendToDatabase(){
		//Alart  STDERR
		//alert('sending to db...');

		//Stores a value into JS variable getting value from HTML document by its ID
		var name = document.getElementById('n').value;
		var surname = document.getElementById('sn').value;
		var dob = document.getElementById('dob').value;
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
		$.post( "profiledetails.php", {type:"user", name: name, sn: surname, dob: dob, 
										na:nationality, gen: gender, add: address, 
										ph: phone, email: email, ht: height, wt: weight, 
										bd: blood, ma: allergy, vac: vaccinations})
		    //inner function that has data and send the user to other page 
			.done(function( data ) {
				//showing user name to popup window
				alert( "Data Loaded: " + name );
				//Lead the user to other page
				window.location="signin.php";
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

	<!-- set the name of the page tab -->
	<title>MY MEDIC ALBUM</title> 
	<!-- Logo with link at the top of the page and enable the user to back to page index.php-->
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
	      <h1 class="col">PERSONAL DETAILS</h1>
	    </div>
		<form name="myForm">	
			<!-- table tag to add structure to HTML   -->
			<table>
				<!-- First row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">NAME :</td> 
					<!-- Second Column : give the text field to the user for entering the information-->
					<td><input class="box" type="text" id="n"/><br/></td>
				</tr>
				<!-- Second row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">SURNAME : </td>
					<!-- Second Column : give the text field to the user for entering the information-->
					<td><input class="box" type="text" id="sn" /></td><br/>
				</tr>
				<!-- Third row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">DATE OF BIRTH : </td>
					<!-- Second Column : give the text field to the user for entering the information-->
					<td><input class="box" type="date" id="dob" min="1916-12-31" /></td> <br/> 
				</tr>
				<!-- Forthth row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">NATIONALITY :</td>
					<!-- Second Column : give the text field to the user for entering the information-->
					<td><input  class="box" type="text" id="na" /></td> <br/>
				</tr>
				<!-- Fifthth row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">GENDER :</td>
					<!-- Second Column : give the field to select option-->
					<td>
						<!-- First radio button: MALE -->
						<input  type="radio" id="gen" name="gender" value="male"/>Male<br>
						<!-- Second radio button: FEMALE -->
						<input  type="radio" id="gen" name="gender" value="female"/>Female<br>
					</td> <br/>
				</tr>
				<!-- Sixth row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">ADDRESS :</td>
					<!-- Second Column : give the text field to the user for entering the information-->
					<td><input class="box" type="text" id="add" /></td> <br/>
				</tr>
				<!-- Seventh row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">PHONE NUMBER :</td>
					<!-- Second Column : give the text field to the user for entering the information-->
					<td><input class="box" type="text" id="ph" /></td> <br/>
				</tr>
				<!-- Eighth row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">E-MAIL :</td>
					<!-- Second Column : give the text field to the user for entering the information BUT with mail address form-->
					<td><input class="box" type="email" id="email" /></td> <br/>
				</tr>
				<!-- Nineth row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">HRIGHT :</td>
					<!-- Second Column : give the number field to the user for entering the information-->
					<td><input class="box" type="number" id="ht" min="0" step="any"/> cm</td> <br/>
				</tr>
				<!-- Tenth row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">WEIGHT :</td>
					<!-- Second Column : give the number field to the user for entering the information-->
					<td><input class="box" type="number" id="wt" min="0" step="any" /> kg</td> <br/>
				</tr>
				<!-- Elenventh row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">BLOOD TYPE :</td>
					<!-- Second Column : give the text field to the user for entering the information-->
					<td><input class="box" type="text" id="bd" /></td> <br/>
				</tr>
				<!-- Twelveth row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">MY ALLERGIES :</td>
					<!-- Second Column : give the text field to the user for entering the information-->
					<td><input class="box" type="textarea" rows="3" cols="60" id="ma" /></td> <br/>
				</tr>
				<!-- Thirteenth row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">MY VACCINATIONS :</td>
					<!-- Second Column : give the text field to the user for entering the information-->
					<td><input class="box" type="textarea" rows="3" cols="60" id="vac" /></td> <br/><br/>
				</tr>
				<!-- Last row: Submit Details -->
				<tr>
					<!-- First Column  : no value to align the submit button-->
					<td></td>
					<!-- Second Column :Calling a method 'validate' to check if the input field has any value-->
					<td><button style="width:90px;height:40px;font-size:16px ;" onclick="validateForm();">REGISTER</button></td>
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

