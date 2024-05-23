<?php
	include "db.php";

	$bid = $_GET['bid'];

	pg_query($con, "update booking set status='Complete' where booking_id=$bid");

	header('Location: viewbooking.php');
?>
