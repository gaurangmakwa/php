<?php
   $connection=mysqli_connect("localhost","root","","db_project1");

   if($_POST){

      $fname=$_POST['text1'];
      $lname=$_POST['text2'];
      $email=$_POST['text3'];
      $password=$_POST['text4'];
      $mobileno=$_POST['text5'];
      $address=$_POST['text6'];
      $hobby=implode("",$_POST['hobby']);
      $photo="upload/".$_FILES['photo']['name'];

      $query=mysqli_query($connection,"insert into tbl_student (st_fname,st_lname,st_email,st_password,st_mobileno,st_address,st_hobby,st_photo)values('{$fname}','{$lname}','{$email}','{$password}','{$mobileno}','{$address}','{$hobby}','{$photo}')");
      if($query){

         $image=move_uploaded_file($_FILES['photo']['tmp_name'],$photo);
         if($image){
        echo "<script>alert('record added');</script>";
         }
      }

   }
?>
<html>
   <body>
      <form method="post" enctype="multipart/form-data">
         first name:<input type="text" name="text1">
         <br>
         last name:<input type="text" name="text2">
         <br>
         email:<input type="text" name="text3">
         <br>
         password:<input type="text" name="text4">
         <br>
         mobile no: <input type="text" name="text5">
         <br>
         address:<textarea name="text6"></textarea>
         <br>
         hobby: <input type="checkbox" name="hobby[]" value="cricket">cricket
               <input type="checkbox" name="hobby[]" value="hocky">hocky
               <input type="checkbox" name="hobby[]" value="football">football
         <br>
         photo:<input type="file" name="photo">
         <br>
         <input type="submit">
      </form>
   </body>
</html>