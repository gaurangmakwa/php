<?php
    require './connection.php';

    if($_POST){
        $catname=$_POST['catname'];
        $sname = mysqli_real_escape_string($connection,$_POST['sname']);
        $isactive = $_POST['isactive'];

        $insertquery=mysqli_query($connection,"insert into tbl_subcategory (sub_category_name,category_id,is_active)values('{$sname}','{$catname}','{$isactive}')");

        if($insertquery){
            echo "<script>alert('record inserted');</script>";
        }
    }


?>
<html>
    <body>
        <form method="post">
            subcategoryname : <input type="text" name="sname" required="true" placeholder="enter sub category">
            <br>
        <?php
            $selectquery=mysqli_query($connection,"select * from tbl_category");
            echo "category : <select name='catname'>";
                while($categoryrow=mysqli_fetch_array($selectquery)){
                    echo "<option value='{$categoryrow['category_id']}'>{$categoryrow['category_name']}</option>";
                }
            echo "</select>";
        ?>
            <br/>
            isactive : <select name="isactive">
                <option value="1">yes</option>
                <option value="0">no</option>
            </select>
            <br/>
            <input type="submit">

        </form>
    </body>
</html>