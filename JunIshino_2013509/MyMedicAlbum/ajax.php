<?php
	//start the session to carry out all information
	session_start();
	//If a post has occurred which is that the user clicks the submit button
	if($_POST){
		//Get the name and date of birth and store them into PHP varibables
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		$_SESSION['name'] = $name;
		$_SESSION['dob'] = $dob;

		//try to connect to Database and catch any error during the process	
		try {
			//address for the database
			$host = 'localhost';
			//the name of the database
			$dbname = 'mymedicalbum';
			//the user name for the account 
			$user = 'root';
			//the password for the account
			$pass = 'root';
			# MySQL with PDO_MYSQL
			$DBH = new PDO ("mysql:host=$host;dbname=$dbname", $user, $pass);
			$DBH = new PDO ("mysql:host=$host;dbname=$dbname", $user, $pass);
		} catch(PDOException $e) {echo 'Error';}

		//named placeholders to give a name to the variable 
		$q = $DBH->prepare("select * from personaldetails where name = :name and dob = :dob LIMIT 1");
		//vinding the value into php place holder
		$q->bindValue(':name', $name);
		$q->bindValue(':dob',  $dob);
		//execute all values
		$q->execute();
		$check = $q->fetch(PDO::FETCH_ASSOC);
		//flagment to check if the data has been passed around
		if($check['id']){
			//print out to the scrren
			echo 'true';
		}//endInnerIf
	} //endOuterIf
?> 