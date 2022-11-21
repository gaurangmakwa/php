<?php
      require './connection.php';

      if(isset($_POST['submitbtn'])){
         $pro_title=mysqli_real_escape_string($connection,$_POST['pro_title']);
         $pro_details=mysqli_real_escape_string($connection,$_POST['pro_details']);
         $pro_price=mysqli_real_escape_string($connection,$_POST['pro_price']);
         $pro_imagepath=$_FILES['pro_imagepath']['name'];
         $sub_category_id=mysqli_real_escape_string($connection,$_POST['sub_category_id']);
         $qty=mysqli_real_escape_string($connection,$_POST['qty']);
         $is_active=mysqli_real_escape_string($connection,$_POST['is_active']);

         $insertq=mysqli_query($connection,"insert into tbl_productmaster (pro_title,pro_details,pro_price,pro_imagepath,sub_category_id,qty,is_active)values('{$pro_title}','{$pro_details}','{$pro_price}','{$pro_imagepath}','{$sub_category_id}','{$qty}','{$is_active}')");
                  if($insertq){
                    $fileupload= move_uploaded_file($_FILES['pro_imagepath']['tmp_name'],"upload/".$pro_imagepath);

                    if($fileupload){
                           echo "<script>alert('product added');</script>";
                    }
                  }
      }
?>
<html>
   <body>
      <form method="post" enctype="multipart/form-data">

         <h1>product insert</h1>

         <table>
            <tr>
               <td>name</td>
               <td><input type="text" name="pro_title" placeholder="enter name" ></td>
            </tr>
            <tr>
               <td>details</td>
               <td><textarea name="pro_details"></textarea></td>
            </tr>
            <tr>
               <td>price</td>
               <td><input type="text" name="pro_price" placeholder="enter name" ></td>
            </tr>
            <tr>
               <td>image</td>
               <td><input type="file" name="pro_imagepath" ></td>
            </tr>
            <tr>
               <td>sub category</td>                                                                             
               <td>
                  <?php
                     $subcategoryq=mysqli_query($connection,"select * from tbl_subcategory");

                     echo "<select name='sub_category_id'>";
                        while($subcatrow=mysqli_fetch_array($subcategoryq)){
                           echo "<option value='{$subcatrow['sub_category_id']}'>{$subcatrow['sub_category_name']}</option>";
                        }
                     echo "</select>";
                  ?>
               </td>
            </tr>
            <tr>
               <td>qty</td>
               <td><input type="text" name="qty" placeholder="enter qty" ></td>
            </tr>
            <tr>
               <td>is_active</td>
               <td><select name="is_active">
                        <option value="1">yes</option>
                        <option value="0">no</option>
               </slect></td>
            </tr>
            <tr>
               <td></td>
               <td><input type="submit" value="add product"  name="submitbtn"></td>
            </tr>
         </table>
      </form>
   </body>
</html>