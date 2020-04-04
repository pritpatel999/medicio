<?php include "includes/admin_header.php";?>


<!-- wrapper -->
<div id="wrapper">


<!-- navigation -->
<?php include "includes/admin_navigation.php"; ?>

<div id="page-wrapper">

<div class="container-fluid"  style="width:81vw; margin-top:50px;">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Project Admin
                <small><?php echo $_SESSION['user_name']; ?></small>
            </h1>

            <?php 
        if(isset($_GET['source'])){
            $source = $_GET['source'];
        }else{
            $source = '';
        }

        switch($source){
            case 'add_post':
            include "includes/add_post.php";
            break;

            case 'edit_post':
            include "includes/edit_post.php";
            break;

            default:
            include "includes/view_all_posts.php";
            break;
        }
        
        
        ?>
      


        </div>
    </div>
    <!-- /.row -->





    
<!-- end of container fluid -->
</div>

<!-- end of page-wrapper -->
</div>






<?php include "includes/admin_footer.php";?>