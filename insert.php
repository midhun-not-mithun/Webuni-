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

$Name = $_POST['name'];
$Phone=$_POST['contact'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Usertype = $_POST['user_type'];
$sql = "INSERT INTO users(user_name,contact,email,password,user_type) VALUES ('$Name','$Phone','$Email',md5('$Password'),'$Usertype')";
$_SESSION['email']=$Email;
$_SESSION['user_name']=$Name;
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