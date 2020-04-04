<?php  include "includes/db.php"; ?>
<?php include "admin/admin_functions.php";?>
<?php  //include "includes/header.php"; ?>
<?php //include "includes/navbar.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Registration</title>

  <!-- css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" style="max-width:100%;">





<?php
if(isset($_POST['registration'])){


    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirmpass = $_POST['confirmpassword'];





    if(username_exist($username) && email_exist($email)){
        echo "<h3 class='text-center bg-success'>you already registered before. So log in from <a href='index.php' class='text-danger'>here</a></h3>";
    }else{
    
    //validation
    if(!empty($username) && !empty($email) && !empty($phone) && !empty($password) && !empty($confirmpass)){
        
       // mysqli_real_escape_string($connection,$other parameter) function is used to increapt the parameter.
           $username = mysqli_real_escape_string($connection,$username);
           $email = mysqli_real_escape_string($connection,$email);
           $phone = mysqli_real_escape_string($connection,$phone);
           $password = mysqli_real_escape_string($connection,$password);
           $confirmpass = mysqli_real_escape_string($connection,$confirmpass);
        


// $password = password_hash($password,PASSWORD_BCRYPT,array('cost' => 10));


//     $query = "SELECT randSalt FROM users";
//     $select_randsalt_query = mysqli_query($connection,$query);

//     if(!$select_randsalt_query){
//         die('QUERY FAILED'.mysqli_error($connection));
//     }



// $row = mysqli_fetch_array($select_randsalt_query);
// $salt = $row['randSalt'];

// //encryption of password.
// $password = crypt($password,$salt);

if($password == $confirmpass){

$query = "INSERT INTO users (user_name, user_email, user_phone, user_pass, user_confpass, user_role) VALUES('{$username}','{$email}','{$phone}','{$password}','{$confirmpass}','subscriber')";
$register_user_query = mysqli_query($connection,$query);

if(!$register_user_query){
    die('REGISTER QUERY FAILED'.mysqli_error($connection));
}
echo "<p class='bg-success text-center'>Your Registration has been done successfully</p>";
}else{
    echo "<p class='text-danger bg-primary text-center'>you have query in your password</p>";
}
}else {
    echo "<script>alert('Please Fill All The Information Properly');</script>";
}


}


}
?>





    <!-- Navigation -->
    
    <?php  //include "includes/navigation.php"; ?>
    
 
    <!-- Page Content -->
    <!-- <div class="container"> -->

    <div id="wrapper" style="max-width:100%; display:flex; justify-content:center;">
	<div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-4 animated bounceInDown" style="max-width:39rem; background-color:white; padding:2rem; margin-top:2rem;">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets/logo-icon.png">
		 	</div>
		  <div class="card-title text-uppercase text-center">Sign Up</div>
		    <form action="registration.php" method="POST" enctype="multipart/form-data">
            
            
            <div class="form-group">
			   <div class="position-relative">
				  <label for="exampleInputName" class="sr-only">Name</label>
				  <input type="text" required id="username" name="username" style="position:relative;" class="form-control" placeholder="Name">
                  <span style="position:absolute; top:12%; right:5%;"><i class="fa fa-user"></i></span>
			   </div>
            </div>
            
			  <div class="form-group">  	
			   <div class="position-relative">
				  <label for="emailid" class="sr-only">Email ID</label>
				  <input type="email" required id="email" name="email" class="form-control" placeholder="Email ID">
                  <span style="position:absolute; top:12%; right:5%;"><i class="fa fa-envelope"></i></span>
			   </div>
              </div>
              
			  <div class="form-group">
			   <div class="position-relative">
				  <label for="phoneno" class="sr-only">Phone</label>
				  <input type="text" required id="phone" name="phone" class="form-control form-control-rounded" placeholder="Phone">
                  <span style="position:absolute; top:12%; right:5%;"><i class="fa fa-phone"></i></span>
			   </div>
              </div>
              
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="password" class="sr-only">Password</label>
				  <input type="password" required id="password" name="password" class="form-control form-control-rounded" placeholder="Password">
                  <span style="position:absolute; top:12%; right:5%;"><i class="fa fa-lock"></i></span>
			   </div>
              </div>
              
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="retrypassword" class="sr-only">Retry Password</label>
				  <input type="password" required id="confirmpassword" name="confirmpassword" class="form-control form-control-rounded" placeholder="Retry Password">
                  <span style="position:absolute; top:12%; right:5%;"><i class="fa fa-lock"></i></span>
			   </div>
              </div>
              <div class="text-center">
			  <input type="submit" class="btn btn-primary regshadow btn-round" value="Registration" name="registration">
              </div>
			  <div class="text-center pt-3">
				
				<hr>
				<p class="text-muted">Already have an account? <a href="includes/login.php" class="text-primary"> Log In here</a></p>
			  </div>
			 </form>
		   </div>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <!-- <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a> -->
    <!--End Back To Top Button-->
	</div><!--wrapper-->

















    <!--     
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1 class='text-center text-danger'><u>Register</u></h1>
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="on">
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
                            <input type="text" name="username" id="username" autocomplete="on" value="<?php //echo isset($username)?$username:'' ?>" class="form-control" placeholder="Enter Desired Username">
                        </div>
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" autocomplete="on" value="<?php //echo isset($email)?$email:''?>" class="form-control" placeholder="somebody@example.com">
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-success btn-lg btn-block" value="Register">
                    </form>
                 
                </div> -->
           <!--</div>--> 
    <!--</div>-->    <!-- /.row -->
    <!--</div>--> <!-- /.container -->
<!-- </section> -->

        
<?php //include "includes/footer.php";?>
