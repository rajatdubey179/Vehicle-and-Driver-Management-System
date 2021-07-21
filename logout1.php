<?php
  $connection= mysqli_connect('localhost','root','','vehicle management');

    session_start();
    //echo $_SESSION['user'];
    session_destroy();
    //echo 'session has destroyed';
   header ("Location: index.php");
?>