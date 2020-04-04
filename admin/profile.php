<?php include "includes/admin_header.php";?>


<?php 

    if(isset($_SESSION['user_name'])){
        $username = $_SESSION['user_name'];
        $query = "SELECT * FROM users WHERE user_name = '{$username}'";
        $select_user_profile_query = mysqli_query($connection,$query);


        while($row = mysqli_fetch_assoc($select_user_profile_query)){
            $user_id = $row['user_id'];
            $username = $row['user_name'];
            // $user_firstname = $row['user_firstname'];
            // $user_lastname = $row['user_lastname'];
            $user_role = $row['user_role'];
            $user_email = $row['user_email'];
            $user_phone = $row['user_phone'];
            $user_password = $row['user_pass'];
        }
    }

?>
<?php

if(isset($_POST['update_profile'])){
    
    $username = $_POST['username'];
    // $user_firstname = $_POST['user_firstname'];
    // $user_lastname = $_POST['user_lastname'];
    // $user_role = $_POST['user_role'];
    $user_phone = $_POST['user_phone'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];


    //if someone dont change image then it will remain same. so we have to write this if statement. 
    if(empty($user_password)){
        $query="SELECT * FROM users WHERE user_id=$user_id";
        $select_pass=mysqli_query($connection,$query);

        while($row = mysqli_fetch_assoc($select_pass)){
            $user_password =$row['user_pass'];
        }
    }


    $query = "UPDATE users SET user_name='{$username}', user_email='{$user_email}', user_phone='{$user_phone}', user_pass='{$user_password}' WHERE user_id = $user_id";
    $profile_update_query = mysqli_query($connection,$query);

    if(!$profile_update_query){
        die('QUERY FAILED'.mysqli_error($connection));
    }

    // confirmQuery($profile_update_query);
}

?>
<div id="wrapper">
        <!-- Navigation -->
        <?php include "includes/admin_navigation.php";?>

        <div id="page-wrapper">

            <div class="container-fluid" style="width:81vw; margin-top:50px;">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        Project Admin
                        <small><?php echo $_SESSION['user_name']; ?></small>                        
                        </h1>
                        
<form action="" method="post" enctype="multipart/form-data" style="min-width:70vw;">       <!--if we want to uplodat pitcture in our form then we have to use attribute called enctype in form.-->

<!-- <div class="form-group">
    <label for="Firstname">Firstname</label>
    <input type="text" value="<?php //echo $user_firstname ?>" name="user_firstname" class="form-control">
</div>
<div class="form-group">
    <label for="Lastname">Lastname</label>
    <input type="text" value="<?php //echo $user_lastname?>" name="user_lastname" class="form-control">
</div> -->

<!-- 
<div class="form-group">
    <label for="user_role">User Role:</label>
<select name="user_role" id="" value="<?php //echo $user_role?>">

    <option value="admin">Admin</option>
    <option value="subscriber">Subscriber</option>

</select>
</div> -->


<div class="form-group">
    <label for="Username">Username</label>
    <input type="text" name="username" value="<?php echo $username?>" class="form-control">
</div>

<div class="form-group">
    <label for="user_email">User Email</label>
    <input type="email" name="user_email" value="<?php echo $user_email?>" class="form-control">
</div>

<div class="form-group">
    <label for="user_phone">User phone</label>
    <input type="phon" name="user_phone" value="<?php echo $user_phone?>" class="form-control">
</div>

<div class="form-group">
    <label for="user_password">User Password</label>
    <input type="password" name="user_password" autocomplete="off" class="form-control">
</div>

<div class="form-group">
    <input type="submit" name="update_profile" class="btn btn-primary" value="Update Profile">
</div>

</form>
                      
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        <?php include "includes/admin_footer.php";?>
</div>