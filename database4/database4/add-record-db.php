<?php
	if(isset($_POST["addrecord"])){
		$color = $_POST["color"];
		$car = $_POST["car"];
		$name = $_POST["name"];
		$fastfood = 	$_POST["fastfood"];
		$country	=	$_POST["country"];
		$color_name = $_POST["color_name"];
		$car_name = $_POST["car_name"];
		$enter_name = $_POST["enter_name"];
		$fast_food = 	$_POST["fast_food"];
		$country_name	=	$_POST["country_name"];
		$color_check = implode(",",$_POST["color_check"]);
		$car_check = implode (",",$_POST["car_check"]);
		$name_check = implode (",",$_POST["name_check"]);
		$fastfood_check = implode (",",$_POST["fastfood_check"]);
		$country_check	= implode (",",$_POST["country_check"]);
		

		
		

			$sql = "insert into register5 (color,car,name,fastfood,country,color_name,car_name,enter_name,fast_food,country_name,color_check,car_check,name_check,fastfood_check,country_check) 
			values('$color','$car','$name','$fastfood','$country','$color_name','$car_name','$enter_name','$fast_food','$country_name','$color_check','$car_check','$name_check','$fastfood_check','$country_check')";

		
		if(mysqli_query($conn,$sql)){
			echo "Record Inserted";
		}else{
			echo "Record Not Inserted";
		}
	}
?>