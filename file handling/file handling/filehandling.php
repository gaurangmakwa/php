<?php
    
    $filename="gaurang.txt";
    //read content
    $handle=fopen($filename,'r');
    //read content
    $data=fread($handle,filesize($filename));
    //print data
    echo $data;
    //close file
    fclose ($handle);

    

    //file handling
    //append content
    //open file in various mode a append w write r read
    $handle=fopen ($filename,'a');
    //add content
    fwrite($handle,"this is my file code");
    //close file
    fclose ($handle);

    //read content
    $handle=fopen($filename,'r');
    //read content
    $data=fread($handle,filesize($filename));
    //print data
    echo $data;
    //close file
    fclose ($handle);

    
?>