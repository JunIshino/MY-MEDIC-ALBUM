<!DOCTYPE html >
<html lang="en">
	<!-- this is the bog heading -->
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
			// make a note of the current working directory relative to root. 
			$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']); 

			// make a note of the location of the upload handler script 
			$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.processor.php'; 

			// set a max file size for the html upload form 
			$max_file_size = 30000; // size in bytes 

			// now echo the html page
		?> 	
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"> 
     
        <link rel="stylesheet" type="text/css" href="stylesheet.css"> 
		<!-- Link to stylesheet available in JQuery for Calendar frame -->
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<!-- Set JQuery available to activate calendar  -->	
		    	<script src="JS/jquery-1.11.3.min.js"></script>	
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<!-- Set Link to Google api available to activate Calendar  -->
		<script src="https://www.googleapis.com/language/translate/v2?key=AIzaSyA4DATWJhACsNPXzS_ehictM6ZdwtZCo0M&q=hello%20world&source=en&target=de"></script>
		<script>
			//function to invoke DatePicker
			$(function() {
				//Taking HTML document id to set where to show
			    $( "#datepicker" ).datepicker({
			    	//enables month to be changes
					changeMonth: true,
					//enables yeat to be changes
					changeYear: true
		    	});//close inner function
			});//close outer function

		//Function that check user input validation
		function saveForm() {
			//Store value of USER NAME into variable
		    var x = document.forms["myForm"]["datepicker"].value;
		    //Check if user left input box empty
		    if (x == null || x == "") {
		    	//Display ERROR message to the screen
		        alert("Select Date");
		        //Send failure state back
		        //return false;
		    }
		    //Store value of USER DATE OG BIRTH into variable
		    var y = document.forms["myForm"]["text"].value;
		    //Check if user left input box empty
		    if (y == null || y == "") {
		    	//Display ERROR message to the screen
		        alert("Field is Empty");
		        //Send failure state back
		        //return false;
		    }
		    //User entered both value
		    else{
		    	//Invoke function that sends data to Database
		    	sendData();
		    	//Send the user to login page
		    	window.location="menu.php"
		    }
		}//end Function
		//Function that sends value to Database
		function sendData(){
			//Alart  STDERR
			//alert('sending to db...');

			//Stores a value into JS variable getting value from HTML document by its ID
			var datepicker = document.getElementById('datepicker').value;
			var text = document.getElementById('text').value;
		  
		  	//Post the values to PHP using "profiledetails.php" page
			$.post( "diary.php", { datepicker: datepicker, text: text})
			    //inner function that has data and send the user to other page 
				.done(function( data ) {
					//showing user name to popup window
					alert( "Data Loaded: " + name );
					//Lead the user to other page
					window.location="menu.php";
				});//endInnerFunction
		}//endOuterFunction
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
			.box {
			    display: inline-block;
			    width: 400px;
			    height: 100px;
			    margin: 10px;
			     
			}
		</style>
		<!-- set the name of the page tab -->
		<title>MY MEDIC ALBUM</title> 
		<!-- Logo with link at the top of the page and enable the user to back to MENU-->
		<a href="menu.php">
			<!-- Set the name of the class for CSS and sidplay the Sting  -->
			<p class="col">MENU</p>
			<!-- Set the image  -->	
			<img src="image/logo.png"/>
		</a> 
	</head>
	<!-- Main body of the browser -->
	<body style="background-color:red;" >
		<!-- set the division tag with styling it margined -->
		<div style="width:70% ; margin:auto"  >
			<!-- show manu title  -->	
			<h1 class="col">CALENDAR</h1>
		</div>
		<!-- Division tag to holds context -->	
		<div  class="outerDiv" style="display:inline-block;">
						<!-- A form to upload files -->
			<form  class="col" id="Upload" action="<?php echo $uploadHandler ?>" enctype="multipart/form-data" method="post"> 
		        <!-- ANOTHER HEADING -->
		        <h1> WRITE MY DIARY </h1> 
		        <!-- HIDDEN FROM INTERFACE -->
		        <p> 
		            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>"> 
		        </p> 
		        <!-- ROW: CHOOSE FILE -->
		        <tr> 
		        	<!--  Column  : SHOW STRING-->
		            <td><label for="file">IMAGE</label></td> 
		            <!--  Column  : GET FILE-->
		            <td><input id="file" type="file" name="file"></td>  
		        </tr> 
		        <!-- ROW UPLOAD FILE -->       
		        <tr> 
		        	<!--  Column  : SHOW STRING-->
		            <td><label for="submit">UPLOAD</label></td>
		            <!--  Column  : BRING FILE UP-->  
		            <td><input id="submit" type="submit" name="submit" value="UPLOAD"></td> 
		        </tr> 
		    </form> 
			<!-- FORM TAG to allow user to enter value and send to CGI program  -->	
			<form name="myForm"><br/><br/>
				<!--tablle tag to add the structured information -->
				<table>
					<!-- First row -->
					<tr>
						<!-- First Column  : Pick the date -->
						<td class="col">PICK DATE</td>
						<!-- String space to insert the date from Calendar -->
						<td><input type="text" id="datepicker" value="CLICK ME"></td>
					</tr>
					<!-- Second row -->
					<tr>
						<!-- First Column  : Diary insertion-->
						<td class="col">NOTE</td>
						<!-- Second Column : give the text field to the user to write lines -->
						<td><input class="box" type="text" id="text" /></td>
					</tr>
					<!-- Third row -->
					<tr>
					<!--  Column  : no value to align the submit button-->
						<td></td>
						<!-- Second Column :  Calling a method 'saveForm' to check the input value-->
						<td><button onclick="saveForm()">SAVE</button><td>
					</tr>
				</table> <br/><br/><!-- Additional breaking more lines -->
			</form>
		</div>
</html>
<!-- end of the html code -->
<!-- PHP: include this pages -->
<?php
	//include the file as footer
	include("footer.php");
?>