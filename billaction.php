<?php
       $connection= mysqli_connect('localhost','root','','vehicle management');

session_start();
    $id= $_GET['id'];
     

   
 $msg="";

    if(isset($_POST['submit'])){
        $username= $_POST['username'];
        $total_km=$_POST['total_km'];
        $oil_cost=$_POST['oil_cost'];
        $extra_cost=$_POST['extra_cost'];
        
       
       
        
    } 
    $query= "SELECT rates FROM vehicle WHERE veh_reg IN(SELECT veh_reg FROM booking WHERE booking_id='$id')";
    $result= mysqli_query($connection,$query);
     $row= mysqli_fetch_assoc($result);

       echo $row['rates'];

        $tc=$total_km*$row['rates']+$oil_cost+$extra_cost;
        $total_cost=$tc;
       

    
    $sql="INSERT INTO tripcost VALUES (NULL,'$id','$username','$total_km','$oil_cost','$extra_cost','$total_cost',0)";


   $salary=0;
   $equipment=0;
     
    $result= mysqli_query($connection,$sql);

    $sql="INSERT INTO bill VALUES(NULL,'$id','$username','$oil_cost','$total_cost')";

    $result= mysqli_query($connection,$sql);


    if($result==true){
        $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Billing Completed!',
                                            'success'
                                            );
				          </script>";
            
        }
        else{
            die('unsuccessful' .mysqli_error($connection));
        }
    
    
?>    


<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    
   
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
    
    <?php echo $msg;
    ?>
    
    <script>
    
        var timer = setTimeout(function() {
            window.location='bookinglist.php'
        }, 1000);
    </script>
</body>
</html>