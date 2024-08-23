<?php

   include_once 'contact.php';
   
?>

<?php
   
   $nameA = $_POST["fullName"];
   $emailA = $_POST["Email"];
   $messageA = $_POST["Message"];
   
   $sql = "insert into contact(contactID,fullname,email,message)values('','$nameA','$emailA','$messageA')";
   
   if(mysqli_query ($conn,$sql)){
	   
	   echo "<script> alert (' Recorded Successfully ')</script>";
	   header("Location:home_page.html");
   }

    else {
		
		echo "<script> alert ('Error In Records')</script>";
		
	}
	
	mysqli_close($conn);


?>