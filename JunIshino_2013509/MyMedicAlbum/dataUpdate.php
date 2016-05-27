<?php
  //create a variable to store the type depending on where the data comes from
  $type = $_POST['type'];
  //data from user input
  if($type == 'user'){
      //invoke method to insert data into new row
      userInsert();
  }
  //data from technician input
  else if($type == 'edit'){
      //invoke method to update database
      techInsert();
  }

  

  //function to send technician's answer and information into database
  function techInsert(){
    session_start();
      //If a post has occurred which is that the user clicks the submit button
      if($_POST){
        //Get all information and store the post objects
        $surname = $_POST['sn'];
        //store those post objects into  php variables
        $_SESSION['sn'] =$surname;

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
        $sql = "  UPDATE `personaldetails` SET `sn` = '$surname' WHERE `name` = '".$name."';";
        $sth = $DBH->prepare($sql); 
        $sth->execute();
      }//end if
  }//endFunction
?>