<?php
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "webuni";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Uploaded Videos</title>
</head>
<body>
	<?php
	$q="select * from courses";
	$query=mysqli_query($conn,$q);
	while($row=mysqli_fetch_assoc($query))
	{
		$id=$row['course_id'];
		$name=$row['video_name'];
		$coursename = $row['course_name'];
      $teachersname = $row['teacher_name'];
      $description = $row['comments'];
		
	}

	?>
							<div class="container">
								
							<?php
							

		echo "You are watching :-  ".$coursename."<br><br><br>";
		echo "faculty name :-  ".$teachersname."<br><br><br>";
		echo "description :-  ".$description."<br><br><br>";
		echo "<a href='watch.php?id=$id'>$name</a><br>";
							?>


							</div>


</body>
</html>