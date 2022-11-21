<?php
    session_start();

    echo"hi".$_SESSION['user'];

    if(!isset($_SESSION['user'])){
        header("location:login.php");
    }
   
    echo"<a href='logout.php'>logout</a>";

?>