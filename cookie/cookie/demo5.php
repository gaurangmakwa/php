<?php
    if(isset($_POST['submit'])){
        $color=$_POST['color'];
        if(isset($_COOKIE['color'])){
        setcookie('color',$color,time()+3600);
        $_COOKIE['color']=$color;
        $_COOKIE['color'];
     echo"".$_COOKIE['color'];
     header("location:demo4.php");
    }

    }
?>
<html>
    <body style="background:<?php echo $color;?>"></body>
</html>


