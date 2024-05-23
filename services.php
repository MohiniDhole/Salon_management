<body>
<form method="post" action="servicestotal.php">
<?php
	include "db.php";

	$rs = pg_query($con, "select * from services order by serv_id");
?>
<center><h1><i>Services</i></h1><br><br>
<center>
<table border=1 bordercolor=red>
<tr>
	<td><b>Service ID</b></td>
	<td><b>Service Name</b></td>
	<td><b>Price</b></td>
	<td><b>Service Type</b></td>
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
	<td><input type="checkbox" name="servselect[]" value="<?php echo $row[2]?>"></td>
</tr>
<?php
      }
?>
</table>
<input type="submit" value="SUBMIT" style='background:black;color:white;padding:10px;'> 
<input type="reset" value="CLEAR" style='background:black;color:white;padding:10px;'>
</form>
</body>
