<?php include "includes/admin_header.php";?>
    
<div id="wrapper">
        <!-- Navigation -->
        <?php include "includes/admin_navigation.php";?>
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
            case 'add_doctor':
            include "includes/add_doctor.php";
            break;

            case 'edit_doctor':
            include "includes/edit_doctor.php";
            break;

            default:
            include "includes/view_all_doctors.php";
            break;
        }
        ?>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        <?php include "includes/admin_footer.php";?>
</div>