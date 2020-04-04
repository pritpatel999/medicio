<?php

// //add new post from admin side
// //this file is come from get request as we put file name in switch case statement. so write "?source=add_post" after post.php file. 
if(isset($_POST['create_doctor'])){
// $doctor_id=$_POST['doctor_id'];
// $doctor_firstname=$_POST['doctor_firstname'];
// $doctor_lastname=$_POST['doctor_lastname'];
$doctorname=$_POST['doctorname'];
$doctor_address=$_POST['doctor_address'];
$doctor_city=$_POST['doctor_city'];
$doctor_phone = $_POST['doctor_phone'];
$doctor_email=$_POST['doctor_email'];

$doctor_expertise=$_POST['doctor_expertise'];

$doctor_fee=$_POST['doctor_fee'];

$doctor_image = $_FILES['doctor_image']['name'];                        //we have to use files instead of post. first parameter is name of image and second parameter is name.
$doctor_image_temp = $_FILES['doctor_image']['tmp_name'];              //this is used to store image as a temporary storage.



// $post_date = date('d-m-y');                                   //to display date we have to use date function.
// $post_comment_count = 0;

//in form if we click on chhose image file and select image with "JPG" extention then it dont work. we have to use image with "png" extention.
//because in inetrnet world we have to use image with "png" extention. because "jpg" image comes with lossy algorithm so it cant be able to fetch.
//so whenever we use image in any website, use image with "png" extention.

move_uploaded_file($doctor_image_temp,"../img/$doctor_image");


// $doctor_password = password_hash($doctor_password,PASSWORD_BCRYPT,array('cost'=>10));


//in this query if we use '(ephostophy s) in title or tag or any string then it show query because in php it cant accept this type of data.
$query="INSERT INTO doctor(doc_name, doc_address, doc_city, doc_contact, doc_email, doc_expertise, doc_fee, doc_img) VALUES('{$doctorname}','{$doctor_address}','{$doctor_city}','{$doctor_phone}','{$doctor_email}','{$doctor_expertise}','{$doctor_fee}','{$doctor_image}')";
$create_doctor_query=mysqli_query($connection,$query);

if(!$create_doctor_query){
    die('QUERY FAILED'.mysqli_error($connection));
}

// confirmQuery($create_doctor_query);

echo "doctor Created: "."<a href='doctors.php'>View doctors</a>";


}?>




<form action="" method="post" enctype="multipart/form-data" class="form_scroll">       <!--if we want to uplodat pitcture in our form then we have to use attribute called enctype in form.-->


<div class="form-group">
    <label for="doctorname">Doctor name:</label>
    <input type="text" name="doctorname" class="form-control">
</div>


<div class="form-group">
    <label for="doctoraddress">Doctor address:</label>
    <input type="text" name="doctor_address" class="form-control">
</div>

<div class="form-group">
    <label for="doctoraddress">Doctor city:</label>
    <input type="text" name="doctor_city" class="form-control">
</div>


<div class="form-group">
    <label for="doctor_phone">Doctor Phone</label>
    <input type="text" name="doctor_phone" class="form-control">
</div>


<div class="form-group">
    <label for="doctor_email">Doctor Email</label>
    <input type="email" name="doctor_email" class="form-control">
</div>



<div class="form-group">
    <label for="doctor_role">Doctor Expertise:</label>
<select name="doctor_expertise" id="">

    <option value="dietitian" selected>Dietitian</option>
    <option value="expert_consultant">Expert Consultant</option>
    <option value="Nutritionist">Nutritionist</option>

</select>
</div>



<div class="form-group">
    <label for="doctor_fee">doctor fee</label>
    <input type="text" name="doctor_fee" class="form-control">
</div>


<div class="form-group">
    <label for="doctor_image">Doctor Image</label>
    <input type="file" name="doctor_image" class="form-control">
</div>

<div class="form-group">
    <input type="submit" name="create_doctor" class="btn btn-primary" value="Add doctor">
</div>

</form>