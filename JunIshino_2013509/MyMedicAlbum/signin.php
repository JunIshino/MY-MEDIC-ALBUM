<!DOCTYPE html >
<html>
	<!-- this is the bog heading space-->
	<head>
		<!-- Set JavaScript available to activate functions  -->
	    <script src="JS/jquery-1.11.3.min.js"></script>
		<script>
		//Function that check user input validation
		function validateForm() {
			//STDERR purpose
			//alert('ok')
			//Store value of USER NAME into variable
		    var x = document.forms["myForm"]["n"].value;
		    //Check if user left input box empty
		    if (x == null || x == "") {
		    	//Display ERROR from popup window
		        alert("MISSING NAME");
		    }
		    //Store value of USER DATE OG BIRTH into variable
		    var y = document.forms["myForm"]["dob"].value;
		    //Check if user left input box empty
		    if (y == null || y == "") {
		    	//Display ERROR from popup window
		        alert("ENTER DATE OF BIRTH");
		    }

		    //POST function to send the data to page "ajax.php"
			$.post( "ajax.php", { name: x, dob: y})
				//inner function when its done,,,,
		         .done(function( data ) {
		         	//STDERR alart window
					//alert(data)
					//check it the value was sent some string
					if(data.indexOf('true') != -1){
	 					//alert('inside');
	 					//send the user to MENU page
	 					window.location='menu.php';
	 				}//endIf
	 			});//end.DoneFunction
		}//endFunction
		</script> 
		<!-- CSS styling for displaying -->
		<style>
			.col{
				color: yellow;
			}
			.outerDiv{
				width:100% ; 
				margin:auto ;
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
		<!-- Set String with extra Styling to locate the Strign  -->
		<h1 class="col" style="width:70% ; margin:auto" >LOG IN</h1>
		<!-- Set Division Tag with extra Styling to locate it -->
		<div  class="outerDiv" style="display:inline-block;">
		<!-- FORM TAG to allow user to enter value and send to CGI program  -->	
		<form name="myForm"><br/><br/>
			<table><!--tablle tag to add the structured information -->
				<!-- First row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">NAME : </td>
					<!-- Second Column : give the text field to the user for entering the username -->
					<td><input type="text" name="name" id="n" /></td>
				</tr>
				<!-- Second row -->
				<tr>
					<!-- First Column  : print the message to the user-->
					<td class="col">DATE OF BIRTH : </td>
					<!-- Second Column : give the  field to the user for entering the password -->
					<td><input type="date" id="dob" /><br/></td>
				</tr>
				<!-- Third row -->
				<tr>
					<!-- First Column : no value to align the submit button -->
					<td></td>
					<!-- Second Column :Calling a method 'validateForm' to check if the input field has any value-->
					<td><button onclick="validateForm()">START APP</button><td>
				</tr>
			</table> <br/><br/><!-- Additional breaking more lines -->
		</form >
	</body>
</html>
<!-- PHP: include this pages -->
<?php
	//include the file as footer
	include("footer.php");
?>