<form class="form_scroll">
<table class="table table-bordered table-hover summary text-center" style="min-width:70vw;">
    <thead>
        <tr>
            <th  class="text-center">Id</th>
            <th  class="text-center">Username</th>
            <!-- <th  class="text-center">Firstname</th> -->
            <!-- <th  class="text-center">Lastname</th> -->
            <th  class="text-center">Email</th>
            <th  class="text-center">Phone</th>
            <th  class="text-center">Role</th>
            <th  class="text-center">Edit</th>
            <th  class="text-center">Delete</th>
            <!-- <th>Date</th> -->
        </tr>
    </thead>

    <tbody>
        
        <?php
            $query = "SELECT * FROM users";
            $select_users=mysqli_query($connection,$query);
            
            while($row = mysqli_fetch_assoc($select_users)){
                $user_id = $row['user_id'];
                $user_name = $row['user_name'];
                // $user_password = $row['user_password'];
                // $user_firstname = $row['user_firstname'];
                // $user_lastname = $row['user_lastname'];
                $user_email = $row['user_email'];
                $user_phone = $row['user_phone'];
                // $user_image = $row['user_image'];
                $user_role = $row['user_role'];
                
            


            echo "<tr>";
            echo "<td>{$user_id}</td>";
            echo "<td>{$user_name}</td>";
            // echo "<td>{$user_firstname}</td>";
            
            // $query="SELECT * FROM categories WHERE cat_id={$post_category_id}";
            // $select_cat_id=mysqli_query($connection,$query);
            // while($row=mysqli_fetch_assoc($select_cat_id)){
            //     $cat_id=$row['cat_id'];
            //     $cat_title=$row['cat_title'];
            // }            
            // echo "<td>$cat_title</td>";
            
            
            
            
            // echo "<td>{$user_lastname}</td>";
            echo "<td>{$user_email}</td>";
            // echo "<td><img src='../images/$user_image' width=100px;></td>";
            echo "<td>{$user_phone}</td>";
            echo "<td>{$user_role}</td>";
            // echo "<td></td>";
            echo "<td><a href='users.php?source=edit_user&edit_user={$user_id}'>Edit</a></td>";
            echo "<td><a href='users.php?delete={$user_id}'>Delete</a></td>";
            echo "</tr>";
            }


            if(isset($_GET['delete'])){
                if(isset($_SESSION['username'])){
                $the_user_id=$_GET['delete'];
                $query="DELETE FROM users WHERE user_id={$the_user_id}";
                $delete_query=mysqli_query($connection,$query);
                header("Location:users.php");                //basically this function refresh the page.
            }}
?>


    </tbody>
</table>

        </form>