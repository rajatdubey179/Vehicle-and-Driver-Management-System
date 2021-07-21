<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
     $connection= mysqli_connect('localhost','root','','vehicle management');


    $username= $_SESSION['username'];
    //echo $username;
    
    $query= "SELECT  `first_name`, `last_name`, `email` ,'password' FROM `user` WHERE username='$username'";
    $result= mysqli_query($connection,$query);
    
    $row= mysqli_fetch_assoc($result);
    //$name= $row['first_name']." ". $row['last_name'];
   // echo $name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking</title>
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
                <h1 style="text-align:center;">Update Profile</h1>
                 <?php //echo $msg; ?>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form class="animated bounce" action="updateProfileAction.php" method="post">
                   
                    <div class="input-group">
                      <span class="input-group-addon"><b>First Name</b></span>
                      &nbsp&nbsp&nbsp<label><?php echo $row['first_name'];?></label>
                     </div>
                    
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Last Name</b></span>
                       &nbsp&nbsp&nbsp<label><?php echo $row['last_name'];?></label>
                    </div>
                    
                        
                        
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Email</b></span>
                      <input id="email" type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
                    </div>
                <br>                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Username</b></span>
                       &nbsp&nbsp&nbsp<label><?php echo $username; ?></label>
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Password</b></span>
                      <input id="password" type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>">
                    </div>
                    <br>
                    
                   
                    
                    
                    
                    <input type="hidden" name="username" value="<?php echo $username; ?>">
                    
                    <div class="input-group">
                        <input type="submit" name="submit" class="btn btn-success">
                     &nbsp&nbsp&nbsp&nbsp<a class="btn btn-success" style="text-align: center" href="index.php">Back</a>
                    </div>
                     
                    
                </form>
            </div>
            <div class="col-md-3"></div>
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