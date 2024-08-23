<?php
include_once 'inquiry.php';
?>

<?php
	
	$cname = $_POST["field1"];
	$cemail = $_POST["field2"];
	$pnumber = $_POST["field3"];
	$isub = $_POST["field4"];
	$des = $_POST["field5"];
	
	$sql = "insert into inquire(cus_id,name,email,pnumber,subject,message)values('','$cname','$cemail','$pnumber','$isub','$des')";
	
	if(mysqli_query($conn,$sql)){
		echo"<script>alert ('Record inserted successfully!!!')</script>";
		header("Location:home_page.html");
		
	}
	else{
		echo "<script>alert ('Error inserting!!!')</script>";
		
	}
	mysqli_close($conn);

?>