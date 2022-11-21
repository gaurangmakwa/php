<?php
    $connection=mysqli_connect("localhost","root","","db_aytutorials");

   

    if($_POST){
        $name=$_POST['fname'];
        $gender=$_POST['gender'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $photo="upload/".$_FILES['photo']['name'];

        $query=mysqli_query($connection,"insert into tbl_student (st_name,st_gender,st_mobile,st_email,st_password,st_photo) values('{$name}','{$gender}','{$mobile}','{$email}','{$password}','{$photo}')");
        
        if($query){
          $file= move_uploaded_file($_FILES['photo']['tmp_name'],$photo);
            if($file){
                echo "<script>alert('recorde added');</script>";
            }
        }
    }
?>
<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            name : <input type="text" name="fname">
            <br>
            gender : <select name="gender">
                    <option>male</option>
                    <option>female</option>
                </select>
            <br>
            mobile : <input type="number" name="mobile">
            <br>
            email : <input type="email" name="email">
            <br>
            password : <input type="text" name="password">
            <br>
            photo : <input type="file" name="photo">
            <br>
            <input type="submit" >
        </form>
    </body>
</html>