<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>WebUni</title>
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
	<script src="js/validate.js"></script>
<style>
	body{
  height: 100vh;
  text-align: center;
}
  /*Trigger Button*/
.login-trigger {
  font-weight: bold;
  color: #fff;
  background: linear-gradient(to bottom right, #B05574, #F87E7B);
  padding: 15px 30px;
  border-radius: 30px;
  position: relative; 
  top: 50%;
}

/*Modal*/
h4 {
  font-weight: bold;
  color: #fff;
}
.close {
  color: #fff;
  transform: scale(1.2)
}
.modal-content {
  font-weight: bold;
  background: linear-gradient(to bottom right,#F87E7B,#B05574);
}
.form-control {
  margin: 1em 0;
}
.form-control:hover, .form-control:focus {
  box-shadow: none;  
  border-color: #fff;
}
.username, .password {
  border: none;
  border-radius: 0;
  box-shadow: none;
  border-bottom: 2px solid #eee;
  padding-left: 0;
  font-weight: normal;
  background: transparent;  
}
.form-control::-webkit-input-placeholder {
  color: #eee;  
}
.form-control:focus::-webkit-input-placeholder {
  font-weight: bold;
  color: #fff;
}
.login {
  padding: 6px 20px;
  border-radius: 20px;
  background: none;
  border: 2px solid #FAB87F;
  color: #FAB87F;
  font-weight: bold;
  transition: all .5s;
  margin-top: 1em;
}
.login:hover {
  background: #FAB87F;
  color: #fff;
}


.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
    position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {background-color: #101010;}

.dropdown:hover .dropdown-content {display: block;background-color: #f1f1f1}

.dropdown:hover .dropbtn {background-color: #101010;}

</style> 

	
</head>
<body>
	<script>
		function myFunction() 
		{
		  document.getElementById("myDropdown").classList.toggle("show");
		}
		window.onclick = function(e) 
		{
		  if (!e.target.matches('.dropbtn')) 
		  {
		  var myDropdown = document.getElementById("myDropdown");
		    if (myDropdown.classList.contains('show')) 
		    {
		      myDropdown.classList.remove('show');
		    }
		  }
		}
	</script>
	<!-- Page Preloder -->
	<!-- <div id="preloder">
		<div class="loader"></div>
	</div>  -->

	<!-- Header section -->
	<?php
		include('includes/header.php');
	?>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<h2>Get The Best Free Online Courses</h2>
				<p style="font-size: 20px">Get your team access to WebUni's top 3,500+ courses anytime, anywhere</p>
			</div>
			
		</div>
		
	</section>
	<!-- Hero section end -->


	<!-- categories section -->
	<section class="categories-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Our Course Categories</h2>
				
			</div>
			<div class="row">
				<!-- categorie -->
	
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="img/python.jpg"></div>
						<div class="ci-text">
							<?php
       							if (isset($_SESSION['email'])) 
      							{
                        	?>
							<a href="python.php">
							<h5>Programming with Python</h5>
							<p>Learn Python from Basics.</p>
							<span>
								<?php
									$con = mysqli_connect("localhost","root","","webuni");
									if (mysqli_connect_errno())
									{
									  echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									$query="SELECT * FROM courses where course_name='Python Programming'";
									$result = mysqli_query($con, $query) or die(mysqli_error($con));
									if(!mysqli_query($con,$query))
									{
										echo 'not fetched';
									}

									else
									{
										$rowcount=mysqli_num_rows($result);
										echo $rowcount." Courses";
									}
								}
								else
								{
								?>		
								<a href="#" data-target="#signup" data-toggle="modal">
								<h5>Programming with Python</h5>
								<p>Learn Python from Basics.</p>
								<span>
									<?php
										$con = mysqli_connect("localhost","root","","webuni");
										if (mysqli_connect_errno())
										{
										  echo "Failed to connect to MySQL: " . mysqli_connect_error();
										}
										$query="SELECT * FROM courses where course_name='Python Programming'";
										$result = mysqli_query($con, $query) or die(mysqli_error($con));
										if(!mysqli_query($con,$query))
										{
											echo 'not fetched';
										}

										else
										{
											$rowcount=mysqli_num_rows($result);
											echo $rowcount." Courses";
										}
									}
								?>							
							</span>
						</a>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					
						<div class="categorie-item">
							<div class="ci-thumb set-bg" data-setbg="img/web_dev.jpg"></div>
							<div class="ci-text">
								<?php
       							if (isset($_SESSION['email'])) 
      							{
                        		?>
								<a href="wd.php">
								<h5>Web Development</h5>
								<p>Learn how to create a website from scratch.</p>
								<span>
									<?php
										$con = mysqli_connect("localhost","root","","webuni");
										if (mysqli_connect_errno())
										{
										  echo "Failed to connect to MySQL: " . mysqli_connect_error();
										}
										$query="SELECT * FROM courses where course_name='Web Development'";
										$result = mysqli_query($con, $query) or die(mysqli_error($con));
										if(!mysqli_query($con,$query))
										{
											echo 'not fetched';
										}

										else
										{
											$rowcount=mysqli_num_rows($result);
											echo $rowcount." Courses";
										}
									}
									else
									{
									?>
									<a href="#" data-target="#signup" data-toggle="modal">
								<h5>Web Development</h5>
								<p>Learn how to create a website from scratch.</p>
								<span>
									<?php
										$con = mysqli_connect("localhost","root","","webuni");
										if (mysqli_connect_errno())
										{
										  echo "Failed to connect to MySQL: " . mysqli_connect_error();
										}
										$query="SELECT * FROM courses where course_name='Web Development'";
										$result = mysqli_query($con, $query) or die(mysqli_error($con));
										if(!mysqli_query($con,$query))
										{
											echo 'not fetched';
										}

										else
										{
											$rowcount=mysqli_num_rows($result);
											echo $rowcount." Courses";
										}
									}
								?>				
								</span>
									</a>
							</div>
						</div>
				
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="img/digital.jpg"></div>
						<div class="ci-text">
							<?php
       							if (isset($_SESSION['email'])) 
      							{
                        	?>
							<a href="ds.php">
							<h5>Data Science</h5>
							<p>Extract Knowledge from Data.</p>
							<span>
								<?php
									$con = mysqli_connect("localhost","root","","webuni");
									if (mysqli_connect_errno())
									{
									  echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									$query="SELECT * FROM courses where course_name='Data Science'";
									$result = mysqli_query($con, $query) or die(mysqli_error($con));
									if(!mysqli_query($con,$query))
									{
										echo 'not fetched';
									}

									else
									{
										$rowcount=mysqli_num_rows($result);
										echo $rowcount." Courses";
									}
								}
								else
								{
								?>
								<a href="#" data-target="#signup" data-toggle="modal">
								<h5>Data Science</h5>
								<p>Extract Knowledge from Data.</p>
								<span>
									<?php
										$con = mysqli_connect("localhost","root","","webuni");
										if (mysqli_connect_errno())
										{
										  echo "Failed to connect to MySQL: " . mysqli_connect_error();
										}
										$query="SELECT * FROM courses where course_name='Data Science'";
										$result = mysqli_query($con, $query) or die(mysqli_error($con));
										if(!mysqli_query($con,$query))
										{
											echo 'not fetched';
										}

										else
										{
											$rowcount=mysqli_num_rows($result);
											echo $rowcount." Courses";
										}
									}
								?>			
							</span>
						</a>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-6 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="img/sec.jpg"></div>
						<div class="ci-text">
							<?php
       							if (isset($_SESSION['email'])) 
      							{
                        	?>
							<a href="aad.php">
							<h5>Android App Development</h5>
							<p>Build your own applications.</p>
							<span>
								<?php
									$con = mysqli_connect("localhost","root","","webuni");
									if (mysqli_connect_errno())
									{
									  echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									$query="SELECT * FROM courses where course_name='Android App Development'";
									$result = mysqli_query($con, $query) or die(mysqli_error($con));
									if(!mysqli_query($con,$query))
									{
										echo 'not fetched';
									}

									else
									{
										$rowcount=mysqli_num_rows($result);
										echo $rowcount." Courses";
									}
								}
								else
								{
								?>
								<a href="#" data-target="#signup" data-toggle="modal">
								<h5>Android App Development</h5>
								<p>Build your own applications.</p>
								<span>
									<?php
										$con = mysqli_connect("localhost","root","","webuni");
										if (mysqli_connect_errno())
										{
										  echo "Failed to connect to MySQL: " . mysqli_connect_error();
										}
										$query="SELECT * FROM courses where course_name='Android App Development'";
										$result = mysqli_query($con, $query) or die(mysqli_error($con));
										if(!mysqli_query($con,$query))
										{
											echo 'not fetched';
										}

										else
										{
											$rowcount=mysqli_num_rows($result);
											echo $rowcount." Courses";
										}
									}
								?>			
							</span>
						</a>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-6 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="img/sci.jpg"></div>
						<div class="ci-text">
							<?php
       							if (isset($_SESSION['email'])) 
      							{
                        	?>
							<a href="ml.php">
							<h5>Machine Learning</h5>
							<p>In Demand. Now and in Future.</p>
							<span>
								<?php
									$con = mysqli_connect("localhost","root","","webuni");
									if (mysqli_connect_errno())
									{
									  echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									$query="SELECT * FROM courses where course_name='Machine Learning'";
									$result = mysqli_query($con, $query) or die(mysqli_error($con));
									if(!mysqli_query($con,$query))
									{
										echo 'not fetched';
									}

									else
									{
										$rowcount=mysqli_num_rows($result);
										echo $rowcount." Courses";
									}
								}
								else
								{
								?>	
								<a href="#" data-target="#signup" data-toggle="modal">
								<h5>Machine Learning</h5>
								<p>In Demand. Now and in Future.</p>
								<span>
									<?php
										$con = mysqli_connect("localhost","root","","webuni");
										if (mysqli_connect_errno())
										{
										  echo "Failed to connect to MySQL: " . mysqli_connect_error();
										}
										$query="SELECT * FROM courses where course_name='Machine Learning'";
										$result = mysqli_query($con, $query) or die(mysqli_error($con));
										if(!mysqli_query($con,$query))
										{
											echo 'not fetched';
										}

										else
										{
											$rowcount=mysqli_num_rows($result);
											echo $rowcount." Courses";
										}
									}
								?>				
							</span>
						</a>
						</div>
					</div>
				</div>			
			</div>
		</div>
	</section>
	<!-- categories section end -->


	<!-- feedback section -->
	<section class="search-section">
		<div class="container">
			<?php
					if (isset($_SESSION['email'])) 
      				{
			?>
			<div class="search-warp">
				<div class="section-title text-white">
					<h2>Leave A Feedback</h2>
				</div>
				
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<!-- search form -->
						<form class="course-search-form" method="POST" action="feedback.php">
							<input type="text" placeholder="Faculty Name" name="fname" required="true">
							<input type="text" class="last-m" placeholder="Feedback/Comment" name="fback" required="true">
							<button class="site-btn">Submit</button>
						</form>
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
	</section>
	<!-- search section end -->
	<br>
	<br>
	<br>
	<br>
<!--
	
	


	<!-- banner section -->
	
	<!-- banner section end -->

	<!-- footer section -->
	<?php
		include('includes/footer.php');
	?>
	<!-- footer section end -->


	<!--====== Javascripts & Jquery ======-->
	
	
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>

</html>