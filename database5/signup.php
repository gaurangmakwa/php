<?php
    $connection=new mysqli("localhost","root","","db_aptutorials");
    

    if(isset($_POST['submitbtn'])){
        $name=mysqli_real_escape_string($connection,$_POST['text1']);
        $gender=mysqli_real_escape_string($connection,$_POST['text2']);
        $mobile=mysqli_real_escape_string($connection,$_POST['text3']);
        $email=mysqli_real_escape_string($connection,$_POST['text4']);
        $password=mysqli_real_escape_string($connection,$_POST['password']);
        $cpassword=mysqli_real_escape_string($connection,$_POST['cpassword']);
        $fileuploadpath="upload/".$_FILES['file123']['name'];

        //password and confirm password
        if($password==$cpassword)
        {
        $insertquery=mysqli_query($connection,"insert into tbl_student(st_name,st_gender,st_mobile,st_email,st_password,st_photo)values('{$name}','{$gender}','{$mobile}','{$email}','{$password}','{$fileuploadpath}')");
        //if query executed
        if($insertquery){
            //file upload code
            $fileprocess= move_uploaded_file($_FILES['file123']['tmp_name'],$fileuploadpath);

            if($fileprocess){
                echo "<script>alert('account created !');</script>";
            }
        }

        }else{
            echo "<script>alert('password and confirm password must be same');</script>";
        }

    }
    
?>
<html>
<head>
    <body>
        <form method="post" enctype="multipart/form-data">
            name : <input type="text" name="text1" placeholder="enter name" id=p1>
            <br/>
            gender : <select name="text2">
                <option>male</option>
                <option>female</option>
            </select>
            <br/>
            mobile : <input type="number" name="text3" id=p2>
            <br/>
            email : <input type="email" name="text4" id=p3>
            <br/>
            password : <input type="password" name="password">
            <br/>
            confirm password : <input type="password" name="cpassword">
            <br/>
            photo : <input type="file" name="file123">
            <br/>
            <input type="submit" name="submitbtn">
         </form>
    </body>
</html>