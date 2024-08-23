<?php
include_once 'config.php';
?>

<?php
	
	$fname = $_POST["field1"];
	$lname = $_POST["field2"];
	$nic = $_POST["field3"];
	$email = $_POST["field4"];
	$password = $_POST["field5"];
	$conpw = $_POST["field6"];
	$parea = $_POST["field7"];
	$pnumber = $_POST["field8"];
	
	$sql = "insert into regcustomer(cus_id,First_name,Last_name,Nic,Email,Password,Conpw,Acode,Pnum)values('','$fname','$lname','$nic','$email','$password','$conpw','$parea','$pnumber')";
	
	if(mysqli_query($conn,$sql)){
		echo"<script>alert ('Record inserted successfully!!!')</script>";
		header("Location:login.html");
	}
	else{
		echo "<script>alert ('Error inserting!!!')</script>";
	}
	mysqli_close($conn);

?>