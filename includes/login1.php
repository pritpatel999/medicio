<?php include "db.php";?>
<?php session_start();?>
<?php include "header.php";?>

<?php
if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection,$username);
    $password = mysqli_real_escape_string($connection,$password);
    

    $query = "SELECT * FROM users WHERE user_name = '{$username}'";
    $select_user_query = mysqli_query($connection,$query);
     
    if(!$select_user_query){
        die('QUERY FAILED FOR LOGIN'.mysqli_error($connection));
    }

    while($row=mysqli_fetch_assoc($select_user_query)){
        $db_user_id = $row['user_id'];
        $db_user_name = $row['user_name'];
        $db_user_email = $row['user_email'];
        $db_user_phone = $row['user_phone'];
        $db_user_pass = $row['user_pass'];
        $db_user_role = $row['user_role'];
    }

    if($password == $db_user_pass){
        $_SESSION['user_name'] = $db_user_name;
        $_SESSION['user_id'] = $db_user_id;
        $_SESSION['user_email'] = $db_user_email;
        $_SESSION['user_phone'] = $db_user_phone;
        $_SESSION['user_pass'] = $db_user_pass;
        $_SESSION['user_role'] = $db_user_role;
   
   
        header("Location:../admin/index.php");
    }else{
        header("Location:../index.php");
    }

}



?>

