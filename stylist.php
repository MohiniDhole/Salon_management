<body>
<?php
	include "db.php";
	$rs=pg_query($con, "select * from stylist");
?>
<center><h1><i>Stylist</i></h1><br><br>
<center>
<table border=1 bordercolor=red>
<tr>
	<td><b>Stylist ID</b></td>
	<td><b>Stylist Name</b></td>
	<td><b>Mobile</b></td>
	<td><b>Specialization</b></td>
</tr>
<?php
	while($row = pg_fetch_row($rs))
	{
?>
<tr>
	<td><?php echo $row[0]?></td>
	<td><?php echo $row[1]?></td>
	<td><?php echo $row[2]?></td>
	<td><?php echo $row[3]?></td>
</tr>
<?php
      }
?>
</table>
</body>
