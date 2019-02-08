<?php
$servername = "localhost";
$username = "UseForTest";
$password = "UseforTes";
$dbname = "intsecpbil";


	$pass = $_POST["Password"];
	
	
   	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$check="SELECT * FROM intsecpbil WHERE (Email, Password) = ('$_POST[Email]', '$pass') ";	
	$rs = mysqli_query($conn,$check);
	$data = mysqli_fetch_array($rs, MYSQLI_NUM);
	if($data[0] < 1) {
    echo "Email or Password Wrong";
	}

	else 
	
   
    {
        echo "You have successfully login.";
   
}

	
	
		
		

	$conn->close();

?> 