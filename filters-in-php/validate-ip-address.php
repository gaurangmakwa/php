<?php
    $ip="172.16.254.1";

    if(filter_var($ip,FILTER_VALIDATE_IP)){
        echo "the <b>$ip</b>is not a valid ip address";
    }else{
        echo "the <b>$ip</b>is not a valid ip address";;
    }
?>