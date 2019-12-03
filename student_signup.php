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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script src="js/validate.js"></script>
<style>
	
</style> 

	
</head>
<body>


  <!-- Header section -->
  <?php
    include('includes/header.php');
  ?>
  <!-- Header section end -->
  <!-- <div class="vertical-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4>Sign Up As A Student</h4>
                          </div>
                          <form action="insert.php" method="POST">
                            <input type="text" name="name" class="username form-control" placeholder="Name" required="true" id="name">
                            <span id="nameval" class="text-danger font-weight-bold"></span>

                            <input type="text" name="contact" class="username form-control" placeholder="Phone" pattern="[789][0-9]{9}" required="true" id="contact">
                            <span id="noval" class="text-danger font-weight-bold"></span>

                            <input type="email" name="email" class="username form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="true" id="email">
                            <span id="emailval" class="text-danger font-weight-bold"></span>

                            <input type="password" name="password" class="password form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required="true" id="password">
                            <span id="pwdval" class="text-danger font-weight-bold"></span>
                              <div>
                                <label style="color: white">You are a ...?</label><br>
                              <input type="radio" name="user_type" value="teacher" required="true"><font style="color: #FFFFFF">Teacher</font>


                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <input type="radio" name="user_type" value="student" required="true"><font style="color: #FFFFFF">Student</font>
                        </div>
                                
                              <br>
                            <input class="btn login" type="submit" value="Sign Up" onclick="return check()" />

                            <div>
                              <br>
                            <font style="color: #FFFFFF">Already a member? Click <a href="#login" data-toggle="modal" data-target="#login" data-dismiss="modal">here</a> to login.</font>
                        </div>
                          </form>
                </div>
              </div>

          </div>
        </div>
      </div>

</div> -->
            <section class="spad " style="margin-top: 70px">
              <div class="container">
                <div class="vertical-center">
                  <div class="container">                
                    <div class="col-md-offset-4 col-md-4 ">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><b>SIGN UP AS STUDENT</b></h4>
                            </div>
                            <div class="panel-body">                                
                                <form method="POST" action="insert.php">
                                    <div class="form-group">
                                       <input type="text" name="name" class="username form-control" placeholder="Name" required="true" id="name">
                                      <span id="nameval" class="text-danger font-weight-bold"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="contact" class="username form-control" placeholder="Phone" pattern="[789][0-9]{9}" required="true" id="contact">
                                        <span id="noval" class="text-danger font-weight-bold"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="username form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="true" id="email">
                                        <span id="emailval" class="text-danger font-weight-bold"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="password form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required="true" id="password">
                                        <span id="pwdval" class="text-danger font-weight-bold"></span>
                                    </div>                                    
                                    <input class="btn login" type="submit" value="Sign Up" onclick="return check()" />
                                </form>
                            </div>
                        </div>    
                    </div>     
                </div>

             </div>
          </div>
        </section>
<?php
  include('includes/footer.php');
  ?>
</body>
</html>