<?php
// Start the session
session_start();
?>
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
//
//$sql = "SELECT * FROM `userlogin` WHERE `username`= '".$uname."' and `password`= '".ppp($pwd)."'";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//         header("Location: ../admin/index.php");
//    }
//} else {
//    echo "0 results";
//}



		$sqls = "SELECT * FROM `userlogin` WHERE `username`= '".$uname."' and `password`= '".ppp($pwd)."'";
		
		$result = $conn->query($sqls);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$id =  $row["id"];
				
				$sql = "SELECT * FROM `userdetails` WHERE `id`='".$id."';";
				$results = $conn->query($sql);
				if ($results->num_rows > 0) {
					
	// output data of each row
					while($rows = $results->fetch_assoc()) {
					$_SESSION["idR"]=  $rows["id"];
					$_SESSION["namesR"]=  $rows["FName"]." ".$rows["MName"]." ".$rows["LName"];
					$_SESSION["FnameR"]= $rows["FName"];
					$_SESSION["emailR"]=$rows["email"]; 
					
						}
					header("Location: ../admin/index.php");
				} else {
					echo "0 results";
				}
			}
			
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	

$conn->close();
?>