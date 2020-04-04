<?php include "includes/admin_header.php"; ?>


<div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin_navigation.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid" style="width:81vw; margin-top:50px;">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12 ">
                    <h1 class="page-header">
                        Welcome to the Admin
                        <small><?php echo $_SESSION['user_name']; ?></small>
                    </h1>

<div class="form_scroll">
                    <table class="table table-bordered table-hover summary" class="form-scroll">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Doc Name</th>
                                <th>Doc Contact</th>
                                <th>Doc Expertise</th>
                                <th>Doc Fee</th>
                                <th>Pat Name</th>
                                <th>Pat Contact</th>
                                <th>Pat Address</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            $query = "SELECT * FROM booking";
                            $select_booking = mysqli_query($connection, $query);

                            while ($row = mysqli_fetch_assoc($select_booking)) {
                                $booking_id = $row['booking_id'];
                                $doc_name = $row['doc_name'];
                                $doc_contact = $row['doc_contact'];
                                $doc_expertise = $row['doc_expertise'];
                                $doc_fee = $row['doc_fee'];
                                $pat_name = $row['pat_name'];
                                $pat_contact = $row['pat_contact'];
                                $pat_address = $row['pat_address'];
                                $appoinment_date = $row['date'];
                                $appoinment_time = $row['time'];




                                echo "<tr>";
                                echo "<td>{$booking_id}</td>";
                                echo "<td>{$doc_name}</td>";
                                echo "<td>{$doc_contact}</td>";
                                echo "<td>{$doc_expertise}</td>";
                                echo "<td>{$doc_fee}</td>";
                                echo "<td>{$pat_name}</td>";
                                echo "<td>{$pat_contact}</td>";
                                echo "<td>{$pat_address}</td>";
                                echo "<td>{$appoinment_date}</td>";
                                echo "<td>{$appoinment_time}</td>";
                                echo "<td><a href='appoinments.php?delete={$booking_id}'>Delete</a></td>";
                                echo "</tr>";
                            }


                            if (isset($_GET['delete'])) {
                                $the_booking_id = $_GET['delete'];


                                $query = "DELETE FROM booking WHERE booking_id={$the_booking_id}";
                                $delete_query = mysqli_query($connection, $query);
                                header("Location:appoinments.php");                //basically this function refresh the page.
                            }
                            ?>


                        </tbody>
                    </table>

                        </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->
    <?php include "includes/admin_footer.php"; ?>
</div>