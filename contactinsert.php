<?php

$con = mysqli_connect('localhost','root','');
session_start();

if(!$con)
{
	echo 'not connected to database';
}

if(!mysqli_select_db($con,'webuni'))
{
	echo 'database  selected';
}

$Name = $_POST['cname'];
$Email = $_POST['cemail'];
$Subject = $_POST['subject'];
$Message = $_POST['mssg'];


$sql = "INSERT INTO contact(c_id,c_name,c_email,subject,message) VALUES ('$Name','$Email','$Subject','$Message')";

//$_SESSION['email']=$Email;
//$_SESSION['user_name']=$Name;
if(!mysqli_query($con,$sql))
{
	echo 'not inserted';
}
else
{
		if($Usertype=='teacher')
		header("refresh:0.1;url=teacher.php");
		else
		header("refresh:0.1;url=index.php");
}
?>