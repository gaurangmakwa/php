<?php
      $connection=mysqli_connect("localhost","root","","gaurangdb1");

      $edit_id=$_GET['eid'];

      $query=mysqli_query($connection,"select * from tbl_student where st_id='{$edit_id}'");
      $row=mysqli_fetch_array($query);

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

            $uq=mysqli_query($connection,"update tbl_student set st_firstname='{$fname}',st_lastname='{$lname}',st_email='{$email}',st_password='{$password}',st_gender='{$gender}',st_address='{$address}',st_mobileno='{$mobileno}',st_hobby='{$hobby}',st_mertialstatus='{$mertialstatus}' where st_id='{$edit_id}'");

            if($uq){
               header("location:table.php");
            }
      }
?>
<html>
    <body>
        <form method="post">
                
            fristname:<input type="text" value="<?php echo $row['st_firstname']; ?>" name="text1">
            <br>
            lastname:<input type="text" value="<?php echo $row['st_lastname']; ?>" name="text2">
            <br>
            email:<input type="text" value="<?php echo $row['st_email']; ?>" name="text3">
            <br>
            password:<input type="text" value="<?php echo $row['st_password']; ?>" name="text4">
            <br>
            gender:<select name="text5"  value="<?php echo $row['st_gender']; ?>" >

                <option>male</option>
                <option>fmale</option>
            </select>
            <br>
            address:<textarea name="text6"  <?php echo $row['st_address']; ?>></textarea>
            <br>
            mobileno:<input type="text" value="<?php echo $row['st_mobileno']; ?>" name="text7">
            <br>
            hobby:<select type="text" value="<?php echo $row['st_hobby']; ?>" name="text8">
                   <option>cricket</option>
                <option>football</option>
             </select>
            <br>
            mertial status:<input type="radio" name="text9"    <?php echo $row['st_mertialstatus']; ?>value="single">single
                           <input type="radio" name="text9"  <?php echo $row['st_mertialstatus']; ?> value="married">married
                        <br>
                         <input type="submit" value="update">

        </form>
    </body>
</html>
