<?php

$serverName = "localhost"; 
$userName = "root"; 
$passWord = "";  
$db = "login";

// Create connection  

$conn = new mysqli($serverName, $userName, $passWord, $db);

// Check connection

if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>