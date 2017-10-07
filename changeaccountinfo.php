<?php
   $con=mysqli_connect("localhost","root","","dbpp");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   
   $oldpassword = $_POST['oldpassword'];
   $password = $_POST['password'];
   
   mysqli_query($con,"UPDATE login SET password='$password' WHERE password='$oldpassword'");
										 
   echo "Done";
      
   mysqli_close($con);
?>