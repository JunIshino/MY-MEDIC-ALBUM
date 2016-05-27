
      //variable to store selected question id
      var recordId = 0;
      var boolState;
      //function to load the page with technician answers
      function updatePage(){
        //display the updated data in the space by id of result having parameters of id and its type of function.
        $( "#result" ).load( "pageb.php", { id: recordId, type:"updatebox" }, function() {

        });
      }//end function

      //calling method to send data to database
      function sendToDatabase(){
        //get vale that has been stored into html valiable 'id:usernamme',
        //stores it into java script variable 'username'
        var username = document.getElementById('username').value;
        //get vale that has been stored into html valiable 'question',
        //stores it into java script variable 'question'
        var question = document.getElementById('question').value;

        alert(username);
        alert(question);
        //post JS variable to "pageb.php" having data as arguments
        $.post( "pageb.php", { type: "user", username:username, question:question, time:time , state:state}).done(function( data ) {
            //show alart window that shows data that has been sent
            alert( "Data Loaded: " + data );
            //stores data into variable id of recordID 
            recordId = data;
            boolState= state;
            //set refreshing the page every 3 seconds
            setInterval(updatePage,3000);
          });
        }//end function

      //using jQuery function to keep the question form hidden until user enters their name
      $(document).ready(function(){
        //function is excecuted when 'id:login' is pressed 
        $("#login").click(function(){
          //panel of question form is now shown 
          $("#panel").slideDown("slow");
          //hide username space 
          $("#flip").hide("slow");
          //show another panel for getting answer space
          $("#panel2").slideDown("slow");
        });
      });

      //function to get current time
      function getTime() {
        //create a new time set
        time = new Date();
        //store the time into js variable time to send it to sql
        document.getElementById("showTime").innerHTML = time;
      }//end function

      //function to set the boolean state
      function showState() {
        //1=waiting 0=answered
        state = 1;
        //store the state into js variable state and send it to sql
        document.getElementById("state").value =state;
      }//end function

      //function to show the state to the screen
      $(document).ready(function(){
        //if bottun id of wait is pressed then
        $("#wait").click(function(){
          //if the state is not 0
          

          if(boolState != 0){
            //append the word to the space name given showflag
            $("#showFlag").append(" <b>WAITING</b>");
          }//endif
          else{
            $("#showFlag2").append(" <b>ANSWERED</b>");
          }

          // $("#showFlag").append(" <b>WAITING</b>");

        //hide submit buttum in order to avoid multiple times for clicking
        $("#wait").hide("slow");
        });
      });//end function

      // $("#result").onChange(function(){
      //   $("#showFlag2").append(" <b>ANSWERED</b>");
      // });