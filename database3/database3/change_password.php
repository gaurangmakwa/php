<?php

    session_start();
    if(!isset($_SESSION['studentid'])){
        header("location:login.php");
    }


    if($_POST){
        $opass = $_POST['opass'];
        $npass = $_POST['npass'];
        $cpass = $_POST['cpass'];

        //Fetch Old Password FROM DB

        $oldpasswordq = mysqli_query($connection, "select st_password  ");

    }


?>

<html>
    <body>
        <form method="post">
        
        Old Password : <input type="text" name="opass" placeholder="Enter Old Password" required="true" />
        <br>
        New Password : <input type="text" name="npass" placeholder="Enter New Password" required="true" />
        <br>
        Confirm Password : <input type="text" name="cpass" placeholder="Enter Confirm Password" required="true" />
        <br>
        <input type="submit">

        </form>
    </body>
</html>