<?php
    $email="someone@@example.com";

    $sanitizedemail= filter_var($email,FILTER_VALIDATE_EMAIL);

    if($email==$sanitizedemail && filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "the $email is a valid email address";
    }else{
        echo "the $email is not a valid email address";
    }
?>