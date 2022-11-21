<?php
    $connection=mysqli_connect("localhost","root","","batch1");

    $q=mysqli_query($connection,"select*from tbl_student")or die(mysqli_error($connection));

    $row=mysqli_fetch_row($q);

    echo $row[0]. $row[1]. $row[2];


?>