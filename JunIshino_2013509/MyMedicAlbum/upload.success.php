<?php 

// filename: upload.success.php 

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 
"http://www.w3.org/TR/html4/strict.dtd"> 

<html lang="en"> 
    <head> 
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1"> 
         
        <link rel="stylesheet" type="text/css" href="stylesheet.css"> 
         
        <title>Successful upload</title> 
     
    </head> 
     
    <body> 
     
        <div id="Upload"> 
            <h1>File upload</h1> 
            <p>Congratulations! Your file upload was successful</p> 
        </div> 
     
    </body> 

</html> 
<style>
#Upload {
	width: 25em;
	margin: 1em auto;
	padding:0 2em 2em 2em ;
	border:1px solid #bbb;
	color: #333;
	background:#ffd;
	font: 0.9em verdana, sans-serif;
}
			
#Upload h1{
	font: 1.4em bold verdana, sans-serif;
	margin: 0;
	padding:1em 0;
	text-align:center;
}
#Upload label{
	float: left;
	width: 7em;
}
		
#Upload p {
	 clear: both;
}		

.red{
	color:red;
}
</style>