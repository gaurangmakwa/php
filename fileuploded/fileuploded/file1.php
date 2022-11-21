<?php
    if(isset($_POST['btnfile'])){
        //debug array data
       // echo"<pre>";
       // print_r($_FILES);
       $filelocation=$_FILES['txt1']['tmp_name'];
       $filedestination=$_FILES['txt1']['name'];
      //$filesize=$_FILES ['txt1']['size'];


       if( $filedestination<2097152){
         move_uploaded_file($filelocation,"uploaded/".$filedestination);
        echo "file sucessfully uploaded";
        }else{
            echo"the size is not a 2mb";

        }
        return false;
    }
?>
<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            file:<input type="file" name="txt1"/>
            <input type="submit" name="btnfile"/>
        </form>
    </body>
</html>