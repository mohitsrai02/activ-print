<?php
session_start();
include('configfile.php');

$target_dir = "resumes/";
$target_file = $target_dir . basename($_FILES["resm"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
   move_uploaded_file($_FILES["resm"]["tmp_name"], $target_file);
}

$r = $_SERVER['HTTP_REFERER'].$_SERVER['SERVER_NAME'];
$p = explode("/",$r);
$o = $p[0]."//".$p[2]."/".$target_file;


$customer_name= $_POST['fullname'];
$customer_no= $_POST['mobile'];
$customer_email= $_POST['email'];
$customer_age= $_POST['age'];
$customer_city= $_POST['city'];
$customer_exp= $_POST['exp'];
$customer_start= $_POST['start'];
$customer_experience= $_POST['Experience'];
$customer_position= $_POST['Position'];


var_dump($_POST);
echo '<br>';
var_dump($o);
echo '<br>';
var_dump($customer_position);
echo '<br>';
$test=mysqli_query($conn,"INSERT INTO career_us (user_na,user_no,user_email,user_age,user_city,user_salary,user_start,user_experince,user_resume,user_position)
values('$customer_name','$customer_no','$customer_email','$customer_age','$customer_city','$customer_exp','$customer_start','$customer_experience','$o','$customer_position')");

if($test==1){
 $_SESSION["GAME"]= "prateek1";
$to = "mohitsrai@live.in, info@activprint.in";
$subject = "Active Print Career Request!";

$message = "
<html>
<head>
<title>Career Request found</title>
</head>
<body>
<h1 style='color : gray;'>Active Print</h1>
A new user career request found!<br>

<b>Name</b> : $customer_name <br>
<b>e-mail</b> : $customer_email <br>
<b>Age</b> : $customer_age <br>
<b>City</b> : $customer_city <br>
<b>Phone No.</b> : $customer_no <br>
<b>Experience</b> : $customer_experience<br>
<b>Salary</b> : Expectations: $customer_exp <br>
<b>Resume</b> : $o <br>
<b>Position</b> : $customer_position <br>

</body>
</html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
header('location:career.php');
}
?>
