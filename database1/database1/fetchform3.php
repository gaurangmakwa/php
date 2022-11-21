<?php
    $connection=mysqli_connect("localhost","root","","nitindb1");

    $query=mysqli_query($connection,"select*from tbl_student");

    $row=mysqli_fetch_row($query);

    echo $row[0].$row[1].$row[2];


?>