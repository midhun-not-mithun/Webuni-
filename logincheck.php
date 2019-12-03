<?php
session_start();
include('ded.php');	
$check = $_POST['check'];
$password = $_POST['password'];
$pwd=md5($password);
$Usertype = $_POST['user_type'];
$query="SELECT * FROM users WHERE email = '$check' and password='$pwd' and user_type ='$Usertype'";
$quer="SELECT * FROM users WHERE contact = '$check' and password='$pwd' and user_type ='$Usertype'";


$res = mysqli_query($con, $quer);
$cou=mysqli_num_rows($res);
$result = mysqli_query($con, $query);
$count=mysqli_num_rows($result);



if($count==1 or $cou==1)
{
	$row = mysqli_fetch_array($result);
	$_SESSION['user_id']=$row['user_id'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['user_name'] = $row['user_name'];	
    if($Usertype=='teacher')
    {
		header("refresh:0.1;url=home.php");
    }
	elseif ($Usertype=='student')
	{
	
	
		header("refresh:0.1;url=home1.php");
	}

	else
	{
			header("refresh:0.1;url=index_final.php");
	}
}

else

{
		header("refresh:0.1;url=index_final.php");
}

?>


<!-- DfdTHzssIUrqmXzgQtgW -->