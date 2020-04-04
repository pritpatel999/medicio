<?php include "header.php";?>



 <!-- Start wrapper-->
 <div id="wrapper" style="display:flex; justify-content:center;" class="mt-3">
	<div class="card animated bounceInDown" style="border:1px solid blue;">
		<div class="card-body" style="width:23rem; background-color:white; padding:20px; margin-top:20px; border-radius:5px;">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="../assets/logo-icon.png">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Log In</div>
		    <form action="login1.php" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="username" class="sr-only">Name</label>
				  <input type="text" id="username" name="username" required class="form-control " placeholder="Enter Name" style="position:relative;">
					  <span style="position:absolute; top:10%; right:5%;"><i class="fa fa-user"></i></span>
			   </div>
			  </div>
			
            
            <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="password" class="sr-only">Password</label>
				  <input type="password" id="password" name="password" required class="form-control" placeholder="Enter Password" style="position:relative";>
					  <span style="position:absolute; top:10%; right:5%;"><i class="fa fa-lock"></i></span>
			   </div>
			  </div>
			<!-- <div class="form-row mr-0 ml-0">
			 <div class="form-group col-6">
			   <div class="demo-checkbox">
                <input type="checkbox" id="user-checkbox" class="filled-in chk-col-primary" checked="" />
                <label for="user-checkbox">Remember me</label>
			  </div>
			 </div>
			 <div class="form-group col-6 text-right">
			  <a href="authentication-reset-password.html">Reset Password</a>
			 </div>
			</div> -->
			 <br>
			 <input type="submit" class="btn btn-primary btn-block" value="Log In" name="login">
			  <div class="text-center pt-3">
			<br>	<p class="text-muted">Do not have an account? <a href="../registration.php"> Sign Up here</a></p>
			  </div>
			 </form>
		   </div>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <!-- <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a> -->
    <!--End Back To Top Button-->
	</div><!--wrapper-->
	