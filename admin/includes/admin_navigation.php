<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a href="" class="navbar-brand border-right">Project Admin</a>

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".MyMenu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collpase navbar-collapse MyMenu">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="nav-link">ONLINE USERS: <span class="usersonline"></span></a></li>

            <li class="nav-item"><a href="../index.php" class="nav-link mx-4">HOME PAGE</a></li>


            <li class="dropdown text-center pt-2">
                <a href="#" class="dropdown-toggle text-light" style="text-decoration: none;" data-toggle="dropdown"><i class="fa fa-user"></i><small class="text-capitalize"><?php echo $_SESSION['user_name']; ?></small><b class="caret"></b></a>
                <ul class="dropdown-menu dropdown-menu-right" >
                    <li>
                        <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>



        </ul>
    </div>
</nav>





<nav class="nav flex-column sidenav" style="margin-top:40px; min-height:100vh; background:black!important; min-width:200px; position:fixed; padding:10px;">



    <a href="index.php" class="nav-link text-light"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
   
    <a class="text-light pl-3 pt-3" href="javascript:;" data-toggle="collapse" data-target="#post_dropdown"><i class="fa fa-fw fa-arrows-v text-light" ></i> Post &nbsp;&nbsp;<i class="fa fa-chevron-down"></i></a>
    <ul id="post_dropdown" class="collapse" style="list-style-type: none;">
        <li><a href="posts.php?source=add_post" class="text-light">Add New Post</a></li>
        <li><a href="posts.php" class="text-light">View Posts</a></li>
    </ul>


    <a href="javascript:;" class="text-light pl-3 pt-3" data-toggle="collapse" data-target="#demo" ><i class="fa fa-user "></i>&nbsp; User &nbsp;&nbsp;<i class="fa fa-chevron-down"></i></a>
    <ul id="demo" class="collapse" style="list-style-type: none;">
        <li><a href="users.php" class="text-light">View All Users</a></li>
        <li><a href="users.php?source=add_user" class="text-light">Add Users</a></li>
    </ul>


    <a href="comments.php" class="text-light pt-3 pl-3"><i class="fa fa-fw fa-file"></i> Comments</a>

    <a href="javascript:;" class="text-light pt-3 pl-3" data-toggle="collapse" data-target="#doctors" ><i class="fa fa-user-md " ></i>&nbsp; Doctor &nbsp;&nbsp;<i class="fa fa-chevron-down"></i></a>
    <ul id="doctors" class="collapse" style="list-style-type: none;">
        <li><a href="doctors.php" class="text-light">View All Doctors</a></li>
        <li><a href="doctors.php?source=add_doctor" class="text-light">Add Doctor</a></li>
    </ul>

    <a href="appoinments.php" class="pt-3 pl-3 text-light"><i class="fa fa-fw fa-calendar"></i> Appoinments</a>


    <a href="profile.php" class="pt-3 pl-3 text-light"><i class="fa fa-fw fa-dashboard"></i> Profile</a>






</nav>







<!-- <nav class="navbar navbar-inverse navbar-expand-md navbar-dark navbar-fixed-top" role="navigation"> -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Project Admin</a>
        </div> -->
    <!-- Top Menu Items -->
    <!-- <ul class="nav navbar-right top-nav"> -->

    <!--  //  <li><a>ONLINE USERS:<?php //echo users_online(); 
                                    ?></a></li> -->
    <!--         
        <li><a>ONLINE USERS: <span class="usersonline"></span></a></li>

        <li><a href="../index.php">HOME PAGE</a></li>
       
       
        <li class="dropdown">
                <a href="#" class="dropdown-toggle p-2" data-toggle="dropdown"><i class="fa fa-user"></i><small><?php echo $_SESSION['user_name']; ?></small><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul> -->
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <!-- <div class="collapse navbar-collapse navbar-ex1-collapse abc">
        <ul class="nav navbar-nav side-nav" style="min-height:100vh;">
            <li class="nav-item">
                <a href="index.php" class="nav-link"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>

            <li> -->
                <!-- <div class="dropdown" style="display:block; width:200px; padding-left:15px;"> -->
                <!-- <a href="javascript:;" data-toggle="collapse" data-target="#post_dropdown" style="color:#999;"><i class="fa fa-fw fa-arrows-v" style="color:#999;"></i> Post<span class="caret" style="margin-left:10px; color:white;"></span></a>
                <ul id="post_dropdown" class="collapse">
                    <li><a href="posts.php?source=add_post">Add New Post</a></li>
                    <li><a href="posts.php">View Posts</a></li>
                </ul> -->
                <!-- </div> -->

                <!-- <a href="javascript:;" data-toggle="collapse" data-target="#post_dropdown"><i class="fa fa-fw fa-arrows-v"></i> posts <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="post_dropdown" class="collapse">
                        <li>
        //                    <a href="posts.php?source=add_post">Add New Post</a>
          //              </li>
                        <li>
                            <a href="posts.php">View Posts</a>
                        </li>
                    </ul> -->
            <!-- </li> -->

            <!-- 
                <li>
                    <a href="categories.php"><i class="fa fa-fw fa-wrench"></i> categories</a>
                </li> -->


            <!-- <li> -->
                <!-- <div class="dropdown" style=" width:200px; padding-left:15px;"> -->
                <!-- <a href="javascript:;" data-toggle="collapse" data-target="#demo" style="color:#999;"><i class="fa fa-user " style="color:#999;"></i>&nbsp; User<span class="caret" style="margin-left:10px; color:white;"></span></a>
                <ul id="demo" class="collapse">
                    <li><a href="users.php">View All Users</a></li>
                    <li><a href="users.php?source=add_user">Add Users</a></li>
                </ul> -->
                <!-- </div> -->
            <!-- </li>

            <li>
                <a href="comments.php"><i class="fa fa-fw fa-file"></i> Comments</a>
            </li>


            <li> -->
                <!-- <div class="dropdown" style=" width:200px; padding-left:15px;"> -->
                <!-- <a href="javascript:;" data-toggle="collapse" data-target="#doctors" style="color:#999;"><i class="fa fa-user-md " style="color:#999;"></i>&nbsp; Doctor<span class="caret" style="margin-left:10px; color:white;"></span></a>
                <ul id="doctors" class="collapse">
                    <li><a href="doctors.php">View All Doctors</a></li>
                    <li><a href="doctors.php?source=add_doctor">Add Doctor</a></li>
                </ul> -->
                <!-- </div> -->
            <!-- </li> -->



            <!-- <li>
                    <a href="#" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
        //            <ul id="demo" class="collapse">
        //              <li>
                            <a href="users.php">View All users</a>
                        </li>
                        <li>
                            <a href="users.php?source=add_user">Add User</a>
                        </li>
                    </ul>
                </li> -->

<!-- 
            <li>
                <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i> Profile</a>
            </li>
        </ul>
    </div> -->


    <!-- /.navbar-collapse -->
<!-- </nav> -->