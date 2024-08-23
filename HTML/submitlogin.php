<?php

   include_once 'login.php';
   
?>

<?php
   
   $emailA = $_POST["email"];
   
   $sql = "insert into login(login_ID,Email)values('','$emailA')";
   
   if(mysqli_query ($conn,$sql)){
	   
	   echo "<script> alert (' Recorded Successfully ')</script>";
	   header("Location:home_page.html");
   }

    else {
		
		echo "<script> alert ('Error In Records')</script>";
		
	}
	
	mysqli_close($conn);


?>