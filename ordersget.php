<?php
$servername = "localhost";
$username = "ReportAdmin";
$password = "RAdmin9123";
$dbname = "intsecpbil";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT `Quantity`, `TPAfterDiscount` FROM `intsecorders` ORDER BY ID DESC LIMIT 1";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
    // output data of each row
	
	echo json_encode($result->fetch_assoc());
    
	} else {
		echo "0 results";
	}

	$conn->close();

?>
