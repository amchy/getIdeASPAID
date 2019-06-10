<?php
session_start();
require_once("db.php");

function reSetPassword($length = 100) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$resetPWD = reSetPassword();
$dt = new DateTime('now');
$date = $dt->format('Y-m-d H:i:s');

$email = $_SESSION["email"];
$name = $_SESSION["name"];
$gen = $_SESSION["gen"];

if(strcasecmp($gen, 'Male')==0){
	$name = "Mr. ".$name;
}else {
	$name = "Ms. ".$name;
}



$to = "To: ".$email."";
$subject = "Password Reset link GIPaid";

$message = "
<html>
<head>
<title>Get your idea paid</title>
</head>
<body>
<p style=\"color: #FF0004;\"><strong><em>Hello ".$name."</em></strong></p><br><br>
<img src=\"http://www.getideaspaid.com/img/GIPaid_logo.png\">
<p>This email is send to you upon the requiest to reset password!<br>
Please click on the button if you want to reset the password.</p>
<table width=\"100%\">
<tr>
<th width=\"50%\">Your Name</th>
<th width=\"50%\">Email</th>
</tr>
<tr>
<td>".$name."</td>
<td>".$email."</td>
</tr>
</table>
<p>This link will be valid for next 24 Hours</p>
<a href=\"www.getideaspaid.com/forgot.php?activationCode=".$resetPWD."&email=".$email."\">Click here</a>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@getideaspaid.com>' . "\r\n";
$headers .= 'Cc: info@getideaspaid.com' . "\r\n";

mail($to,$subject,$message,$headers); 
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "INSERT INTO `pwdReset` (`id`, `resetCode`, `datetime`) VALUES (NULL, '".$resetPWD."', '".$date."');";

if ($conn->query($sql) === TRUE) {
//    header("Location: loginin.php");
} else {
    header("Location: login.php");
}
$conn->close();
?>