<?php
	include "db.php";

	$rs = pg_query($con, "select count(*) from booking");
	$row = pg_fetch_row($rs);
	$bid = $row[0]+1;

	$rs = pg_query($con, "select current_date");
	$row = pg_fetch_row($rs);
	$bdate = $row[0];
?>

<form method='post' action='booking1.php'>
<table border=1 align='center'>
<tr>
	<td colspan=2><b>BOOKING DETAILS</td>
</tr>
<tr>
	<td><b>Booking ID:</b></td>
	<td><input type='text' name='bid' value='<?php echo $bid?>' readOnly></td>
</tr>
<tr>
	<td><b>Booking Date:</b></td>
	<td><input type='text' name='bdate' value='<?php echo $bdate?>' readOnly></td>
</tr>
<tr>	
	<td><b>Service:</b></td>
	<td>
	<select name='srvid' required>
	<option value=''>Select Your Service</option>
<?php
	$rs = pg_query($con, "select * from services order by serv_id");

	while($row = pg_fetch_row($rs))
	{
?>
	<option value='<?php echo $row[0]?>'><?php echo $row[1]?></option>
<?php
	}
?>
	</select>
	</td>
</tr>
<tr>	
	<td><b>Stylist:</b></td>
	<td>
	<select name='styid' required>
	<option value=''>Select Your Stylist</option>
<?php
	$rs = pg_query($con, "select * from stylist order by stylist_id");

	while($row = pg_fetch_row($rs))
	{
?>
	<option value='<?php echo $row[0]?>'><?php echo $row[1]?></option>
<?php
	}
?>
	</select>
	</td>
</tr>
<tr>
	<td><input type="submit" value="BOOK"></td>
	<td><input type="reset" value="CLEAR"></td>
</tr>
</table>
</form>

	
