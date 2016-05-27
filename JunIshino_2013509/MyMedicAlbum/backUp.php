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
  //data value for updating technician's answer in user page 
  else if($type == 'updatebox'){
    //invoke method to update text box 
    updateBox();
  }

  //function to update the users page
  function updateBox(){
    session_start();
      //try/catch to connect to database and for error 
      try {
        $host = 'localhost';
        $dbname = 'test';
        $user = 'root';
        $pass = 'root';
        # MySQL with PDO_MYSQL
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
      } 
      catch(PDOException $e) {echo 'Error' . $e;} 
        //printing Waiting state to the screen
      //if post happen, print state
        echo 'Answering.....';
        //making space between next item
        echo '    ';
        //printing question id
        echo 'Questuin ID:    ';
        $rid = $_POST['id'];
        echo $rid;
        //making space between next item
        echo '    ';'<BR>';

        //get technician's name having question id that was answered
        $techname = $DBH->prepare("select * from user where id = ".$rid);
        $techname->execute();
        $tech = $techname->fetch(PDO::FETCH_ASSOC);
        //printing name to the screen
        echo  'Technician Name: '.$tech['techname'];
        echo '    ';'<BR>';
        //get the data of answer
        $q = $DBH->prepare("select * from user where id = ".$rid);
        $q->execute();
        $check = $q->fetch(PDO::FETCH_ASSOC);
        //printing answer to the screen
        echo 'Answer: '.$check['answer'];
        echo '    ';'<BR>';
        //get time stamp from database
        $q2 = $DBH->prepare("select * from user where id = ".$rid);
        $q2->execute();
        $check2 = $q2->fetch(PDO::FETCH_ASSOC);
        //printing it to the screen
        echo  'Time Sent: '.$check2['timeAns'];
        echo '    ';'<BR>';
         //get time stamp from database
        $q3 = $DBH->prepare("select * from user where id = ".$rid);
        $q3->execute();
        $check3 = $q3->fetch(PDO::FETCH_ASSOC);
        echo ' '.$check3['state'];
  }//endFunction
 
  

  //function to send technician's answer and information into database
  function techInsert(){
    session_start();
      //If a post has occurred which is that the user clicks the submit button
      if($_POST){
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
        $sql = "  UPDATE `personaldetails` SET `sn` = '$surname' ,`na` = '$nationality',
                                              `gen` = '$gender' ,`add` = '$address',
                                              `ph` = '$phone' ,`email` = '$email' , 
                                              `ht` = '$hight' ,`wt` = '$weight'  ,
                                              ` bd` = '$blood' ,`ma` = '$allergy'  ,
                                              ,`vac` = '$vaccinations';
        $sth = $DBH->prepare($sql); 
        $sth->execute();
      }//end if
  }//endFunction
?>