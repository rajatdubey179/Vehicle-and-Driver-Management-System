<?php
     $connection= mysqli_connect('localhost','root','','vehicle management');
    
    session_start();

    $sql= "SELECT * FROM `vehicle`";
    $res=mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Drivers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">  
</head> 
<style>
#background
{
    
    /*background-image: url("texture.jfif");*.
    height: 200%;
    /* Set a specific height */
    min-height: 900px; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover; 
    
}
.container
{

 background:LightGray;
 
}


</style>
<body id="background" > 
  
   <div id="myDiv"style="padding-top:90px;">
     <div >
   <?php include 'navbar.php'; ?>
   <br><br><br>
     
   <div class="container"  >

      <?php
        if(mysqli_num_rows($res)>0){ ?>
    
      <div class="container" >
	  
         <div class="row">
             <div class="col-md-3"></div>
             <div class="col-md-6 foo">
                 <div class="page-header">
                    <h1 class="animated bounceIn" style="text-align: center;"><u>Vehicle List</u></h1>      
                  </div> 
                  <table class="table">
                    <thead>
                        <th><u>Vehicle Picture<u></th>
                        <th> <u>Registration No<u></th>
                       <th> <u>Fixed Rates<u></th>
                    </thead>  

                    <?php while($row=mysqli_fetch_assoc($res)) {  ?>
                    <tbody>
                        <tr>
                            <td><img height="100px"  width="200px" src="vehicle picture/<?php echo $row["veh_photo"]; ?>" alt="dp"></td>

                            <td><a href="busprofile.php?busid=<?php echo $row["veh_id"]; ?>"> <?php echo $row["veh_reg"] ?></a></td>
                            <td><a class="btn btn-success" style="text-align: center" href="#"> <?php echo $row["rates"]; echo '/Km' ?></a>
                        </tr>
                    </tbody> 
                <?php } }?>
                </table>
             </div>
             <div class="col-md-3"></div>
         </div>
          
      </div>  
       </div>
   </div>
    </div> 
    
 <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>
       

   
    
</body>
</html>