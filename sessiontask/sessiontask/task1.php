<?php
    session_start();

    if(isset($_POST['set'])){
        $name=$_POST['text1'];

        $_SESSION['user']=$name;
        echo"session is set";
        return false;
    }
    if(isset($_POST['get'])){
        $name=$_POST['text1'];

        $_SESSION['user']=$name;
        echo"". $_SESSION['user'];
        return false;
    }
    if(isset($_POST['remove'])){
        $name=$_POST['text1'];

        $_SESSION['user']=$name;
        echo"session is remove";
        unset($_SESSION['user']);
        session_destroy();
        return false;
    }
?>
<html>
    <form method="post">
       name: <input type="text" name="text1"/>
        <input type="submit" value="set" name="set"/>
        <input type="submit" value="get" name="get" />
        <input type="submit" value="remove" name="remove"/>
     </form>
</html>