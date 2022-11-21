<?php
    $connection=mysqli_connect("localhost","root","","db_project2");
     
    $query=mysqli_query($connection,"select * from tbl_category");

    echo "<table border='1'>";
        echo "<tr>";
            echo "<td>id</td>";
            echo "<td>name</td>";
            echo "<td>isactive</td>";
            echo "<td>date</td>";
        echo "</tr>";
        while($row=mysqli_fetch_array($query)){
            echo "<tr>";
                echo "<td>{$row['category_id']}</td>";
                echo "<td>{$row['category_name']}</td>";
                echo "<td>{$row['is_active']}</td>";
                echo "<td>{$row['insert_date']}</td>";
            echo "</tr>";
        }
    echo "</table>";
?>