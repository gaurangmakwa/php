<?php
     require './connection.php';

    $sql="SELECT
    `tbl_subcategory`.`sub_category_id`
    , `tbl_subcategory`.`sub_category_name`
    , `tbl_category`.`category_name`
    , `tbl_subcategory`.`is_active`
    , `tbl_subcategory`.`insert_date`
FROM
    `tbl_category`
    INNER JOIN `tbl_subcategory` 
        ON (`tbl_category`.`category_id` = `tbl_subcategory`.`category_id`)
ORDER BY `tbl_subcategory`.`sub_category_id` ASC;";
     $query=mysqli_query($connection,$sql);

     echo "<table border='1'>";
        echo "<tr>";
            echo "<th>id</th>";
            echo "<th>subcategory</th>";
            echo "<th>category</th>";
            echo "<th>isactive</th>";
            echo "<th>insert date</th>";
        echo "</tr>";

        while($row=mysqli_fetch_array($query)){
            echo "<tr>";
                echo "<td>{$row['sub_category_id']}</td>";
                echo "<td>{$row['sub_category_name']}</td>";
                echo "<td>{$row['category_name']}</td>";
                echo "<td>{$row['is_active']}</td>";
                echo "<td>{$row['insert_date']}</td>";
            echo "</tr>";
        }
     echo "</table>";
?>