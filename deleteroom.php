<?php
   $con=mysqli_connect("localhost","root","","dbpp");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   
   $name = $_POST['name'];
   
   mysqli_query($con,"DELETE FROM listofrooms WHERE room_name='$name'");
   mysqli_query($con,"DROP TABLE `room_$name`");
   echo "Done";
      
   mysqli_close($con);
?>