<?php
session_start();

include('configfile.php');


$customer_name= $_POST['cname'];
$customer_no= $_POST['mobile'];
$customer_email= $_POST['email'];
$customer_msg= $_POST['subject'];

$test=mysqli_query($conn,"INSERT INTO ink_match (userr_name, user_number, user_email,ink_description)
values('$customer_name','$customer_no','$customer_email','$customer_msg')");

if($test==1){
    $_SESSION["SUCC"]= "prateek";
    header('location:ink.php');

}
?>

<?php
$to = "mohitsrai@live.in,info@activprint.in";
$subject = "Active Print, Ink Request.";

$message = "
<html>
<head>
<title>Ink Request found!</title>
</head>
<body>
<h1 style='color : gray;'>Active Print</h1>
<h3 style='color:#9A7035'>$customer_name Tried to contact you!<br></h3>

<b>Name</b> : $customer_name <br>
<b>e-mail</b> : $customer_email <br>
<b>Contact No.</b> : $customer_no <br>
<b>Messege(about ink)</b> : $customer_msg <br>
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