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

$Name = $_POST['fname'];
$Feedback = $_POST['fback'];
$id=$_SESSION['user_id'];
$name=$_SESSION['user_name'];
$sql = "INSERT INTO feedback(user_id,user_name,t_name,feedback) VALUES ($id,'$name','$Name','$Feedback')";
$_SESSION['email']=$Email;
$_SESSION['user_name']=$Name;
if(!mysqli_query($con,$sql))
{
	echo 'not inserted';
}
else
{
		header("refresh:0.1;url=index.php");
}
?>