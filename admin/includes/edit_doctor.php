<?php
if(isset($_GET['d_id'])){
    $the_doc_id=$_GET['d_id'];    
}

$query = "SELECT * FROM doctor WHERE doc_id=$the_doc_id";
$select_doc_by_id=mysqli_query($connection,$query);

while ($row=mysqli_fetch_assoc($select_doc_by_id)) {
    $doc_id = $row['doc_id'];
    $doc_name = $row['doc_name'];
    $doc_address = $row['doc_address'];
    $doc_city = $row['doc_city'];
    $doc_contact = $row['doc_contact'];
    $doc_email = $row['doc_email'];
    $doc_expertise = $row['doc_expertise'];
    $doc_fee=$row['doc_fee'];
    // $doc_tags = $row['doc_tags'];
  }


//// move updated data to the database
if(isset($_POST['update_doc'])){

    $doc_name=$_POST['doc_name'];
    $doc_address=$_POST['doc_address'];
    $doc_city=$_POST['doc_city'];
    $doc_contact=$_POST['doc_contact'];
    $doc_email=$_POST['doc_email'];
    
    
    $doc_expertise=$_POST['doc_expertise'];
    $doc_fee=$_POST['doc_fee'];
  

    $doc_image = $_FILES['image']['name'];                        //we have to use files instead of post. first parameter is name of image and second parameter is name.
    $doc_image_temp = $_FILES['image']['tmp_name'];              //this is used to store image as a temporary storage.
    
    move_uploaded_file($doc_image_temp,"../img/$doc_image");

    //if someone dont change image then it will remain same. so we have to write this if statement. 
    if(empty($doc_image)){
        $query="SELECT * FROM doctor WHERE doc_id=$the_doc_id";
        $select_image=mysqli_query($connection,$query);

        while($row = mysqli_fetch_assoc($select_image)){
            $doc_image=$row['doc_img'];
        }
    }

$query="UPDATE doctor SET doc_name='{$doc_name}', doc_address='{$doc_address}', doc_city='{$doc_city}', doc_contact='{$doc_contact}', doc_email='{$doc_email}', doc_expertise='{$doc_expertise}', doc_fee='{$doc_fee}', doc_img='{$doc_image}' WHERE doc_id={$the_doc_id}";

$update_doc=mysqli_query($connection,$query);

// confirmQuery($update_doc);
if(!$update_doc){
    die('QUERY FAILED'.mysqli_error($connection));
}

echo "<p class='bg-success'>doc Updated. <a href='doctors.php'>View doctors</a></p>";

}
?>








<form action="" method="post" enctype="multipart/form-data" class="form_scroll">       <!--if we want to uplodat pitcture in our form then we have to use attribute called enctype in form.-->

<div class="form-group">
    <label for="title">Doctor Name</label>
    <input type="text" name="doc_name" value="<?php echo $doc_name; ?>" class="form-control">
</div>

<!-- <div class="form-group">
<label for="category">Doctor Address</label>
<select name="doc_category" id="">
<?php
//  $query = "SELECT * FROM categories";
//  $select_categories = mysqli_query($connection,$query);

//  confirmQuery($select_categories);

//  while($row = mysqli_fetch_assoc($select_categories)){
//     $cat_id=$row['cat_id'];
//     $cat_title=$row['cat_title'];

//     if($cat_id == $doc_category_id){
//         echo "<option value='{$cat_id}' selected>{$cat_title}</option>";        
//     }else{
//         echo "<option value='{$cat_id}'>{$cat_title}</option>";
//     }

// }

?>
</select>

</div> -->

<div class="form-group">
    <label for="doc_address">Doctor Address</label>
    <input type="text" value="<?php echo $doc_address?>" name="doc_address" class="form-control">
</div>

<div class="form-group">
    <label for="doc_city">Doctor City</label>
    <input type="text" value="<?php echo $doc_city?>" name="doc_city" class="form-control">
</div>


<div class="form-group">
    <label for="doc_contact">Doctor Contact</label>
    <input type="text" value="<?php echo $doc_contact?>" name="doc_contact" class="form-control">
</div>

<div class="form-group">
    <label for="doc_email">Doctor Email</label>
    <input type="text" value="<?php echo $doc_email?>" name="doc_email" class="form-control">
</div>


<div class="form-group">
    <label for="doctor_role">Doctor Expertise:</label>
<select name="doc_expertise" id="">

    <option value="dietitian" selected>Dietitian</option>
    <option value="expert_consultant">Expert Consultant</option>
    <option value="Nutritionist">Nutritionist</option>

</select>
</div>



<div class="form-group">
    <label for="doc_email">Doctor Fee</label>
    <input type="text" value="<?php echo $doc_fee?>" name="doc_fee" class="form-control">
</div>



<!-- <div class="form-group">
<select name="doc_status" id="">
<option value='<?php //echo "$doc_status" ?>'><?php //echo $doc_status?></option>;
<?php
// if($doc_status == 'pending'){
// echo "<option value='published'>published</option>";
// }else{
// echo "<option value='pending'>pending</option>";    
// }
?>



</select>
</div> -->



<!-- 
<div class="form-group">
    <label for="doc_status">doc Status</label>
    <input type="text" value="<?php //echo $doc_status?>" name="doc_status" class="form-control">
</div> -->

<div class="form-group">
<label for="doc_image">Doctor Image</label><br>
<img src='../img/<?php echo $doc_image?>' width=100px;>
</div>
<div class="form-group">
    <input type="file" name="image" class="form-control">
</div>


<div class="form-group">
    <input type="submit" name="update_doc" class="btn btn-primary" value="Update doc">
</div>

</form>