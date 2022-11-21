<?php
    $connection=new mysqli("localhost","root","","db_project2");

    if(isset($_POST['submitbtn'])){
        $name=mysqli_real_escape_string($connection,$_POST['fname']);
        $gender=mysqli_real_escape_string($connection,$_POST['gender']);
        $mobile=mysqli_real_escape_string($connection,$_POST['mobile']);
        $email=mysqli_real_escape_string($connection,$_POST['email']);
        $password=mysqli_real_escape_string($connection,$_POST['password']);
        $cpassword=mysqli_real_escape_string($connection,$_POST['cpassword']);
        $photo="upload/".$_FILES['photo']['name'];

            if($password==$cpassword){
                    $query=mysqli_query($connection,"insert into tbl_student (st_name,st_gender,st_mobile,st_email,st_password,st_photo) values('{$name}','{$gender}','{$mobile}','{$email}','{$password}','{$photo}')");

                    if($query){

                        $fileprocess=move_uploaded_file($_FILES['photo']['tmp_name'],$photo);

                        if($fileprocess){

                            echo "<script>alert('account created!');</script>";
                        }
                    }
            }else{
                echo "<script>alert('password and confirm password must be sem');</script>";
            }

    }
?>
<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            name: <input type="text" name="fname">
            <br>
            gender: <select name="gender">
                <option>male</option>
                <option>female</option>
            </select>
            <br>
            mobile : <input type="number" name="mobile">
            <br>
            email : <input type="email" name="email">
            <br>
            password: <input type="password" name="password">
            <br>
            confirm password: <input type="password" name="cpassword">
            <br>
            photo :<input type="file" name="photo">
            <br>
            <input type="submit" name="submitbtn" value="signup">
        </form>
    </body>
</html>