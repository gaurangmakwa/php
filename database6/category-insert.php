<?php
    $connection=mysqli_connect("localhost","root","","db_project2");

    if($_POST){
        $name=mysqli_real_escape_string($connection,$_POST['cname']);
        $isactive=mysqli_real_escape_string($connection,$_POST['is_active']);
        

        $query=mysqli_query($connection,"insert into tbl_category(category_name,is_active) values('{$name}','{$isactive}')");

        if($query){
            echo "<script>alert('recorde inserted!');</script>";
        }
    }
?>
<html>
    <body>
        <form method="post">
            category name: <input type="text" name="cname">
            <br>
            is active : <select name="is_active">
                <option value="1">yes</option>
                <option value="0">no</option>
            </select>
            <br>
            <input type="submit">
        </form>
    </body>
</html>