<?php
         $connection = new mysqli("localhost", "root", "", "db_aytutorials");

         $query = mysqli_query($connection, "select * from tbl_student");

         echo "<table border='1'>";
            echo "<tr>";
                echo "<td>ID</td>";
                echo "<td>Name</td>";
                echo "<td>Gender</td>";
                echo "<td>Mobile</td>";
                echo "<td>Email</td>";
                echo "<td>Password</td>";
                echo "<td>Action</td>";

            echo "</tr>";

            while($row = mysqli_fetch_array($query)){   
                echo "<tr>";
                    echo "<td>{$row['st_id']}</td>";
                    echo "<td>{$row['st_nane']}</td>";
                    echo "<td>{$row['st_gender']}</td>";
                    echo "<td>{$row['st_mobile']}</td>";
                    echo "<td>{$row['st_email']}</td>";
                    echo "<td>{$row['st_password']}</td>";
                    echo "<td><a fref='{$row['st_photo']}'><img style='height: 150px; width: 300px; ' src='{$row['st_photo']}'></a></td>";
                    

                echo "</tr>";
            }

         echo "</table>";

?>