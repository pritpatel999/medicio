<?php



function username_exist($username)
{
    // include("../includes/db.php");
    global $connection;
    $query = "SELECT user_name FROM users WHERE user_name='$username'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('QUERY FAILED' . mysqli_error($connection));
    }
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

function users_online()
{
    //ajax request
    if (isset($_GET['onlineusers'])) {
        global $connection;

        if (!$connection) {

            session_start();
            include("../includes/db.php");

            $session = session_id();
            $time = time();
            $time_out_in_second = 10;            //after this seconds whenever 
            $time_out = $time - $time_out_in_second;

            $query = "SELECT * FROM users_online WHERE session = '$session'";
            $send_query = mysqli_query($connection, $query);
            $count = mysqli_num_rows($send_query);


            if ($count == NULL) {
                mysqli_query($connection, "INSERT INTO users_online(session,time) VALUES('$session','$time')");
            } else {
                mysqli_query($connection, "UPDATE users_online SET time = '$time' WHERE session='$session'");
            }

            $users_online_query = mysqli_query($connection, "SELECT * FROM users_online WHERE time>$time_out");
            echo $count_user = mysqli_num_rows($users_online_query);
        }
    }
}
users_online();




function email_exist($email)
{
    global $connection;
    $query = "SELECT user_email FROM users WHERE user_email='$email'";
    $result = mysqli_query($query, $connection);

    if (!$result) {
        die('QUERY FAILED..' . mysqli_error($connection));
    }
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}
