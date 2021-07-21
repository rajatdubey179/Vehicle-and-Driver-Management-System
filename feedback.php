<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
     $connection= mysqli_connect('localhost','root','','vehicle management');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/wickedpicker.min.css">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/wickedpicker.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .navbar-fixed-top.scrolled {
   background-color: ghostwhite;
  transition: background-color 200ms linear;
}    
</style>

<body>
    <?php include 'navbar.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1 style="text-align:center;">Feedback</h1>
                 
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form class="animated bounce" action="feedbackaction.php" method="post">
                   
                    <div class="input-group">
                      <span class="input-group-addon"><b>Name</b></span>
                      <input id="name" type="text" class="form-control" name="name"  required>
                    </div>   
                    <br>                    
                   

				   <div class="input-group">
                       
					  <span class="input-group-addon"><b>Feedback</b></span>  
				<div>
				 
			<div class ="row">	 
          
		    <div class="radio-inline" text-align="left"  float="left">
  			   <img src="bad.png" alt=""  width="100" height="100"> 
    			   <input type="radio" name="quality" value="Bad"> Bad
  		    </div>
			<div class="radio-inline" text-align="left"   float="left">
   			  <img src="neutral.png" alt=""width="100" height="100" > 
  	   		  <input type="radio" name="quality" value="Okay"> Okay
  		     </div>
			 
   	 	 	 <div class="radio-inline" text-align="left"   float="left">
     			  <img src="good.png" alt="" width="100" height="100">
     			  <input type="radio" name="quality" value="Good"> Good
  		     </div>
		    </div>
			</div>
		
			
                    </div>    <br>               
                    <div class="input-group">
					 <span class="input-group-addon"><b>Feedback</b></span>
					    <center>  <textarea name=" feedback" rows="8" cols="40"></textarea><br><br>
                   <input type="submit" name="submit" class="btn btn-success"></center>
                    </div>     
                 </form>
            </div>
            <div class="col-md-3">  <br/></div>
        </div>
    </div>
    
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
</script>  
</body>
</html>