<?php
     if(isset($_POST['btn2'])){
        $a=$_POST['text1'];
        $b=$_POST['text2'];


        echo str_replace("$a","$a","yadav","$b");
    }
?>
<html>
    <form method="post">
        enter a:<input type="text" name="text1"/>
        enter b:<input type="text" name="text2"/>
        <input type="submit" name="btn2" value="submit" />
    </form>
</html>