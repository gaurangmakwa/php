<?php
    session_start();

    echo "Hi ".$_SESSION['studentname'];

    if(!isset($_SESSION['studentid'])){
        
        header("location:login.php");
    }

    echo "<br><a href='logout.php'>Logout</a> | ";
    
    echo "<a href=''>change_password</a>";

?>