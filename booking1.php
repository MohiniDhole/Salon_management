<?php
	session_start();

	include "db.php";

	$bid = $_POST['bid'];
	$bdate = $_POST['bdate'];
	$srvid = $_POST['srvid'];
	$styid = $_POST['styid'];
	$cid = $_SESSION['cid'];
	
	pg_query($con, "insert into booking(booking_date, serv_id, stylist_id, client_id, status) values('$bdate',$srvid,$styid,$cid,'Pending')");
?>
<h1>Thank you for booking.</h1>
