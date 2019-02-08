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
	$check="SELECT * FROM intsecpbil WHERE Email = '$_POST[Email]'";
	$rs = mysqli_query($conn,$check);
	$data = mysqli_fetch_array($rs, MYSQLI_NUM);
	if($data[0] > 1) {
    echo "User Already in Exists";
	}

	else
	{
    $newUser="INSERT INTO intsecpbil (Username, Password, Email) VALUES ('$_POST[Username]','$pass','$_POST[Email]')";
    if (mysqli_query($conn,$newUser))
    {
        echo "You are now registered";
    }
    else
    {
        echo "Error adding user in database";
    }
}


	$conn->close();

?> 