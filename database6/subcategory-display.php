<?php
    $connection=mysqli_connect("localhost","root","","db_project2");

    if(isset($_GET['did'])){
        $delete=$_GET['did'];
        $query=mysqli_query($connection,"delete from tbl_subcategory where sub_category_id='{$delete}'");
    }

    $query=mysqli_query($connection,"select * from tbl_subcategory");

    echo "<table border='1'>";
        echo "<tr>";
            echo "<td>id</td>";
            echo "<td>subcategory name</td>";
            echo "<td>category-id</td>";
            echo "<td>isactive</td>";
            echo "<td>insert-date</td>";
            echo "<td>action</td>";
        echo "</tr>";
        while($row=mysqli_fetch_array($query)){
            echo "<tr>";
                echo "<td>{$row['sub_category_id']}</td>";
                echo "<td>{$row['sub_category_name']}</td>";
                echo "<td>{$row['category_id']}</td>";
                echo "<td>{$row['is_active']}</td>";
                echo "<td>{$row['insert_date']}</td>";
                echo "<td><a href='subcategory-display.php?did={$row['sub_category_id']}'>delete</a>|<a href='subcategory-edit.php?eid={$row['sub_category_id']}'>edit</td>";
            echo "</tr>";
        }
    echo "</table>";
?>