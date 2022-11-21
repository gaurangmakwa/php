<?php
    $connection=mysqli_connect("localhost","root","","db_project2");

    $edit_id=$_GET['eid'];

    $query=mysqli_query($connection,"select * from tbl_subcategory where sub_category_id ='{$edit_id}'");
    $row=mysqli_fetch_array($query);

    if($_POST){
        $name=mysqli_real_escape_string($connection,$_POST['sname']);
        $catecoryid=$_POST['cid'];
        $isactive=$_POST['is_active'];

        $uq=mysqli_query($connection,"update tbl_subcategory  set sub_category_name='{$name}',category_id='{$catecoryid}',is_active='{$isactive}' where sub_category_id ='{$edit_id}'");

        if($uq){
            echo "<script>alert('record update');</script>";
               header("location:subcategory-display.php");
            }
    }
?>
<html>
    <body>
        <form method="post">
            subcategory name:<input type="text" name="sname" palceholder="sub category name" required="true" value="<?php echo $row['sub_category_name'] ?>">
            <br>
            category-id:<input type="text" name="cid"  value="<?php echo $row['category_id']?>" >
            <br>
            is active : <select name="is_active"  value="<?php echo $row['is_active']?>">
                <option value="1">yes</option>
                <option value="0">no</option>
            </select>
            <br>
            <input type="submit">
        </form>
    </body>
</html>