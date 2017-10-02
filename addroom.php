<?php
   $con=mysqli_connect("localhost","root","","dbpp");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   
   $name = $_POST['name'];
   
   mysqli_query($con,"INSERT INTO listofrooms (room_name) VALUES ('$name')");
   mysqli_query($con,"CREATE TABLE room_$name (device_id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
										  device_name VARCHAR(20) NOT NULL, 
										  status INT(2) DEFAULT 0)");
										 
   echo "Done";
      
   mysqli_close($con);
?>