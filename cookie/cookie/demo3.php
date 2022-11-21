<html>
<body <?php
              setcookie("chk","color",time()+3600);
            $newbgcolor=$_POST['color'];

        
            $_COOKIE['color']=$newbgcolor;

            echo"". $_COOKIE['color'];
?>>
</body>
<form>
        <input type="text" name="color"/>
        <input type="submit" value="submit"/>
    </form>
</html>