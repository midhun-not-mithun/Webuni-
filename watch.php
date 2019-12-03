<?php
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "webuni";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$q="select * from courses where course_id=$id";

		$query=mysqli_query($conn,$q);
		while($row=mysqli_fetch_assoc($query))
		{
			$coursename=$row['course_name'];
			$name=$row['video_name'];
		}
		//echo "You are watching".$name."<br>";
		echo "You are watching :-  ".$coursename."<br>";
		echo "<video width='100%' height='100%' controls><source src='upload/".$name."' type='video/webm'></video>";

	}

?>