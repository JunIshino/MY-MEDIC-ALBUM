<!-- Using AJAX send data to and retrieve from a server in the background 
	without interfering with the display and behavior of the existing page. -->
<?php
  //create a variable to store the type depending on where the data comes from
  $type = $_POST['type'];
  //data from user input
  if($type == 'user'){
      //invoke method to insert data into new row
      userInsert();
  }
  //data value for updating technician's answer in user page 
  else if($type == 'updatebox'){
    //invoke method to update text box 
    updateBox();
  }
//function to send the data from user input into database
function userInsert(){
	//Start session to continue useing certain value
	session_start();

    //If a post has occurred which is that the user clicks the submit button
    if($_POST ){
    	//stores value into PHP variable
		$name = $_POST['name'];
		$surname = $_POST['sn'];
		$dob = $_POST['dob'];
		$nationality = $_POST['na'];
		$gender = $_POST['gen'];
		$address = $_POST ['add'];
		$phone = $_POST['ph'];
		$email = $_POST ['email'];
		$height = $_POST['ht'];
		$weight = $_POST['wt'];
		$blood = $_POST['bd'];
		$allergy = $_POST['ma'];
		$vaccinations = $_POST['vac'];
	    //store those post session objects into  php variables
	    $_SESSION['name'] = $name;
	    $_SESSION['sn'] =$surname;
	    $_SESSION['dob'] =$dob;
	    $_SESSION['na'] =$nationality; 
	    $_SESSION['gen'] =$gender; 
	    $_SESSION['add'] =$address; 
	    $_SESSION['ph'] =$phone; 
	    $_SESSION['email'] =$email; 
	    $_SESSION['ht'] =$height; 
	    $_SESSION['wt'] =$weight; 
	    $_SESSION['bd'] =$blood; 
	    $_SESSION['ma'] =$allergy; 
	    $_SESSION['vac'] =$vaccinations;  		

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
		$sql = "INSERT INTO `personaldetails` (`name`, `sn`, `dob`, `na`, `gen`, `add`, `ph`, `email`, `ht`, `wt`, `bd`, `ma`, `vac`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);"; 
		//using Prepare statement to execute same statement repeatedly having value of $spl as a parameter
		$sth = $DBH->prepare($sql); 
		//Binding values and parameters for extra security 
		$sth->bindParam(1, $name, PDO::PARAM_INT);
		$sth->bindParam(2, $surname, PDO::PARAM_INT);
		$sth->bindParam(3, $dob, PDO::PARAM_INT);
		$sth->bindParam(4, $nationality, PDO::PARAM_INT);
		$sth->bindParam(5, $gender, PDO::PARAM_INT);
		$sth->bindParam(6, $address, PDO::PARAM_INT);
		$sth->bindParam(7, $phone, PDO::PARAM_INT);
		$sth->bindParam(8, $email, PDO::PARAM_INT);
		$sth->bindParam(9, $height, PDO::PARAM_INT);
		$sth->bindParam(10, $weight, PDO::PARAM_INT);
		$sth->bindParam(11, $blood, PDO::PARAM_INT);
		$sth->bindParam(12, $allergy, PDO::PARAM_INT);
		$sth->bindParam(13, $vaccinations, PDO::PARAM_INT);
		//execute all $sth values
		$sth->execute();
      	//named placeholders to give a name to the variable
      	$q = $DBH->prepare("select * from personaldetails where name = :name and sn = :surname and 
      															dob = :dob and na = :nationality
      															gen = :gender and add = :address 
      															ph = :phone and email = :email 
      															ht = :height and wt = :weight 
      															bd = :blood and ma = :allergy
      															vac= :vaccinations   LIMIT 1");
      	//vinding the value into php place holder
      	$q->bindValue(':name',$name);
      	$q->bindValue(':sn',$surname);
      	$q->bindValue(':dob',$dob);
      	$q->bindValue(':na',$nationality);
      	$q->bindValue(':gen',$gender);
      	$q->bindValue(':add',$address);
      	$q->bindValue(':ph',$phone);
      	$q->bindValue(':email',$email);
      	$q->bindValue(':ht',$height);
      	$q->bindValue(':wt',$weight);
      	$q->bindValue(':bd',$blood);
      	$q->bindValue(':ma',$allergy);
      	$q->bindValue(':vac',$vaccinations);
      	$q->execute();
      	$check = $q->fetch(PDO::FETCH_ASSOC);
	}//enfOuterIf
}//endFunction

//function to send technician's answer and information into database
function updatebox(){
      //If a post has occurred which is that the user clicks the submit button
      if($_POST){
      	$rid=$_POST['id'];
        //Get all information and store the post objects
		$surname = $_POST['sn'];
		$nationality = $_POST['na'];
		$gender = $_POST['gen'];
		$address = $_POST ['add'];
		$phone = $_POST['ph'];
		$email = $_POST ['email'];
		$height = $_POST['ht'];
		$weight = $_POST['wt'];
		$blood = $_POST['bd'];
		$allergy = $_POST['ma'];
		$vaccinations = $_POST['vac'];
        //store those post objects into  php variables	    
        $_SESSION['sn'] =$surname;
	    $_SESSION['na'] =$nationality; 
	    $_SESSION['gen'] =$gender; 
	    $_SESSION['add'] =$address; 
	    $_SESSION['ph'] =$phone; 
	    $_SESSION['email'] =$email; 
	    $_SESSION['ht'] =$height; 
	    $_SESSION['wt'] =$weight; 
	    $_SESSION['bd'] =$blood; 
	    $_SESSION['ma'] =$allergy; 
	    $_SESSION['vac'] =$vaccinations;
	    $_SESSION['id'] =$rid;


        //try to connect to Database and catch any error during the process
        // ------------ send to the database -------------
        try {
          $host = 'localhost';
          $dbname = 'mymedicalbum';
          $user = 'root';
          $pass = 'root';
          # MySQL with PDO_MYSQL
          $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        } 
        catch(PDOException $e) {echo 'Error' . $e;} 
        //updating database where question has been chosen 
        $sql = "  UPDATE `personaldetails` SET `sn` = '$surname' ,`dob` = '$dob',
        							`na` = '$nationality' ,`gen` = '$gender'
        							`add` = '$address' ,`ph` = '$phone',
        							`email` = '$email' ,`ht` = '$height'
        							`wt` = '$weight' ,`bd` = '$blood',
        							`ma` = '$allergy' ,`vac` = '$vaccinations'

        							WHERE `id` = '".$rid."';";
        $sth = $DBH->prepare($sql); 
        $sth->execute();
        
      }//end if
  }//endFunction
?>
