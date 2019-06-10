<?php
$uname = $_GET["uname"];
$pwd = $_GET["fname"];
	require_once("db.php");

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

//$sql = "INSERT INTO `userlogin` (`id`, `username`, `password`, `type`) VALUES (NULL, 'ahmed', '".ppp("am786786@@")."', 'Super Admin');";
//
//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}

$sql = "SELECT * FROM `userlogin` WHERE `username`= '".$uname."' and `password`= '".ppp($pwd)."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["type"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>