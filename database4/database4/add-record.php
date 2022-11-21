<?php
	include "include/connection.php";
	include "add-record-db.php";
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
						<input type="radio" name="color" value="red"/>red
						<input type="radio" name="color" value="green"/>green
						<input type="radio" name="color" value="yellow"/>yellow
						<input type="radio" name="color" value="brown"/>brown
					</td>
				</tr>
				<tr>
					<td>car</td>
					<td>
						<input type="radio" name="car" value="honda"/>honda
						<input type="radio" name="car" value="bmw"/>bmw
						<input type="radio" name="car" value="rangerover"/>rangerover
						<input type="radio" name="car" value="duster"/>duster
					</td>
				</tr>
				<tr>
					<td>name</td>
					<td>
						<input type="radio" name="name" value="gaurang"/>gaurang
						<input type="radio" name="name" value="akash"/>akash
						<input type="radio" name="name" value="dharmesh"/>dharmesh
						<input type="radio" name="name" value="nilesh"/>nilesh
					</td>
				</tr>
				<tr>
					<td>fastfood</td>
					<td>
						<input type="radio" name="fastfood" value="humburger"/>humburger
						<input type="radio" name="fastfood" value="cheeseburger"/>cheeseburger
						<input type="radio" name="fastfood" value="sandwish"/>sandwish
						<input type="radio" name="fastfood" value="burrito"/>burrito
					</td>
				</tr>
				<tr>
					<td>country</td>
					<td>
						<input type="radio" name="country" value="india"/>india
						<input type="radio" name="country" value="america"/>america
						<input type="radio" name="country" value="china"/>china
						<input type="radio" name="country" value="canada"/>canada
					</td>
				</tr>
				<tr>
					<td valign="top">Color name</td>
					<td>
						<select name="color_name">
							<option value="">-select-</option>
							<option>red</option>
							<option>green</option>
							<option>yellow</option>
							<option>brown</option>
						</select>
					</td>
				</tr>
				<tr>
					<td valign="top">Car name</td>
					<td>
						<select name="car_name">
							<option value="">-select-</option>
							<option>honda</option>
							<option>bmw</option>
							<option>rangerover</option>
							<option>duster</option>
						</select>
					</td>
				</tr>
				<tr>
					<td valign="top">enter name</td>
					<td>
						<select name="enter_name">
							<option value="">-select-</option>
							<option>gaurang</option>
							<option>akash</option>
							<option>dharmesh</option>
							<option>nilesh</option>
						</select>
					</td>
				</tr>
				<tr>
					<td valign="top">fast food</td>
					<td>
						<select name="fast_food">
							<option value="">-select-</option>
							<option>humburger</option>
							<option>cheeseburger</option>
							<option>sandwish</option>
							<option>burrito</option>
						</select>
					</td>
				</tr>
				<tr>
					<td valign="top">country name</td>
					<td>
						<select name="country_name">
							<option value="">-select-</option>
							<option>india</option>
							<option>america</option>
							<option>china</option>
							<option>canada</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>color check</td>
					<td>
						<input type="checkbox" name="color_check[]" value="red" /> red
						<input type="checkbox" name="color_check[]" value="green" /> green
						<input type="checkbox" name="color_check[]" value="yellow" /> yellow
						<input type="checkbox" name="color_check[]" value="brown" /> brown
					</td>
				</tr>
				<tr>
					<td>car check</td>
					<td>
						<input type="checkbox" name="car_check[]" value="honda" /> honda
						<input type="checkbox" name="car_check[]" value="bmw" /> bmw
						<input type="checkbox" name="car_check[]" value="rangerover" /> rangerover
						<input type="checkbox" name="car_check[]" value="duster" /> duster
					</td>
				</tr>
				<tr>
					<td>name check</td>
					<td>
						<input type="checkbox" name="name_check[]" value="gaurang" /> gaurang
						<input type="checkbox" name="name_check[]" value="akash" /> akash
						<input type="checkbox" name="name_check[]" value="dharmesh" /> dharmesh
						<input type="checkbox" name="name_check[]" value="nilesh" /> nilesh
					</td>
				</tr>
				<tr>
					<td>fastfood check</td>
					<td>
						<input type="checkbox" name="fastfood_check[]" value="humburger" /> humburger
						<input type="checkbox" name="fastfood_check[]" value="cheeseburger" /> cheeseburger
						<input type="checkbox" name="fastfood_check[]" value="sanwish" />sandwish
						<input type="checkbox" name="fastfood_check[]" value="burrito" /> burrito
					</td>
				</tr>
				<tr>
					<td>country check</td>
					<td>
						<input type="checkbox" name="country_check[]" value="india" /> india
						<input type="checkbox" name="country_check[]" value="america" /> america
						<input type="checkbox" name="country_check[]" value="china" /> china
						<input type="checkbox" name="country_check[]" value="canada" /> canada
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="addrecord" value="Submit" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
	