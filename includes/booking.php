<?php ob_start(); ?>
<?php session_start(); ?>
<?php //include "includes/db.php";?>
<?php // include "admin_functions.php";?>

<?php include "../includes/db.php";?>

<?php 
if(!isset($_SESSION['user_name'])){
   header("Location:../index.php"); 
}else{
//    echo $_SESSION['user_name'];
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



<h3 class="text-center" style="background-color:#272327;color: #fff; margin-top:130px;">Book Appoinment</h3>







<!-- result -->
<?php 
	$doc_id = isset($_GET['doc_id'])?$_GET['doc_id']:"";
	
 ?>
				<!-- fetching doctor info -->
					<?php 
					

							$sql="SELECT * FROM doctor WHERE doc_id = $doc_id ";
                            $result = $connection->query($sql);
                            
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							        $doc_id   = $row["doc_id"];
							        $name 	= $row["doc_name"];
							        $expertise 	= $row["doc_expertise"];
							        $contact 	= $row["doc_contact"];
							        $fee = $row["doc_fee"];
									$userid = $_SESSION['user_id'];
                               
                                    
									// $query = 'SELECT user_id FROM users';
									// $userid = mysqli_query($connection,$query);
	
                               
                                }
							}
							
							// $connection->close();

					?>
					<!-- fetching doctor info -->

                    	<!-- confirming booking -->
					<?php

// include('../config.php');
if(isset($_POST['submit'])){
    

$sql = " INSERT INTO booking (doc_name, userid, doc_contact, doc_expertise, doc_fee, pat_name, pat_contact, pat_email, pat_address, date, time, payment)
    VALUES ('" . $_POST["dname"] . "','" . $_POST["userid"] . "','" . $_POST["dcontact"] . "','" . $_POST["expertise"] . "', '" . $_POST["fee"] . "','" . $_POST["pname"] . "','". $_POST["pcontact"] . "','". $_POST["email"] . "','". $_POST["address"] . "','". $_POST["dates"] . "','". $_POST["time"] . "','". $_POST["payment"] . "' )";

    if ($connection->query($sql) === TRUE) {
        echo "<script>alert('Your booking has been accepted!');</script>";
    } else {
        echo "<script>alert('There was an Error')<script>";
    }

    $connection->close();
}
?> 

<!-- confirming booking -->






	<!-- 	booking info-->
		<!-- <div class="login" style="background-color:#fff;">
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;"> -->
            <!-- <div class="mx-auto my-4 animated bounceInDown" > -->


    <!-- <div id="wrapper" style="max-width:100%; display:flex; justify-content:center;"> -->
	<div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-4 animated bounceInDown" style="max-width:29rem; background-color:white; padding:2rem; margin-top:2rem;">
	
            <form action="" method="post" class="text-center form-group" enctype="multipath/form-data">
                

					<label>
						Dr. Name &nbsp;: <input type="text" name="dname" value="<?php echo $name; ?>" >
					</label><br><br>

 					<label>
						Contact &nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="dcontact" value="<?php echo $contact; ?>" />
					</label><br><br>
 					
					<label>
						Category &nbsp;&nbsp;: <input type="text" name="expertise" value="<?php echo $expertise; ?>" >
					</label><br><br>

					<label>
						Fee &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="fee" value="<?php echo $fee; ?>" >
					</label><br><br>
					<label>
						Your Name: <input type="text" name="pname" value="" required>
					</label><br><br>

 					<label>
						 Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="pcontact" value="" required>
					</label><br><br>
					<label>
						 E-mail &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="email" name="email" value="" required>
					</label><br><br>
 					
					<label>
						 Address &nbsp;&nbsp;&nbsp;: <input type="text" name="address" value="" required>
					</label><br><br>
					<label>
						 Date &nbsp;&nbsp;&nbsp;: <input type="date" name="dates" value="" required>
					</label><br><br>
					<label>
						 Time: <select name="time" required>
										<option value="">-select-</option>
										<option value="11.00am">11.00am</option>
										<option value="03.00pm">03.00pm</option>
									</select>
					</label><br><br>
					<label>
						 Payment: <select name="payment" required>
										<option value="Online">Online</option>
										<option value="cash">cash</option>
									</select>
					</label><br><br>
                    

                    <button name="submit" type="submit" class="btn btn-primary">Confirm</button> 
					<a href="search_doctor.php"><button name="" type="" class="btn btn-danger">Cancel</button></a> <br>

                    
                    <label>
						  <input type="hidden" name="userid" value="<?php echo $userid;?>">
                    </label>
                    
				</form> <br><br>

			</div>
	
	
		</div>
				<!-- 	booking info-->
				
		
</div>


</body>

</html>