<?php
	$name = $_POST["name"];
	$category = $_POST["category"];
	$price = $_POST["price"];
	$description = $_POST["description"];
	
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
	
	if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
		echo "The file ". basename( $_FILES["fileUpload"]["name"]). " has been uploaded.";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
	echo "<br>";
	
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "mobile";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO product (name, category, price, description, image) VALUES ('$name', '$category', $price, '$description', '$target_file')";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>