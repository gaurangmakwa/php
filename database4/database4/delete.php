<?php
	include "include/connection.php";
	
	if(isset($_GET["id"])){
		$id = $_GET["id"];
		
		$qry = "delete from register5 where id=$id";
		
		if(mysqli_query($conn,$qry)){
			header("location: display.php");
			exit;
		}else{
			echo "Record Not Deleted";
		}
	}
?>

