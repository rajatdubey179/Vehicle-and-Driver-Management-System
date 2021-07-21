<?php 
    session_start();
  $connection= mysqli_connect('localhost','root','','vehicle management');
    
    $msg="";
    if(isset($_POST['submit'])){
        $username=mysqli_real_escape_string($connection,strtolower($_POST['username']));
        
        $password=mysqli_real_escape_string($connection,$_POST['password']); 
        
        $login_query="SELECT * FROM `user` WHERE username='$username' and password='$password'";
        
        $login_res=mysqli_query($connection,$login_query);
        if(mysqli_num_rows($login_res)>0){ 
            $_SESSION['username']=$username;
            header('Location:index.php');
        } 
        else{
             $msg= '<div class="alert alert-danger alert-dismissable" style="margin-top:30px";>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Unsuccessful!</strong> Login Unsuccessful.
                  </div>';
        }
    }

?>
<style>
 @media screen and (max-width: 2500px) {
 .btn 
	  {
		  margin: 0;
		  position: absolute;
		  top: 75%;
		  left: 75%;
		  -ms-transform: translate(50%, -75%);
		  transform: translate(+380%, +0%);    
	 
 }

 @media screen and (max-width: 1200px) {
     
      
	  .btn 
	  {
		  margin: 0;
  position: absolute;
  top: 75%;
  left: 75%;
  -ms-transform: translate(50%, -75%);
  transform: translate(+310%, +0%);    
		  
		  
	  }
 }
 @media screen and (max-width: 1000px) {
	   .img1{
		     display: none;
	        }
	 .btn 
	  {
		  margin: 0;
		  position: absolute;
		  top: 75%;
		  left: 75%;
		  -ms-transform: translate(50%, -75%);
		  transform: translate(+517%, +0%);    
	 
 }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<body> 
  <?php include 'navbar.php'; ?>
       
    <br>
    <div class="container" style=" padding-top:100px" ;> 

     <div class="row" style=" background-color:#222222   ;   ">
       <div class="col-md-3" ><div class="img1"> <img  src="door.jpg" alt="Pineapple" width="550"  height="500"></div></div>
	     <div class="col-md-3"></div>
        <div class="col-md-6" style=" padding-top:90px "> 
          <?php echo $msg; ?>
            <div class="page-header">
                <h1 style="text-align: center ; color: #e13737;">Login</h1>      
          </div> 
            <form class="form-horizontal animated bounce" action="" method="post"> 
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="username" type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <br>
                
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <br> 
                <div class=".text-center">
                <div class="input-group" >
                  <button type="submit" name="submit" class="btn btn-success" style="background-color: #e13737;border-color: #e13737; ";>Log in</button>
                  
                </div>
                 <div>
              </form>  
              <br> 
              <div class="input-group"> 
				<a href="login_admin.php" style="color:#e13737;">Admin Login</a><center>
              </div>
              
        </div> 
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div>
    
</body>
</html>