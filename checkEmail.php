<?php
session_start();
//$email = $_GET["email"];
$_SESSION["email"] = $email = $_GET["email"];
	require_once("db.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `userdetails` WHERE `email`='".$email."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION["name"] = $row["FName"]." ".$row["MName"]." ".$row["LName"];
		$_SESSION["gen"] = $row["sex"];
         header("Location: email.php");
    }
} else {
     header("Location: resetPWD2.php");
}
$conn->close();
?>