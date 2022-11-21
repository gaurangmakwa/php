<?php
$connection = mysqli_connect("localhost","root","","db_demo");

if ($_POST) {
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $age=$_POST['txt3'];
    $mobile=$_POST['txt4'];
    $email=$_POST['txt5'];
    $pwd=$_POST['txt6'];
    $result=$_POST['txt7'];
    

    $q=mysqli_query($connection,"insert into tbl_student (st_name,st_gender,st_age,st_mobile,st_email,st_pwd,st_result)values('{$name}','{$gender}','{$age}','{$mobile}','{$email}','{$pwd}','{$result}')");

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
                    <td>Name</td>
                    <td><input type="text" name="txt1"/></td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td>
                        <select name="txt2">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="text" name="txt3"></td>
                </tr>
                
                 <tr>
                    <td>Mobile</td>
                    <td><input type="text" name="txt4"></td>
                </tr>
                 <tr>
                    <td>email</td>
                    <td><input type="text" name="txt5"></td>
                </tr>
                 <tr>
                    <td>password</td>
                    <td><input type="text" name="txt6"></td>
                </tr>
                 <tr>
                    <td>result</td>
                    <td><input type="text" name="txt7"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>
