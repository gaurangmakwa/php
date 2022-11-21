<?php
    if(isset($_POST['btn1'])){
        $a=$_POST['text1'];

        echo md5("$a");
    }
    echo '<br>';
    if(isset($_POST['btn2'])){
        $b=$_POST['text2'];

        echo sha1("$b");
    }
?>
<html>
    <form method="post">
        enter a:<input type="text" name="text1" />
        enter b:<input type="text" name="text2"/>
        <input type="submit" name="btn1" value="md5"/>
        <input type="submit" name="btn2" value="sha1"/>

    </form>
</html>