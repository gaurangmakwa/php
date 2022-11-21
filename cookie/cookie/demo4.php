<html>
<body style="background-color:
    <?php
    if(isset($_COOKIE['color'])){


        setcookie('color',$color,time()+3600);
        $_COOKIE['color'];
     header("location:demo5.php");
        
    }

    echo $color;
?>">


        <form method="post" action="demo5.php">
            <input type="text" name="color"/>
            <input type="submit" name="submit" value="submit"/>
        </form>
</body>
</html>
