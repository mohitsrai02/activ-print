<?php
session_start();

include('configfile.php');


$name=$_POST["iname"];
$email=$_POST["iemail"];
$mobile=$_POST["imobile"];
$prod=implode(",",$_POST['prod']);
var_dump($prod);
echo "<br>";

$test=mysqli_query($conn,"INSERT INTO interested_in(name,phone,email,product) VALUES ('$name','$mobile','$email','$prod')");

if($test==1){
    $_SESSION["GAME"]= "prateek1";
   header('location:interested.php');
} 
?>


<?php
$to = "mohitsrai@live.in,info@activprint.in";
$subject = "Active Print.";

$message = "
<html>
<head>
<title>Request found!</title>
</head>
<body>
<h1 style='color : gray;'>Active Print</h1>
<h3 style='color:#9A7035'>$customer_name Tried to contact you!<br></h3>

<b>Name</b> : $name <br>
<b>e-mail</b> : $email <br>
<b>Contact No.</b> : $mobile <br>
<b>Products</b> : $prod <br>
</body>
</html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: info@activprint.in' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>