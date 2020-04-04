<?php include "includes/admin_header.php";?>


<!-- wrapper -->
<div id="wrapper">


<!-- navigation -->
<?php 
// echo "hello";
include "includes/admin_navigation.php";
?>

<!-- <nav class="nav flex-column" style="min-height:100vh; background:black!important; min-width:200px; position:fixed;">
  <a class="nav-link active" href="#">Active</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" href="#">Disabled</a>
</nav>
 -->







<div id="page-wrapper">

<div class="container-fluid"  style="width:81vw; margin-top:50px;">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Project Admin
                <small><?php echo $_SESSION['user_name']; ?></small>
            </h1>
        </div>
    </div>
    <!-- /.row -->
<hr>




    
<!-- end of container fluid -->
</div>

<!-- end of page-wrapper -->
</div>






<?php include "includes/admin_footer.php";?>