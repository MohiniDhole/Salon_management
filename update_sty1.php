<?php
	include "db.php";

	$sid = $_POST["sid"];
	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$spec = $_POST["spec"];
	$sal = $_POST["sal"];
	$status = $_POST['status'];

	pg_query($con,"update stylist set stylist_name='$name', stylist_phone='$phone', stylist_spec='$spec', stylist_salary=$sal, stylist_status='$status' where stylist_id=$sid");

	header('Location: adminstylist.php');
?>
	
