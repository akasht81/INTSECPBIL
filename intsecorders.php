<?php
$servername = "localhost";
$username = "ReportAdmin";
$password = "RAdmin9123";
$dbname = "intsecpbil";

if(isset($_POST["Shirts"]) && isset($_POST["Pants"]) && isset($_POST["Trousers"]) && isset($_POST["Ties"]) && isset($_POST["Tshirts"]) && isset($_POST["Quantity"]) && isset($_POST["TPBD"]) && isset($_POST["TPAD"]))
{


    $shirts = $_POST["Shirts"];
	$pants = $_POST["Pants"];
	$trousers = $_POST["Trousers"];
	$ties = $_POST["Ties"];
	$tshirts = $_POST["Tshirts"];
	$quantity = $_POST["Quantity"];
	$tpbd = $_POST["TPBD"];
	$tpad = $_POST["TPAD"];
	
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO intsecorders (Shirts, Pants, Trousers, Ties, Tshirts, Quantity, TPBeforeDiscount, TPAfterDiscount) VALUES ('$shirts','$pants','$trousers','$ties','$tshirts','$quantity','$tpbd','$tpad')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	
	} else {
		echo "Failed " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
?> 