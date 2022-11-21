<?php
    $connection=mysqli_connect("localhost","root","","nitindb1");
    if($_POST){
        $fname=$_POST['text1'];
        $lname=$_POST['text2'];
        $email=$_POST['text3'];
        $password=$_POST['text4'];
        $address=$_POST['text5'];
    $query=mysqli_query($connection,"insert into tbl_student(st_fname,st_lname,st_email,st_password,st_address)values('{$fname}','{$lname}','{$email}','{$password}','{$address}')");

    if($query){
        echo "<script>alert('record added');</script>";
    }
    }
?>
<html>
    <body>
        <form method="post">
            <tr>
                <td>
                firstname:<input type="text" name="text1"><br>
                </td>
            </tr>
            <tr>
                <td>
               lastname :<input type="text" name="text2"><br>
                </td>
            </tr>
            <tr>
                <td>
               email :<input type="text" name="text3"><br>
                </td>
            </tr>
            <tr>
                <td>
               password :<input type="text" name="text4"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea name="text5"></textarea><br>
                </td>
            </tr>
            <input type="submit">
        </form>
    </body>
</html>