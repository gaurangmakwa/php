<?php
    $connection=mysqli_connect("localhost","root","","db_project1");

    $query=mysqli_query($connection,"select * from tbl_student");

    echo "<table border='1'>";
        echo "<tr>";
            echo "<td>id</td>";
            echo "<td>first name</td>";
            echo "<td>last name</td>";
            echo "<td>gender</td>";
            echo "<td>email</td>";
            echo "<td>password</td>";
            echo "<td>mobileno</td>";
            echo "<td>address</td>";
            echo "<td>photo</td>";
            echo "<td>hobby</td>";
        echo "</tr>";
        
    while($row=mysqli_fetch_array($query)){
            echo "<tr>";
                echo "<td>{$row['st_id']}</td>";
                echo "<td>{$row['st_fname']}</td>";
                echo "<td>{$row['st_lname']}</td>";
                echo "<td>{$row['st_gender']}</td>";
                echo "<td>{$row['st_email']}</td>";
                echo "<td>{$row['st_password']}</td>";
                echo "<td>{$row['st_mobileno']}</td>";
                echo "<td>{$row['st_address']}</td>";
                echo "<td><a href='{$row['st_photo']}'><img style='height:50px;width:50px' src='{$row['st_photo']}'></a></td>";
                echo "<td>{$row['st_hobby']}</td>";
            echo "</tr>";
    }
    echo "</table>";
?>