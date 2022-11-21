<?php
    echo  "first line<br/>";
        if(file_exists("sample.txt")){
            $file= fopen("sample.txt","r");
        }else{
            die("error: the file you are trying to access doesn't exist.");
        }
    echo "<br/>last line";
?>