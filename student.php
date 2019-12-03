<!DOCTYPE html>
<html lang="en">
<head>
	<title>WebUni - Student</title>
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>



</head>
<body>
	<!-- Page Preloder -->
	<!--<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<img src="img/logo.png" alt="">
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					<a href="" class="site-btn header-btn">Login</a>
					<nav class="main-menu">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="#">About us</a></li>
							<li><a href="courses.html">Courses</a></li>
							<li><a href="blog.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page info -->
	<div class="page-info-section set-bg" style=" background-image: url('img/digital.jpg');height: 400px">
		<div class="container">
			<div class="site-breadcrumb" style="color: #000000">

				<strong><p style="color: #F9F4F3; align-content: space-between; font-size: 70px">STUDENT'S  PANEL</p></strong>
			</div>
		</div>
	</div>



	
	<div class="container" style="background-color:  #E11F3C; height:300px; background-image: url('img/b.png'); width: 1270px;margin:60px;text-align: center; "> <h5><b style="size=50;color: #8E18F0">Course 1<br>
		<a href="video.php">Click here to view the course video</a></h5><br></div>


	<div class="container" style="background-color:  #E11F3C; height:300px; background-image: url('img/d.jpg'); width: 1270px;margin:60px;text-align: center; "> <h5><b style="size=50;color: #8E18F0">Course 2<br>
		<a href="video.php">Click here to view the course video</a></h5><br></div>

	<div class="container" style="background-color:  #E11F3C; height:300px; background-image: url('img/c.jpg'); width: 1270px;margin:60px;text-align: center; "> <h5><b style="size=50;color: #8E18F0">Course 3<br>
		<a href="video.php">Click here to view the course video</a></h5><br></div>

	<div class="container" style="background-color:  #E11F3C; height:300px; background-image: url('img/bg.jpg'); width: 1270px;margin:60px;text-align: center; "> <h5><b style="size=50;color: #8E18F0">Course 4<br>
		<a href="video.php">Click here to view the course video</a></h5><br></div>




	<!--------------------------------->

	<?php



$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "webuni";


$conn = mysql_connect($host , $dbUsername , $dbPassword,$dbname) or die("unable to connect to host");  


	/*$host = "localhost";  
       $username = "root";  
       $password = ""; 
       $dbname = "webuni";*/

       /*$conn = mysql_connect($servername , $username , $password,$dbname) or die("unable to connect to host");  */
      // $sql = mysql_select_db ('test',$conn) or die("unable to connect to database"); 


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


<!----------------------------------- DEMO ------------------------------------------>



							<div class="container" style="background-color: #EB2D5B; min-height: 50px;width: 300px;margin-top: 30px;margin-left: 10px;font-weight: bold">
								
							<?php
							

		echo "You are watching :-  ".$coursename."<br><br><br>";
		echo "faculty name :-  ".$teachersname."<br><br><br>";
		echo "description :-  ".$description."<br><br><br>";
		echo "<a href='watch.php?id=$id'>$name</a><br>";
							?>

							</div>


</body>
</html>

