<?php
    session_start();

    if($_POST){
        $name=$_POST['text1'];

        $_SESSION['user']=$name;
        header("location:home.php");
    }
?>
<html>
    <form method="post">
        name:<input type="text" name="text1"/>
        <input type="submit"/>
    </form>
</html>