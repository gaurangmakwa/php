<?php
    $connection=mysqli_connect("localhost","root","","db_aytutorials");

    $edit_id=$_GET['eid'];
 
    $query=mysqli_query($connection,"select * from tbl_student where st_id='{$edit_id}'");
    $row=mysqli_fetch_array($query);
     
    
    if(isset($_POST['submitbtn'])){
       $st_id=mysqli_real_escape_string($connection,$_POST['id']);
       $name=mysqli_real_escape_string($connection,$_POST['fname']);
       $gender=mysqli_real_escape_string($connection,$_POST['gender']);
       $mobileno=mysqli_real_escape_string($connection,$_POST['mobile']);
       $email=mysqli_real_escape_string($connection,$_POST['email']);
       $password=mysqli_real_escape_string($connection,$_POST['password']);
       $file="upload/".$_FILES['photo']['name'];
 
 
       $uq=mysqli_query($connection,"update tbl_student  set st_name='{$name}',st_gender='{$gender}',st_mobile='{$mobileno}',st_email='{$email}',st_password='{$password}',st_photo='{$file}' where st_id='{$st_id}'");
             move_uploaded_file($_FILES['photo']['tmp_name'],$file);
          if($uq){
             
             move_uploaded_file($_FILES['photo']['tmp_name'],$file);
             
              echo "<script>alert('record update');</script>";
                header("location:display.php");
               
          
          
              }
          }
?>
<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['st_id']?>">
        name : <input type="text" name="fname" value="<?php echo $row['st_name']?>">
            <br>
            gender : <select name="gender" value="<?php echo $row['st_gender']?>">
                    <option>male</option>
                    <option>female</option>
                </select>
            <br>
            mobile : <input type="number" name="mobile" value="<?php echo $row['st_mobile']?>">
            <br>
            email : <input type="email" name="email" value="<?php echo $row['st_email']?>">
            <br>
            password : <input type="text" name="password" value="<?php echo $row['st_password']?>">
            <br>
            photo : <input type="file" name="photo" value="<?php echo $row['st_photo']?>">
            <br>
            <input type="submit" name="submitbtn"> 
        </form>
    </body>
</html>