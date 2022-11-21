<?php
    $connection = new mysqli("localhost", "root", "", "db_aytutorials");

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($connection,$_POST['txt1']);
        $gender = mysqli_real_escape_string($connection,$_POST['txt2']);
        $mobile = mysqli_real_escape_string($connection,$_POST['txt3']);
        $email = mysqli_real_escape_string($connection,$_POST['txt4']);
        $password = md5( mysqli_real_escape_string($connection,$_POST['password']));
        $confirmpassword = md5( mysqli_real_escape_string($connection,$_POST['cpassword']));
        $fileuploadpath  = "upload/".$_FILES['file123']['name'];

        if($password==$confirmpassword){

        $insertquery = mysqli_query($connection, "insert into tbl_student(st_nane, st_gender, st_mobile, st_email, st_password, st_photo) 
                            values('{$name}','{$gender}','{$mobile}','{$email}','{$password }','{$fileuploadpath}') ") or die(mysqli_error($connection));

                            if($insertquery){
                                $fileprocess = move_uploaded_file($_FILES['file123']['tmp_name'], $fileuploadpath);

                                if($fileprocess){
                                    echo "<script>alert('Account Created !');</script>";
                                }

                            }


    }else{
            echo "<script>alert('Password and Confirm Password Must be Same');</script>";
    }

}

?>

<html>
    <body>
        <form method="post" enctype="multipart/form-data">
        Name : <input type="text" name="txt1" placeholder="Enter Name">
        <br>
        Gender : <select name="txt2" >
            <option >Male</option>
            <option >Female</option>
        </select>
        <br>
        Mobile : <input type="number" name="txt3">
        <br>
        Email : <input type="email" name="txt4">
        <br>
        Password : <input type="password" name="password">
        <br>
        Confirm Password : <input type="password" name="cpassword">
        <br>
        Photo : <input type="file" name="file123">
        <br>
        <input type="submit" name="submit">

        </form>
    </body>
</html>