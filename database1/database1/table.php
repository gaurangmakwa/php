<?php
   $connection=mysqli_connect("localhost","root","","gaurangdb1");

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
      echo "<td>firstname</td>";
      echo "<td>lastname</td>";
      echo "<td>email</td>";
      echo "<td>password</td>";
      echo "<td>gender</td>";
      echo "<td>address</td>";
      echo "<td>mobileno</td>";
      echo "<td>hobby</td>";
      echo "<td> mertail status</td>";
      echo "<td> action</td>";
      echo "</tr>";
      while($row=mysqli_fetch_array($query)){
         echo "<tr>";
            echo "<td>{$row['st_id']}</td>";
            echo"<td>{$row['st_firstname']}</td>";
           echo "<td>{$row['st_lastname']}</td>";
           echo "<td>{$row['st_email']}</td>";
           echo "<td>{$row['st_password']}</td>";
           echo "<td>{$row['st_gender']}</td>";
           echo "<td>{$row['st_address']}</td>";
           echo "<td>{$row['st_mobileno']}</td>";
           echo "<td>{$row['st_hobby']}</td>";
           echo "<td>{$row['st_mertialstatus']}</td>";



                  echo "<td><a href='edit.php?eid={$row['st_id']}'>edit</a>| <a href='table.php?did={$row['st_id']}'>delete</td>";
         echo "</tr>";
      }
   echo "</table>";
?>