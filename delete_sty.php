<?php
	include "db.php";

	$sid = $_GET["sid"];

	pg_query($con,"delete from stylist where stylist_id=$sid");

	header('Location: adminstylist.php');
?>
	
