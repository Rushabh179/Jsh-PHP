<?php
   $con=mysqli_connect("localhost","root","","dbpp");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
	
   $storeArray = Array();
   $result = mysqli_query($con,"SELECT id FROM login");
   while($row = mysqli_fetch_array($result)){
	   $storeArray[] =  $row['id'];
   }
   
   for($i=0;$i<count($storeArray);$i++){
	echo $storeArray[$i]."^";   
   }
   
   mysqli_close($con);
?>