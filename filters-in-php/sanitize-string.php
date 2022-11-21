<?php
    //sample user comment
    $comment= "<h1>hey there!how you doing today?</h1>";

    //sanitize and print comment string
    $sanitizedcomment=filter_var($comment,FILTER_SANITIZE_STRING);
    echo $sanitizedcomment;

?>