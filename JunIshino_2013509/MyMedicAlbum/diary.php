<?php
	//Start session to continue useing certain value
	session_start();
    //If a post has occurred which is that the user clicks the submit button
    if($_POST){
    	//stores value into PHP variable
		$datepicker = $_POST['datepicker'];
		$text = $_POST['text'];

	    //store those post session objects into  php variables
	    $_SESSION['datepicker'] = $datepicker;
	    $_SESSION['text'] =$text;	

		// ------------ send to the database --------------
		try {
			//host as localhost
			$host = 'localhost';
			//using selected database by MySQL DB name
			$dbname = 'mymedicalbum';
			$user = 'root';
			$pass = 'root';
		 # MySQL with PDO_MYSQL
		 $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
		 } catch(PDOException $e) {echo 'Error';} 
		//inert values into selected table and stores it into PHP variable
		$sql = "INSERT INTO `diary` (`datepicker`, `text`) VALUES (?, ?);"; 
		//using Prepare statement to execute same statement repeatedly having value of $spl as a parameter
		$sth = $DBH->prepare($sql); 
		//Binding values and parameters for extra security 
		$sth->bindParam(1, $datepicker, PDO::PARAM_INT);
		$sth->bindParam(2, $text, PDO::PARAM_INT);

		//execute all $sth values
		$sth->execute();
      	//named placeholders to give a name to the variable
      	$q = $DBH->prepare("select * from diary where datepicker = :datepicker and text = :text  LIMIT 1");
      	//vinding the value into php place holder
      	$q->bindValue(':datepicker',$datepicker);
      	$q->bindValue(':text',$text);
      	$q->execute();
      	$check = $q->fetch(PDO::FETCH_ASSOC);
	}//enfOuterIf
?>
