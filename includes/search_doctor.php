<?php ob_start(); ?>
<?php session_start(); ?>
<?php //include "includes/db.php";?>
<?php // include "admin_functions.php";?>

<?php include "../includes/db.php";?>

<?php 
// if(!isset($_SESSION['user_name'])){
//    header("Location:../index.php"); 
// }
?>

<?php
if(!isset($_SESSION['user_role'])){
    header("Location:../index.php");
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Appoinment</title>

  <!-- css -->
  <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="../plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="../css/nivo-lightbox.css" rel="stylesheet" />
  <link href="../css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="../css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="../css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="../css/animate.css" rel="stylesheet" />
  <link href="../css/style.css" rel="stylesheet">

  <!-- css for video file -->
  <link rel="stylesheet" href="../css/abc.css">

  <!-- boxed bg -->
  <link id="bodybg" href="../bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="../color/default.css" rel="stylesheet">

  <style>

.fixed-top-2 {
    margin-top: 56px;
}
.navbar-first{
  background-color: rgba(81, 217, 241, 0.931);
  color: white;
}
.navbar-second{
  background-color: white;
  font-weight: 600;
}
</style>




</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

  <div id="wrapper">

    <?php //include "navbar.php"; 
    ?>
      <nav class="navbar navbar-first navbar-expand-md fixed-top">
  <!-- <a class="navbar-brand" href="#">Navbar w/ text</a> -->
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->
  <div class="container">
            <div class="col-sm-6 col-md-6">
              <p class="font-weight-bold text-left">Monday - Saturday, 8am to 10pm </p>
            </div>
            <div class="col-sm-6 col-md-6 ml-auto">
              <p class="bold text-right">Call us now +91 9904381156</p>
            </div>
        </div>
      
</nav>


<nav class="navbar navbar-expand-lg fixed-top fixed-top-2 navbar-second">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNavDropdown">
    <ul class="navbar-nav mx-auto">
    <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home</a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="../blogs.php">Blogs</a>  
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="../registration.php">Registration</a>
      </li>
      
      
      <li class="nav-item">
        <a class="nav-link" href="../admin" target="_blank">Admin</a>
      </li>
      
    
    </ul>
  </div>
</nav>



<h3 class="text-center" style="background-color:#272327;color: #fff; margin-top:130px;">Search Here</h3>


<div id="wrapper" style="max-width:100%; display:flex; justify-content:center;">
	<div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-4 animated bounceInDown" style="max-width:29rem; background-color:white; padding:2rem; margin-top:2rem;">
	

<!-- <div class="formstyle" style="padding:70px;border: 1px solid lightgrey;margin-right: 293px;margin-bottom: 30px;background-color:#f3f3f8;color:#141313;width: 530px;margin-left: 400px;"> -->
					<form action="search_result.php" method="post" class="form-group">

					<!-- testing -->
					<label>
						Search By : <select name="address" type="text" style="width: 110px;margin-right: 175px;" >
												<option>-Select-</option>
												<option>Ahmedabad</option>
												<option>vadodara</option>
												<!-- <option>Rangpur</option>
												<option>Rajsahi</option> -->
												
											</select>

					</label><br><br>
					<!-- testing end-->

					<label>
						 Category &nbsp; : <select name="expertise" type="text" style="width: 110px;margin-right: 175px;" />
												<option>-Select-</option>
												<option>Expert Consultant</option>
												<option>Dietitian</option>
												<option>Nutritionist</option>
												<!-- <option>Neurologist</option>
												<option>kedney</option>
												<option>Cardiologist</option>
												<option>Plastic Surgeon</option>
												<option>General Physician</option> -->
											</select>

					</label>
					<button name="submit" type="submit" style="border-radius: 3px;color:#000;margin-left: 145px;margin-top: 8px;">Search</button>
					<br>
					
					</form>



					
		 	</div>
</div>

</body>
</html>