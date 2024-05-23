<?php
	include "db.php";

	$uid=$_POST["uid"];
	$pass=$_POST["pass"];

	$rs = pg_query($con, "select * from admin where admin_id='$uid' and admin_pwd='$pass'");

	if($row = pg_fetch_row($rs))
	{
		header("Location: admin_home.php");
	}
	else
	{
		header("Location: admin_login.php");
	}
?>
