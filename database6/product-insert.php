<?php
    $connection=mysqli_connect("localhost","root","","db_project2");

    if(isset($_POST['submitbtn'])){
        $pro_title=mysqli_real_escape_string($connection,$_POST['pro_title']);
        $pro_details=mysqli_real_escape_string($connection,$_POST['pro_details']);
        $pro_price=mysqli_real_escape_string($connection,$_POST['pro_price']);
        $subcategory_id=mysqli_real_escape_string($connection,$_POST['subcategory']);
        $pro_imagepath=$_FILES['pro_imagepath']['name'];
        $qty=mysqli_real_escape_string($connection,$_POST['qty']);
        $isactive=mysqli_real_escape_string($connection,$_POST['isactive']);

        $insertq=mysqli_query($connection,"insert into tbl_productmaster (pro_title,pro_details,pro_price,pro_imagepath,sub_category_id,qty,is_active,is_delete) values('{$pro_title}','{$pro_details}','{$pro_price}','{$pro_imagepath}','{$subcategory_id}','{$qty}','{$isactive}','0')");
         
        if($insertq){
            $process=move_uploaded_file($_FILES['pro_imagepath']['tmp_name'],"upload/".$pro_imagepath);
                if($process){
                    echo "<script>alert('recorde inserted');</script>";
                }
        }
    }
?>
<html>
        <h1>product insert</h1>
    <body>
        <form method="post" enctype="multipart/form-data">
            name :<input type="text" name="pro_title" placeholder="enter name">
            <br>
            details :
                <textarea name="pro_details"></textarea>
            <br>
            price : <input type="text" name="pro_price">
            <br>
            image :<input type="file" name="pro_imagepath">
            <br>
            <?php
                $query=mysqli_query($connection,"select * from tbl_subcategory");
            echo " subcategory :<select name='subcategory'>";
                    while($row=mysqli_fetch_array($query)){
                        echo "<option value='{$row['sub_category_id']}'>{$row['sub_category_name']}</option>";
                    }
            echo "</select";
            ?>
            <br><br>
            qty :<input type="text" name="qty" placeholder="enter qty">
            <br>
            is active :<select name="isactive">
                <option value="1">yes</option>
                <option value="0">no</option>
            </select>
            <br>
            <input type="submit" value="add product"  name="submitbtn">
        </form>
    </body>
</html>