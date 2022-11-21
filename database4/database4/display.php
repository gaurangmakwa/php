<?php
	include "include/connection.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Display Record</title>
	</head>
	<body>
		<table border="1" cellpadding="10" cellspacing="0" align="center">
			<tr>
				<td>Id</td>
				<td>color</td>
				<td>car</td>
				<td>name</td>
				<td>fastfood</td>
				<td>country</td>
				<td>color_name</td>
				<td>Car_name</td>
				<td>enter_name</td>
				<td>fast_food</td>
				<td>country_name</td
				<td>color_check</td>
				<td>car_check</td>
				<td>name_check</td>
				<td>fastfood_check</td>
				<td>country_check</td>
				<td>Action</td>
			</tr>
			<?php
				$qry = "select * from register5";
				$res = mysqli_query($conn,$qry);
				
				while($row = mysqli_fetch_assoc($res)){
			?>
			<tr>
				<td><?php echo $row["color"] ?></td>
				<td><?php echo $row["car"] ?></td>
				<td><?php echo $row["name"] ?></td>
				<td><?php echo $row["fastfood"] ?></td>
				<td><?php echo $row["country"] ?></td>
				<td><?php echo $row["color_name"] ?></td>
				<td><?php echo $row["car_name"] ?></td>
				<td><?php echo $row["enter_name"] ?></td>
				<td><?php echo $row["fastfood_name"] ?></td>
				<td><?php echo $row["country_name"] ?></td>
				<td><?php echo $row["color_check"] ?></td>
				<td><?php echo $row["car_check"] ?></td>
				<td><?php echo $row["name_check"] ?></td>
				<td><?php echo $row["fastfood_check"] ?></td>
				<td><?php echo $row["country_check"] ?></td>


				
				<td><?php echo $row["hobbies"] ?></td>
				<td>
					<a href="edit-record.php?id=<?php echo $row["id"]; ?>">Edit</a>
					<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>