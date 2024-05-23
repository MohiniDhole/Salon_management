<?php
	include "db.php";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$pass = $_POST['pass'];

	$rs = pg_query($con, "select * from client where client_email='$email'");
	if($row = pg_fetch_row($rs))
	{
?>
<h2>Client already registered with this email id.</h2>
<?php
	}
	else
	{
		pg_query($con, "insert into client(client_name, client_phone, client_email, client_pass) values('$name','$phone','$email', '$pass')");
?>
<h2>You are registered successfully.</h2>
<?php
	}
?>
<h4>Click <a href='index.php'>here</a> to login.</h4>
