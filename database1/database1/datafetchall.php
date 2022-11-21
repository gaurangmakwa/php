<?php
    $connection=mysqli_connect("localhost","root","","batch1");

    $q=mysqli_query($connection,"select*from tbl_student")or die(mysqli_error($connection));


    $row=mysqli_fetch_all($q);
   
    echo $row[0][0]. $row[0][1]. $row[0][2];
    echo $row[1][0]. $row[1][1]. $row[1][2];

?>