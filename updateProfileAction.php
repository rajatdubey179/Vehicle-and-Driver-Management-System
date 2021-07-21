<?php
  $connection= mysqli_connect('localhost','root','','vehicle management');
    session_start();

    $msg="";
 $username= $_SESSION['username'];
echo $username;
    
    if(isset($_POST['submit'])){

        $email=$_POST['email'];
        $password=$_POST['password'];
       
        
         $insert_query="UPDATE `user` SET `email` = '$email', `password` = '$password' WHERE `username`='$username' ";
        
        $res= $connection->query($insert_query);
        
         if($res==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Updated Successfully!',
                                            'success'
                                            );
				          </script>";
            
        }
        else{
            die('unsuccessful' .mysqli_error($connection));
        }
        
        
    }
?>
<!DOCTYPE html>
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
            window.location='index.php'
        }, 1000);
    </script>

</body>
</html>
