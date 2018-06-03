<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "18php02";
	//Create connetionn
	$conn = new mysqli($servername, $username, $password, $database);

	//Check connection
	if ($conn->connect_error) {
		die("connection failed: ". $conn->connect_error);
		//var_dump();
		//exit;
	}
	$sql = "INSERT INTO users (name, email, phone) VALUES ('Hung', 'hung@gmail.com', '01874223')";
	if ($conn->query($sql)===TRUE) {
		echo "Successfully";
	}
	else{
		echo "Error";
	}
	$conn->close();
?>