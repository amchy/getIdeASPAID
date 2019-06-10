<?php
require_once("db.php");
session_start();
	$code = $_GET["activationCode"];
    $_SESSION["emailReset"]=$email = $_GET["email"];
	
//	echo $_GET["activationCode"];
//	echo $_GET["email"];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM `pwdReset` WHERE `resetCode` = '".$code."'";
	$result = $conn->query($sql);
	$sql2 = "SELECT `id`  FROM `userdetails` WHERE `email` = '".$email."'";
	$result2 = $conn->query($sql2);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			
			if ($result2->num_rows > 0) {
				// output data of each row
				while($row2 = $result2->fetch_assoc()) {
					$_SESSION["resetID"] = row["id"];
					header("Location: newpassword.php");
				}
			}
		}
	} else {
//		echo "0 results";
	}
	$conn->close();


?>