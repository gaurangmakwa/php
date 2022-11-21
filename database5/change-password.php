<?php
    session_start();

    $connection=new mysqli("localhost","root","","db_aptutorials");

    //login condition
    if(!isset($_SESSION['studentid'])){
        header("location:login.php");
    }

    if($_POST){
        $opass= $_POST['opass'];
        $npass= $_POST['npass'];
        $cpass= $_POST['cpass'];

        $oldpasswordquery=mysqli_query($connection,"select st_password from tbl_student where st_id='{$_SESSION['studentid']}'");

        $oldpasswordfromdb=mysqli_fetch_array($oldpasswordquery);
        //old password condition
    if($oldpasswordfromdb['st_password'] == $opass){
            //new and confirm password condition
            if($npass==$cpass){
                //old and new password must be different
                if($opass==$npass){
                    echo "<script>alert('old and new password must be different');</script>";
                }else{
                    $updateq=mysqli_query($connection,"update tbl_student set st_password='{$npass}' where st_id='{$_SESSION['studentid']}'");
                    if($updateq){
                        echo "<script>alert('password changed');window.location='logout.php'</script>";
                    }
                }
            }else{
                echo "<script>alert('new and confirm must be same');</script>";
            }
    }else{
        echo "<script>alert('old password not match');</script>";
    }
    }

?>
<html>
    <body>
        <form method="post">
            old password : <input type="text" name="opass" placeholder="enter old password" required="true">
            <br/>
            new password : <input type="text" name="npass" placeholder="enter new password" required="true">
            <br/>
            confirm password : <input type="text" name="cpass" placeholder="enter confirm password" required="true">
            <br/>
            <input type="submit">
        </form>
    </body>
</html>