<?php
   $con=mysqli_connect("localhost","root","","dbpp");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
	
   $storeidArray = Array();
   #$storenameArray = Array();
   $result = mysqli_query($con,"SELECT id FROM login");
   while($row = mysqli_fetch_array($result)){
	   $storeidArray[] =  $row['id'];
	   #$storenameArray[] =  $row['name']."  ";
   }
   
   for($i=0;$i<count($storeidArray);$i++){
	echo $storeidArray[$i]."  ";   
   }
   
   #echo "   ";
   
   /*for($i=0;$i<count($storenameArray);$i++){
	echo $storenameArray[$i];   
   }*/
   
   mysqli_close($con);
?>