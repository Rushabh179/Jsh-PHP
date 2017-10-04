<?php
   $con=mysqli_connect("localhost","root","","dbpp");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   
   $name = $_POST['name'];
   $id = $_POST['id'];
   $password = $_POST['password'];
   
   mysqli_query($con,"INSERT INTO login (name,id,password) VALUES ('$name','$id','$password')");
 
   echo "Done";
      
   mysqli_close($con);
?>