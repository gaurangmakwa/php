<?php
	include "include/connection.php";
	include "edit-record-db.php";
	
	if(isset($_GET["id"])){
		$id = $_GET["id"];
		$qry = "select * from register where id=$id";
		$res = mysqli_query($conn,$qry);
		$row = mysqli_fetch_assoc($res);
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<form method="post">
			<table border="0" align="center">
				<tr>
					<td>color</td>
					<td>
						<input type="radio" name="color" value="red" <?php if($row["color"]=="red"){echo 
						"checked"; } ?> />red
						<input type="radio" name="color" value="green" <?php if($row["color"]=="green"){echo "checked"; } ?> />green
						<input type="radio" name="color" value="yellow" <?php if($row["color"]=="yellow"){echo "checked"; } ?> />yellow
						<input type="radio" name="color" value="brown" <?php if($row["color"]=="brown"){echo "checked"; } ?> />brown
					</td>
				</tr>
				<tr>
					<td>car</td>
					<td>
						<input type="radio" name="car" value="honda" <?php if($row["car"]=="honda"){echo
						"checked"; } ?> />honda
						<input type="radio" name="car" value="bmw" <?php if($row["car"]=="bmw"){echo
						"checked"; } ?> />bmw
						<input type="radio" name="car" value="rangerover" <?php if($row["car"]=="rangerover"){echo "checked"; } ?> />rangerover
						<input type="radio" name="car" value="duster" <?php if($row["car"]=="duster"){echo "checked"; } ?> />duster
					</td>
				</tr>
				<tr>
					<td>name</td>
					<td>
						<input type="radio" name="name" value="gaurang" <?php if($row["name"]=="gaurang"){echo "checked"; } ?> />gaurang
						<input type="radio" name="name" value="akash" <?php if($row["name"]=="akash"){echo "checked"; } ?> />akash
						<input type="radio" name="name" value="dharmesh" <?php if($row["name"]=="dharmesh"){echo "checked"; } ?> />dharmesh
						<input type="radio" name="name" value="nilesh" <?php if($row["name"]=="nilesh"){echo "checked"; } ?> />nilesh
					</td>
				</tr>
				<tr>
					<td>fastfood</td>
					<td>
						<input type="radio" name="fastfood" value="humburger" <?php if($row["fastfood"]=="humburger"){echo "checked"; } ?> />humburger
						<input type="radio" name="fastfood" value="cheeseburger" <?php if($row["fastfood"]=="cheeseburger"){echo "checked"; } ?> />cheeseburger
						<input type="radio" name="fastfood" value="sandwish" <?php if($row["fastfood"]=="sandwish"){echo "checked"; } ?> />sandwish
						<input type="radio" name="fastfood" value="burrito" <?php if($row["fastfood"]=="burrito"){echo "checked"; } ?> />burrito
					</td>
				</tr>
				<tr>
					<td>country</td>
					<td>
						<input type="radio" name="country" value="india" <?php if($row["country"]=="india"){echo "checked"; } ?> />india
						<input type="radio" name="country" value="america" <?php if($row["country"]=="america"){echo "checked"; } ?> />america
						<input type="radio" name="country" value="china" <?php if($row["country"]=="china"){echo "checked"; } ?> />china
						<input type="radio" name="country" value="canada" <?php if($row["country"]=="canada"){echo "checked"; } ?> />canada
					</td>
				</tr>
				<tr>
					<td valign="top">color name</td>
					<td>
						<select name="color_name">
							<option value="">-select-</option>
							<option <?php if($row["color_name"]=="red"){echo "selected"; } ?>>red</option>
							<option <?php if($row["color_name"]=="green"){echo "selected"; } ?>>green</option>
							<option <?php if($row["color_name"]=="yellow"){echo "selected"; } ?>>yell0w</option>
							<option <?php if($row["color_name"]=="brown"){echo "selected"; } ?>>brown</option>
						</select>
					</td>
				</tr>
				<tr>
					<td valign="top">car name</td>
					<td>
						<select name="car_name">
							<option value="">-select-</option>
							<option <?php if($row["car_name"]=="honda"){echo "selected"; } ?>>honda</option>
							<option <?php if($row["car_name"]=="bmw"){echo "selected"; } ?>>bmw</option>
							<option <?php if($row["car_name"]=="rangerover"){echo "selected"; } ?>>rangerover</option>
							<option <?php if($row["car_name"]=="brown"){echo "selected"; } ?>>duster</option>
						</select>
					</td>
				</tr>
				<tr>
					<td valign="top">enter name</td>
					<td>
						<select name="enter_name">
							<option value="">-select-</option>
							<option <?php if($row["enter_name"]=="gaurang"){echo "selected"; } ?>>gaurang</option>
							<option <?php if($row["enter_name"]=="akash"){echo "selected"; } ?>>akash</option>
							<option <?php if($row["enter_name"]=="dharmesh"){echo "selected"; } ?>>dharmesh</option>
							<option <?php if($row["enter_name"]=="nilesh"){echo "selected"; } ?>>nilesh</option>
						</select>
					</td>
				</tr>
				<tr>
					<td valign="top">fastfood_name</td>
					<td>
						<select name="fastfood_name">
							<option value="">-select-</option>
							<option <?php if($row["fastfood"]=="humburger"){echo "selected"; } ?>>humburger</option>
							<option <?php if($row["fastfood"]=="cheeseburger"){echo "selected"; } ?>>cheeseburger</option>
							<option <?php if($row["fastfood"]=="yellow"){echo "selected"; } ?>>sandwish</option>
							<option <?php if($row["fastfood"]=="burrito"){echo "selected"; } ?>>burrito</option>
						</select>
					</td>
				</tr>
				<tr>
					<td valign="top">country</td>
					<td>
						<select name="country">
							<option value="">-select-</option>
							<option <?php if($row["country"]=="india"){echo "selected"; } ?>>india</option>
							<option <?php if($row["country"]=="america"){echo "selected"; } ?>>america</option>
							<option <?php if($row["country"]=="china"){echo "selected"; } ?>>china</option>
							<option <?php if($row["country"]=="canada"){echo "selected"; } ?>>canada</option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
						<input type="submit" name="editrecord" value="Update" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>