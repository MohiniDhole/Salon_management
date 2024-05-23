<?php
	include "db.php";

	$sid = $_POST["sid"];
	$name = $_POST["name"];
	$price = $_POST["price"];
	$type = $_POST["type"];

	pg_query($con,"update services set serv_name='$name', serv_price=$price, serv_type='$type' where serv_id=$sid");

	header('Location: adminservice.php');
?>
	
