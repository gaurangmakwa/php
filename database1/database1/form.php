<?php
    $connection=mysqli_connect("localhost","root","","batch1");

    $q=mysqli_query($connection,"insert into tbl_student (st_name,st_gender)values('nilesh','male')");

    if($q){
        echo "<script>alert('record added');</script>";
    }

?>