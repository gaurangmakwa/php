<?php
   $connection=mysqli_connect("localhost","root","","db_project1");

   $edit_id=$_GET['eid'];

   $query=mysqli_query($connection,"select * from tbl_student where st_id='{$edit_id}'");
   $row=mysqli_fetch_array($query);
    
   
   if(isset($_POST['submitbtn'])){
      $st_id=mysqli_real_escape_string($connection,$_POST['text1']);
      $fname=mysqli_real_escape_string($connection,$_POST['text2']);
      $lname=mysqli_real_escape_string($connection,$_POST['text3']);
      $email=mysqli_real_escape_string($connection,$_POST['text4']);
      $password=mysqli_real_escape_string($connection,$_POST['text5']);
      $mobileno=mysqli_real_escape_string($connection,$_POST['text6']);
      $address=mysqli_real_escape_string($connection,$_POST['text7']);
      $select=mysqli_real_escape_string($connection,implode(",",$_POST['cbox']));
      $file="upload/".$_FILES['photo']['name'];


      $uq=mysqli_query($connection,"update tbl_student  set st_fname='{$fname}',st_lname='{$lname}',st_email='{$email}',st_password='{$password}',st_mobileno='{$mobileno}',st_address='{$address}' ,st_hobby='{$select}',st_photo='{$file}' where st_id='{$st_id}'");
            move_uploaded_file($_FILES['photo']['tmp_name'],$file);
         if($uq){
            
            move_uploaded_file($_FILES['photo']['tmp_name'],$file);
            
             echo "<script>alert('record update');</script>";
               header("location:display.php");
              
         
         
             }
         }
      
?>
<html>
   <body>
   <form method="post" enctype="multipart/form-data">
             <input type="hidden" value="<?php echo $row['st_id'] ?>" name="text1">
         first name:<input type="text" value="<?php echo $row['st_fname'] ?>" name="text2">
         <br>
         last name:<input type="text"  value="<?php echo $row['st_lname'] ?>" name="text3">
         <br>
         email:<input type="text" value="<?php echo $row['st_email'] ?>"  name="text4">
         <br>
         password:<input type="text" value="<?php echo $row['st_password'] ?>" name="text5">
         <br>
         mobile no:<input type="text"  value="<?php echo $row['st_mobileno'] ?>" name="text6">
         <br>
         address:<textarea name="text7"> <?php echo $row['st_address'] ?></textarea>
         <br>
        hobby: <input type="checkbox" name="cbox[]"   <?php echo $row['st_hobby'] ?> value="cricket" >cricket
             <input type="checkbox" name="cbox[]"  <?php echo $row['st_hobby'] ?> value=" hocky" >hocky
               <input type="checkbox" name="cbox[]" <?php echo $row['st_hobby'] ?>value=" football">football
               <br>
          photo:<input type="file" name="photo" value ="<?php echo "<a href='{$row['st_photo']}'><img style='height:50px;width:50px' src='{$row['st_photo']}'></a>"?>">
         <br>
         <input type="submit" value="update" name="submitbtn">
      </form>
   </body>
</html>