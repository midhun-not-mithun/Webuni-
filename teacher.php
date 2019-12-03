<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>WebUni - Education Template</title>
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
	

	<!-- Header section -->
	<?php
	 include('includes/header.php');
	 ?>
	<!-- Header section end -->


	<!-- Page info -->
	<div class="page-info-section set-bg" data-setbg="img/page-bg/4.jpg" style="height: 400px">
		<div class="container">
			<div class="site-breadcrumb" style="color: #000000">
				<strong><p style="color: #F9F4F3; align-content: space-between; font-size: 70px">TEACHERS  PANEL</p></strong>
			</div>
		</div>
	</div>
	<!-- Page info end -->

<div class="container-fluid" style="padding:0px">
<div style="background-color: #F6EBF0">
	<div style="margin:25px ;padding:25px">
		
	<h3>Hello Teachers , please make it easy for students to learn through your videos</h3>
	<br><br>
		<form method="POST" enctype="multipart/form-data" style="margin-left: 10px">
  			<h5>&nbsp;&nbsp;Course Name :- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  														<select name="cname" >
  															<option value="Android App Development">Android App Development</option>  
  															<option value="Data Science">Data Science</option>
  															<option value="Machine Learning">Machine Learning</option>
                                                            <option value="Python Programming">Python Programming</option>
                                                            <option value="Web Development">Web Development</option>
                                                        </select>
                                                        <br></h5><br>
  			<h5>&nbsp;&nbsp;Teacher's Name :- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="tname" size="45"><br></h5><br>
  			<h5>&nbsp;&nbsp;Comments/Description :- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="des" size="45"><br></h5>



 			<!-- <textarea rows="3" cols="45" name="des" form="usrform">
			</textarea><br><br><br></h5>
  <!----------------- insert videos code -->

<p><h6 style="text-decoration: underline;color: #E52E47">Upload videos of less than 20MB. And should have unique names(don't use repeated names for videos of same course)</h6></p>
  			

  			<table>
   				<tr>
    				<td><input type="file" name="file"></td>
			   </tr><br>
			   <tr>
			    <td><input type="submit" name="submit" value="Submit"></td>
			   </tr>
		    </table>
 		</form>
 		



 <h5><a href="video.php">Preview</a></h5><br>

 		<center><h3>Hear what your students have to say about you!!!</h3></center><br>
 		<table border="2px" width="100%">
 			<th>Student ID</th>
 			<th>Student Name</th>
 			<th >Feedback</th>
 			<?php
 				include('includes/connection.php');
 				$n=$_SESSION['user_name'];
 				$query="SELECT * FROM feedback WHERE t_name='$n'";
				$result = mysqli_query($con, $query) or die(mysqli_error($con));
				while($row = mysqli_fetch_array($result))
				{
 			?>
 			<tr>	
 			<?php			
 					echo "<td>".$row['user_id']."</td>";
 					echo "<td>".$row['user_name']."</td>";
 					echo "<td>".$row['feedback']."</td>";
 					?>
 				</tr>
 				<?php
 				}
 				?>
 				

 		</table>
 	</div>
<?php
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "webuni";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if(isset($_POST['submit']))
    {
      $name=$_FILES['file']['name'];
      $temp=$_FILES['file']['tmp_name'];
      $coursename = $_POST['cname'];
      $teachersname = $_POST['tname'];
      $description = $_POST['des'];
      move_uploaded_file($temp,"upload/".$name);
      $query="INSERT INTO courses values(' ','$name','$coursename','$teachersname','$description')";
      if(mysqli_query($conn,$query))
      {
        echo "Submitted to DB";
      }
      	echo "<br>".$name."has been uploaded";
	}


  ?> 
</div>
</div>

	
	<!-- footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>


	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWTIlluowDL-X4HbYQt3aDw_oi2JP0Krc&sensor=false"></script>
	<script src="js/map.js"></script>
</body>
</html>









<!--

<section class="signup-section spad">
		<div class="signup-bg set-bg" data-setbg="img/signup-bg.jpg"></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="signup-warp">
						<div class="section-title text-white text-left">
							<h2>Sign up to became a teacher</h2>
							
						</div>
						

						<form class="signup-form">
							<input type="text" placeholder="Your Name">
							<input type="text" placeholder="Your E-mail">
							<input type="text" placeholder="Your Phone">
							<label for="v-upload" class="file-up-btn">Upload Course</label>
							<input type="file" id="v-upload">
							<button class="site-btn">Search Couse</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
-->