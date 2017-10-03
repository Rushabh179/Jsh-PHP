<?php
   $con=mysqli_connect("localhost","root","","dbpp");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   
   $name = $_POST['name'];
	
   $storeArray = Array();
   $result = mysqli_query($con,"SELECT device_name FROM room_$name");
   while($row = mysqli_fetch_array($result)){
	   $storeArray[] =  $row['device_name'];
   }
   
   for($i=0;$i<count($storeArray);$i++){
	echo $storeArray[$i]."  ";   
   }
   
   mysqli_close($con);
?>