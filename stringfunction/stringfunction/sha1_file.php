<?php
    //sha1_file
    $myFile="myfile.txt";
    $encryptedContents= sha1_file($myFile);
    echo $encryptedContents;
?>