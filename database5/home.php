<?php
    session_start();

    echo "hi ".$_SESSION['studentname'];

    if(!isset($_SESSION['studentid'])){
        header("location:login.php");
    }
    
    echo "<a href='change-password.php'>changepassword</a> |";
    echo " <a href='logout.php'>logout</a>";
?>