<?php

   include_once 'payment.php';
   
?>

<?php
   
    $nameA = $_POST["name"];
    $mobileA = $_POST["phone"];
    $emailA = $_POST["email"];
    $streetA = $_POST["street"];
    $cityA = $_POST["mainCity"];
    $cardnA = $_POST["card"];
    $cardhA = $_POST["cardholder"];
    $dateA = $_POST["Expires"];
   
   $sql = "insert into payment(paymentID,Name,Mobile,Email,Street,City,Card_number,Card_holder,Date)values('','$nameA','$mobileA','$emailA','$streetA','$cityA','$cardnA','$cardhA','$dateA')";
   
   if(mysqli_query ($conn,$sql)){
	   
	   echo "<script> alert (' Recorded Successfully ')</script>";
	   header("Location:home_page.html");
   }

    else {
		
		echo "<script> alert ('Error In Records')</script>";
		
	}
	
	mysqli_close($conn);


?>