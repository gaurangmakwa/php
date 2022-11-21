<?php
   $connection=mysqli_connect("localhost","root","","batch1");

   if(isset($_GET['did'])){
      $delete_id=$_GET['did'];
      $query=mysqli_query($connection,"delete from tbl_student where st_id='{$delete_id}'");
   }

   $query=mysqli_query($connection,"select * from tbl_student");

   $count=mysqli_num_rows($query);

   echo "$count record found";


   echo "<table border='1'>";
   echo "<tr>";
      echo "<td>id</td>";
      echo "<td>name</td>";
      echo "<td>gender</td>";
      echo "<td>action</td>";
   echo "</tr>";
   while($row=mysqli_fetch_array($query)){
         echo "<tr>";
            echo "<td>{$row['st_id']}</td>";
            echo "<td>{$row['st_name']}</td>";
            echo "<td>{$row['st_gender']}</td>";

            echo "<td><a href='edit.php?eid={$row['st_id']}'>edit</a>|<a href='display.php?did={$row['st_id']}'>delete</a></td>";
         echo "</tr>";
   }
   echo "</table>"
      
?>