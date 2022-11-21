<?php
    $connection=mysqli_connect("localhost","root","","gaurangdb1");

    if($_POST){

        $fname=$_POST['text1'];
        $lname=$_POST['text2'];
        $email=$_POST['text3'];
        $password=$_POST['text4'];
        $gender=$_POST['text5'];
        $address=$_POST['text6'];
        $mobileno=$_POST['text7'];
        $hobby=$_POST['text8'];
        $mertialstatus=$_POST['text9'];
       
    $query=mysqli_query($connection,"insert into tbl_student(st_firstname,st_lastname,st_email,st_password,st_gender,st_address,st_mobileno,st_hobby,st_mertialstatus) values('{$fname}','{$lname}','{$email}','{$password}','{$gender}','{$address}','{$mobileno}','{$hobby}','{$mertialstatus}')")or die(mysqli_error($connection));

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
                    lastname:<input type="text" name="text2"><br>
                </td>
            </tr>
            <tr>
                <td>
                    email:<input type="text" name="text3"><br>
                </td>
            </tr>
            <tr>
                <td>
                    password:<input type="text" name="text4"><br>
                </td>
            </tr>
            <tr>
                <td>
                     gender:<select name="text5"><br>
                        <option>male</option>
                        <option>fmale</option>

                    </select><br>
                </td>
            </tr>
            <tr>
                <td>
                    address:<textarea name="text6"></textarea><br>
                </td>
            </tr>
            <tr>
                <td>
                     mobileno:<input type="text" name="text7"><br>
                </td>
            </tr>
            <tr>
                <td>
                     hobby:<select name="text8"><br>
                        <option>cricket</option>
                        <option>football</option>

                    </select><br>
                </td>
            </tr>
            <tr>
                <td>
                     mertail status:<input type="radio" name="text9" value="single">single
                                    <input type="radio" name="text9" value="married">married<br>
                </td>
            </tr>
            <input type="submit"><br>
     </form>
    </body>
</html>