<?php
   $con=mysqli_connect("localhost","root","","dbpp");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   
   $id = $_POST['id'];
   
   mysqli_query($con,"DELETE FROM login WHERE id='$id'");
   echo "Done";
      
   mysqli_close($con);
?>