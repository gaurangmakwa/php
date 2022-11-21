<?php
        session_start();
     $connection=new mysqli("localhost","root","","db_aptutorials");

     if($_POST){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $selectquery=mysqli_query($connection,"select * from tbl_student where st_email='{$email}' and st_password='{$password}'");
        $count=mysqli_num_rows($selectquery);
        $row= mysqli_fetch_array($selectquery);

       if($count>0){
            $_SESSION['studentid']= $row['st_id'];
            $_SESSION['studentname']= $row['st_name'];

            header("location:home.php");
       }else{
        echo "<script>alert('email and password not match.')</script>";
       }
    
     }
?>
<html>
    <body>
        <form method="post">
            email : <input type="email" name="email" required="true" placeholder="enter email">
            password : <input type="password" name="password" required="true" placeholder="enter passowrd">

            <input type="submit" value="login">
        </form>
    </body>
</html>