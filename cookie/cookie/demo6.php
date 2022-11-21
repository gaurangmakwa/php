<?php
    if(isset($_POST['submit'])){
        $color=$_POST['color'];
        setcookie('color',$color,time()+3600);

     echo"".$_COOKIE['color'];
    // header("location:demo4.php");
    }
?>
<html>
    
<form method="post" action="demo7.php" >
            <input type="text" name="color"/>
            <input type="submit" name="submit" value="submit"/>
        </form>
</html>