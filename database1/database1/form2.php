<?php
    $connection=mysqli_connect("localhost","root","","nitindb");
    if($_POST){
        $name=$_POST['text1'];
        $gender=$_POST['text2'];
    $query=mysqli_query($connection,"insert into tbl_student(st_name,st_gender)values('{$name}','{$gender}')");

    if($query){
        echo "<script>alert('record added')</script>";
    }
    }
?>
<html>
    <body>
        <form method="post">
            name:<input type="post" name="text1">
            gender:<select name="text2">
                <option>male</option>
                <option>female</option>
            </select>
            <input type="submit">
        </form>
    </body>
</html>