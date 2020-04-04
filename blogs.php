<?php include "includes/db.php";?>
<?php include "includes/header.php"; ?>

<div id="wrapper">

    <!-- navbar -->
    <?php //include "includes/navbar.php";?>
    <!-- end of navbar -->


<!-- navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
          <div class="row">
          
            <div class="col-sm-6 col-md-6">
                <a href="index.php" class="bold text-right text-light" style="font-weight:700; text-decoration:none;">HOME PAGE</a>
            </div>
            <!-- <div class="col-sm-4 col-md-4">
              <p class="bold text-center">Monday - Saturday, 8am to 10pm </p>
            </div> -->
            <div class="col-sm-6 col-md-6">
              <p class="bold text-right">Call us now +91 9904381156</p>
            </div>
          
          </div>
        </div>
      </div>
      </nav>




<div class="container" style="background-color:white; min-height:100vh;">
      <div class="row">

<!-- Blog Entries Column -->
<div class="col-md-12">


<h1 class="page-header pt-4">
        Blogs
        <small>related to diet</small>
    </h1>
    <div style="border:1px solid black;" class="mb-3"></div>

<?php 

$query = "SELECT * FROM posts WHERE post_status='published'";
$post_query = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($post_query)){
    $post_id = $row['post_id'];
    $post_title = $row['post_title'];
    $post_author = $row['post_author'];
    $post_date = $row['post_date'];
    $post_image = $row['post_image'];           //to display image we have to write name of image in database image section.
    // $post_content = $row['post_content'];


       $post_content = substr($row['post_content'],0,300);  //this function is used to make our content small. in this only first 200 character will be display.
    $post_status = $row['post_status'];
    ?>

    <!-- First Blog Post -->
    <h2>
        <a href="#"><?php echo $post_title; ?></a>
    </h2>
    <p class="lead">
        by <a href="index.php"><?php echo $post_author; ?></a>
    </p>
    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date;?></p>
    <hr>
    <img class="img-responsive" src="img/<?php echo $post_image?>" width="400px" height="250px" alt="">
    <hr>
    <p><?php echo $post_content; ?></p>
    <a class="btn btn-primary" href="blog.php?p_id=<?php echo $post_id ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
<br><br>
    <div style="border:1px solid black;"></div>
    <br><br>
<?php

}
?>





</div>
</div>



</div>






</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

  <!-- Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/stellar.js"></script>
  <script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/nivo-lightbox.min.js"></script>
  <script src="js/custom.js"></script>

</body>
</html>