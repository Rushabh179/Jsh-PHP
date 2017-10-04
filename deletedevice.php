<?php
   $con=mysqli_connect("localhost","root","","dbpp");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   
   $room_name = $_POST['room_name'];   
   $device_name = $_POST['device_name'];
   
   mysqli_query($con,"DELETE FROM `room_$room_name` WHERE device_name='$device_name'");
   echo "Done";
      
   mysqli_close($con);
?>