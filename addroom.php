<?php
   $con=mysqli_connect("localhost","root","","dbpp");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   
   $name = $_POST['name'];
   
   mysqli_query($con,"INSERT INTO room (room_name) VALUES (\"$name\")");
   echo "Done";
      
   mysqli_close($con);
?>