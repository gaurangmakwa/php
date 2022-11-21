<?php
    //sample integer value
    $int= 20;
    //validate sample integer value
    if(filter_var($int,FILTER_VALIDATE_INT)){
        echo "the <b>$int</b> is a valid integer";
    }else{
        echo "the <b>$int</b> is not a valid integer";
    }
?>