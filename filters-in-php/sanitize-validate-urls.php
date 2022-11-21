<?php
    $url="http:://wwww.example.com";

    $sanitizedurl=filter_var($url,FILTER_SANITIZE_URL);

    if($url== $sanitizedurl && filter_var($url,FILTER_VALIDATE_URL)){
        echo "the $url is a valid website";
    }else{
        echo "the $url is not a valid website url";
    }
?>