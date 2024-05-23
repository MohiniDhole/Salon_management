<?php
	session_start();

	include "db.php";

	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$rs = pg_query($con, "select * from client where client_email='$email' and client_pass='$pass'");

	if($row = pg_fetch_row($rs))
	{
		$_SESSION['cid'] = $row[0];
		header("Location: welcome.php");
	}
	else
	{
?>
<h2>Login failed. Invalid email id or password.</h2>
<h3>Click <a href='index.php'>here</a> to try login again.</h3>
<?php
	}
?>
