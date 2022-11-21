<?php
    $connection=mysqli_connect("localhost","root","","db_aptutorials");

    if($_POST){
        $name=$_POST['txt1'];
        $gender=$_POST['txt2'];
        $mobile=$_POST['txt3'];
        $email=$_POST['txt4'];
        $password=$_POST['txt5'];

        $q=mysqli_query($connection,"insert into tbl_student (st_name,st_gender,st_mobile,st_email,st_password) values('{$name}','{$gender}','{$mobile}','{$email}','{$password}')");

        if($q){
            echo "<script>alert('record inserted');</script>";
        }
    }
?>
<html>
    <body>
        <form method="post">
            <table>
                <tr>
                    <td>name</td>
                    <td><input type="text" name="txt1" placeholder="enter name" required></td>
                </tr>
                <tr>
                    <td>gender</td>
                    <td>
                        <select name="txt2">
                            <option>male</option>
                            <option>female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>mobile</td>
                    <td><input type="number" name="txt3" required></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input type="email" name="txt4" required></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" name="txt5" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>