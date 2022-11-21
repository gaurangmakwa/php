<?php
    if(isset($_POST['btn'])){
        $a=$_POST['text1'];

        echo strlen("$a");
    }
    echo '<br>';
    if(isset($_POST['btn'])){
        $b=$_POST['text2'];

        echo strtoupper("$b");
    }
    echo '<br>';
    if(isset($_POST['btn'])){
        $c=$_POST['text3'];

        echo strtolower("$c");
    }
    echo '<br>';
    if(isset($_POST['btn'])){
        $d=$_POST['text4'];

        echo ucfirst("$d");
    }
    echo '<br>';
    if(isset($_POST['btn'])){
        $e=$_POST['text5'];

        echo strtoupper("$e");
    }
    echo '<br>';
    if(isset($_POST['btn'])){
        $f=$_POST['text6'];

        echo strrev("$f");
    }
?>
<html>
    <body>
        <form method="post">
            
            enter a:<input type="text" name="text1"/>
             enter b:<input type="text" name="text2"/>
            enter c:<input type="text" name="text3"/>
            enter d:<input type="text" name="text4"/>
            enter e:<input type="text" name="text5"/>
            enter f:<input type="text" name="text6"/>
            <input type="submit" value="submit" name="btn"/>
        </form>
    </body>
</html>