<?php include "includes/db.php";?>
<?php include "includes/header.php"; ?>

<div id="wrapper">


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



<?php
                if(isset($_GET['p_id'])){
                    $the_post_id=$_GET['p_id'];
                
                // adding views count.
                $query = "UPDATE posts SET post_views_count = post_views_count + 1 WHERE post_id = $the_post_id";
                $views_count_query = mysqli_query($connection,$query);
                if(!$views_count_query){
                        die('QUERY FAILED'.mysqli_error($connection));
                }

                // if(isset($_SESSION['user_role']) && $_SESSION['user_role']=='admin'){
                //     $query = "SELECT * FROM posts WHERE post_id=$the_post_id";
                // }else{

                // }

                $query = "SELECT * FROM posts WHERE post_id = $the_post_id AND post_status = 'published'";
                $select_posts_query = mysqli_query($connection,$query); 

                if(mysqli_num_rows($select_posts_query)<1){
                    echo "<h2 class='text-center'>No Post Available</h2>";
                }else{
                
                while($row = mysqli_fetch_assoc($select_posts_query)){
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];           //to display image we have to write name of image in database image section.
                    $post_content = $row['post_content'];
                    ?>




<h1 class="page-header pt-4">
        Blog
        <small>related to diet</small>
    </h1>
<hr>
    <!-- First Blog Post -->
    <h2>
        <a href="#"><?php echo $post_title; ?></a>
    </h2>
    <p class="lead">
        by <a href="index.php"><?php echo $post_author; ?></a>
    </p>
    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date;?></p>
    <hr>
    <img class="img-responsive" src="img/food/dish.jpg" width="400px" height="250px" alt="">
    <hr>
    <p><?php echo $post_content; ?></p>
    <!-- <a class="btn btn-primary" href="blog.php?p_id=<?php echo $post_id ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a> -->

    <hr>

<?php
}}}
?>

                <!-- Blog Comments -->


                <?php
                    
                    if(isset($_POST['create_comment'])){

                        $the_post_id = $_GET['p_id'];
                        $comment_author = $_POST['comment_author'];
                        $comment_email = $_POST['comment_email'];
                        $comment_content = $_POST['comment_content'];

                        if(!empty($comment_author) && !empty($comment_email) && !empty($comment_content)){

                            $query = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date) VALUES ($the_post_id, '{$comment_author}', '{$comment_email}', '{$comment_content}','approve',now())";
                            $create_comment_query = mysqli_query($connection,$query);
    
                            if(!$create_comment_query){
                                die('QUERY FAILED'.mysqli_error($connection));
                            }
    
                            //find total number of count in perticular psot.
                            // $query = "UPDATE posts SET post_comment_count=post_comment_count+1 WHERE post_id = $the_post_id";
                            // $update_commnet_count_query = mysqli_query($connection,$query);
                            
                            

                        }else{
                            echo "<script>alert('Your comment is not submmited because you missed to fill information.')</script>";
                        }
}
                    
                    
                    ?>


                <!-- Comments Form -->
                <div class="well">
                    <h4><u>Leave a Comment:</u></h4>
                    <form role="form" action="" method="post">
    
                        <div class="form-group">
                            <label for="Author">Your Name:</label>
                            <input type="text" class="form-control" name="comment_author" placeholder="NAME" id="">
                        </div>
    
                        <div class="form-group">
                            <label for="Email">Email:</label>
                            <input type="text" name="comment_email" placeholder="abc@gmail.com" class="form-control" id="">
                        </div>
    
                        <div class="form-group">
                            <label for="Comment">Your Comment:</label>
                            <textarea class="form-control" rows="3" name="comment_content"></textarea>
                        </div>
                        <button type="submit" name="create_comment" class="btn btn-primary">Submit</button>
                    </form>
                </div>



                <!-- Posted Comments -->
                    <?php
                        $query ="SELECT * from comments WHERE comment_post_id = $the_post_id ";
                        $query .= "AND comment_status = 'approved'";
                        $query .= "ORDER BY comment_id DESC";

                        $select_comment_query = mysqli_query($connection,$query);
                        if(!$select_comment_query){
                            die('QUERY FAILED'.mysqli_error($connection));
                        }
                        while($row = mysqli_fetch_assoc($select_comment_query)){
                            $comment_date = $row['comment_date'];
                            $comment_content = $row['comment_content'];
                            $comment_author = $row['comment_author'];
                   ?>
                   
                   

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <!-- <img class="media-object" src="http://placehold.it/64x64" alt=""> -->
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $comment_author?>
                            <small><?php echo $comment_date?></small>
                        </h4>
                            <?php echo $comment_content?>
                    </div>
                </div>
                   
                     <?php   } ?>



<br><br>

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