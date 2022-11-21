<?php
    $connection=mysqli_connect("localhost","root","","db_project1");

    if(isset($_POST['submitbtn'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $mobileno=$_POST['mobileno'];
        $address=$_POST['address'];
        $photo="upload/".$_FILES['photo']['name'];
        $hobby=implode(",",$_POST['hobby']);

        $query=mysqli_query($connection,"insert into tbl_student (st_fname,st_lname,st_gender,st_email,st_password,st_mobileno,st_address,st_photo,st_hobby) values('{$fname}','{$lname}','{$gender}','{$email}','{$password}','{$mobileno}','{$address}','{$photo}','{$hobby}')");
            if($query){
                $process=move_uploaded_file($_FILES['photo']['tmp_name'],$photo);
                    if($process){
                        echo "<script>alert('record added');</script>";
                    }
            }
    }
?>
<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            first name : <input type="text" name="fname">
            <br>
            last name : <input type="text" name="lname">
            <br>
            gender : <select name="gender">
                <option>male</option>
                <option>female</option>
            </select>
            <br>
            email : <input type="email" name="email">
            <br>
            password : <input type="password" name="password">
            <br>
            mobile no :<input type="number" name="mobileno">
            <br>
            address : <textarea name="address"></textarea>
            <br>
            photo : <input type="file" name="photo">
            <br>
            hobby : <input type="checkbox" name="hobby[]" value="cricket">cricket
                    <input type="checkbox" name="hobby[]" value="hocky">hocky
                    <input type="checkbox" name="hobby[]" value="kabbadi">kabbadi
            <br>
            <input type="submit" name="submitbtn">
        </form>
    </body>
</html>