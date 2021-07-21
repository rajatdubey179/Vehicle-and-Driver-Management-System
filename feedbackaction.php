<?php
  $name= $_POST['name'];
  $q_score = $_POST['quality'];



  $feedback_txt = $_POST['feedback'];

  $conn= mysqli_connect('localhost','root','','vehicle management');
   
  $query ="insert into feedback(name,quality_score, feedback) values('$name','$q_score', '$feedback_txt')";
  $result = mysqli_query($conn, $query);
    include 'navbar.php'; 

       


if($result)
	
	{?>
<html>
<body> 
<center>Feedback registered</div>
<a class="btn btn-success" style="text-align: center" href="index.php">Back</a></body>
</html>
 
<?php

}
else
die("Something terrible happened. Please try again. ");
        

?>