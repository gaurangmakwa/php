<?php
    $connection=mysqli_connect("localhost","root","","db_aytutorials");

    if(isset($_GET['did'])){
        $deleted=$_GET['did'];
        $query=mysqli_query($connection,"delete from tbl_student where st_id='{$deleted}' ");
  }

    $query=mysqli_query($connection,"select * from tbl_student");

    echo "<table border='1'>";
        echo "<tr>";
            echo "<td>id</td>";
            echo "<td>name</td>";
            echo "<td>gender</td>";
            echo "<td>email</td>";
            echo "<td>password</td>";
            echo "<td>photo</td>";
            echo "<td>action</td>";
        echo "</tr>";
        while($row=mysqli_fetch_array($query)){
        echo "<tr>";
            echo "<td>{$row['st_id']}</td>";
            echo "<td>{$row['st_name']}</td>";
            echo "<td>{$row['st_gender']}</td>";
            echo "<td>{$row['st_email']}</td>";
            echo "<td>{$row['st_password']}</td>";
            echo "<td><a href='{$row['st_photo']}'><img style='height:50px;width:50px' src='{$row['st_photo']}'></a></td>";

            echo "<td><a href='edit.php?eid={$row['st_id']}'>edit</a>|<a href='display.php?did={$row['st_id']}'>delete</a></td>";
        echo "</tr>";
        }
    echo "</table>";
    
?>