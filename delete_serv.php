<?php
	include "db.php";

	$sid = $_GET["sid"];

	pg_query($con,"delete from services where serv_id=$sid");

	header('Location: adminservice.php');
?>
	
