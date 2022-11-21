<?php

    if(isset($_POST['btnfile'])){
        //debug array data
       // echo"<pre>";
       // print_r($_FILES);
       
       $filelocation=$_FILES['img']['tmp_name'];
       $filedestination=$_FILES['img']['name'];
        
       $filetype=array('images/png','images/jpg');
        
      
 
       if(!array_key_exists($_FILES['img']['type'],$filetype)){
        
        move_uploaded_file($filelocation,"uploaded/". $filedestination);

        echo "please upload a png,jpg file.";
        }else{
             // move uploaded file
        }
    }
?>
<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            file:<input type="file" name="img"/>
            <input type="submit" name="btnfile"/>
        </form>
    </body>
</html> 