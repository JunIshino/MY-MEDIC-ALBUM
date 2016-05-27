<!DOCTYPE html>
<html>    <!-- set the name of the page tab -->
    <title>MY MEDIC ALBUM</title> 
    <!-- Logo with link at the top of the page and enable the user to back to MENU-->
    <a href="menu.php">
      <!-- Set the name of the class for CSS and sidplay the Sting  -->
      <p style="color:yellow">MENU</p><br>
      <!-- Set the image  --> 
      <img src="image/logo.png"/>
    </a> 
  </head>
  <!-- Main body of the browser -->
  <body style="background-color:red;" >
    <!-- Set the name of the class for CSS and sidplay the Sting  -->
    <h1 style="color:yellow">DIARY HISTORY</h1><br>
  <!-- listing of questions and its related data will be shown  -->
      <?php 
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
        
        //SELECTING : list all data of question and its relating infomation from table 'user'
        $sql = "SELECT * from diary ";

        //loop to iterate all colums and its data of each row
        foreach ($DBH->query($sql) as $col) {
          //set the condition to print out ONLY waiting list of item
            //print statement  to print each row to the screen
            echo  '<br>'.'DATE: '.$col['datepicker'].'<br>';
            echo  'NOTES: '.$col['text'].'<br>'.'<br>';
        }//endfor
      ?>
  </body>
</html>
</html>
<!-- end of the html code -->
<!-- PHP: include this pages -->
<?php
  //include the file as footer
  include("footer.php");
?>