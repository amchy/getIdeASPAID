<?php
require_once("db.php");
session_start();
$id = $_SESSION["resetID"];
$passwords = $_POST["password"];
$passwords2 = $_POST["password2"];
if($passwords==$passwords2){

function ppp($password){
	$newpassword="g!p@!&";
	for($x=0; $x<=strlen($password); $x++){
		$newpassword = substr_replace($newpassword, '*', 2, 0).substr($password, $x)."!@7%$8*&6@";
		
	}
	return($newpassword);
}

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

$sql = "UPDATE `userlogin` SET `password` = '".ppp($password)."' WHERE `userlogin`.`id` = '".$id."';";

if ($conn->query($sql) === TRUE) {
    echo "Password Changed";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
	header("Location: newpassword2.php");
}


?>