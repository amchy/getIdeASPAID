<?php
require_once("db.php");

$fname = $_POST["fname"];
$mname = $_POST["mname"];
$lname = $_POST["lname"];
$uname = $_POST["uname"];
$pwd = $_POST["pwd"];
$pwd2 = $_POST["pwd2"];
$email = $_POST["email"];
$sex = $_POST["sex"];
$dob = $_POST["dob"];
$sq = $_POST["sq"];
$sa = $_POST["sa"];

if($pwd!=$pwd2){
	
	header("Location: UserRegistration2.php");
	
}else if($pwd==$pwd2){
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	function ppp($password){
		$newpassword="g!p@!&";
		for($x=0; $x<=strlen($password); $x++){
			$newpassword = substr_replace($newpassword, '*', 2, 0).substr($password, $x)."!@7%$8*&6@";

		}
		return($newpassword);
	}	
	
	$sqlul = "INSERT INTO `userlogin` (`id`, `username`, `password`, `type`) VALUES (NULL, '".$uname."', '".ppp($pwd)."', 'Idea Generator');";

	if ($conn->query($sqlul) === TRUE) {
		$sqls = "SELECT * FROM `userlogin` WHERE `username`= '".$uname."' and `password`= '".ppp($pwd)."'";
		
		$result = $conn->query($sqls);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$id =  $row["id"];
				$sql = "INSERT INTO `userdetails` (`id`, `FName`, `MName`, `LName`, `email`, `sex`, `dob`, `designation`, `lastLogin`, `secrectQuestion`, `secrectAnswer`) VALUES 
	
				('".$id."', '".$fname."', '".$mname."', '".$lname."', '".$email."', '".$sex."', '".$dob."', NULL, '2019-05-24 00:00:00', '".$sq."', '".$sa."');";
				
				if ($conn->query($sql) === TRUE) {
					header("Location: login.php");
				}
			}
		} else {
			echo "0 results";
		}
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
}




?>