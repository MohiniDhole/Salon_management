<body>
<?php
	include "db.php";
	
	$rs = pg_query($con, "select * from client order by client_id");
?>
<center>
<h1><i>Clients</i></h1><br><br>
<table border=1 bordercolor=red width='50%'>
<tr>
	<td style='padding:20px;'><b>Client ID</b></td>
	<td><b>Client Name</b></td>
	<td><b>Phone</b></td>
	<td><b>Email</b></td>
</tr>
<?php
     	while($row = pg_fetch_row($rs))
	{
?>
<tr>
	<td style='padding:20px;'><?php echo $row[0]?></td>
	<td><?php echo $row[1]?></td>
	<td><?php echo $row[2]?></td>
	<td><?php echo $row[3]?></td>
</tr>
<?php
	}
?>
</table>
</body>
</html>
