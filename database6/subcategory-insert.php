<?php
    $connection=mysqli_connect("localhost","root","","db_project2");

    if($_POST){
        $sname=mysqli_real_escape_string($connection,$_POST['sname']);
        $cname=$_POST['cname'];
        $isactive=$_POST['is_active'];

        $insertquery=mysqli_query($connection,"insert into tbl_subcategory(sub_category_name,category_id,is_active) values('{$sname}','{$cname}','{$isactive}')");

        if($insertquery){
            echo "<script>alert('recorde inserted!');</script>";
        }
    }
?>  
<html>
    <body>
        <form method="post">
            subcategory name:<input type="text" name="sname" palceholder="sub category name" required="true">
            <br>
            <?php
                 $query=mysqli_query($connection,"select * from tbl_category");
                echo " category : <select name='cname'>";
                while($row=mysqli_fetch_array($query)){
                        echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
                }
                echo "</select>";
            ?>
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