<?php ob_start();?>
<?php session_Start();?>
<?php include "../includes/db.php";?>
<?php include "admin_functions.php";?>

<?php
if(!isset($_SESSION['user_role'])){
    header("Location:../index.php");
}else{
    if($_SESSION['user_role']!='admin'){
    header("Location:../index.php");
}}
?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Health Studio Admin</title>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="css/style.css" rel="stylesheet">
        
        <!-- this script is for chart -->
        <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
        
        <!-- download ckeditor from internet. and link this here. -->
        <!-- also write 'body' in id of textarea of add_post.php file and also write body in script.js file. -->
        <!-- attach script.js file at the end of coding in admin_footer.php file. -->
        
        <script src="js/editor.js"></script>
        <script src="js/jquery.js"></script>
        
    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="js/bootstrap.min.js"></script> -->

<style>

@media(max-width:1243px){
    .form_scroll{
        overflow:scroll;
    }
}


</style>



</head>

<body>
