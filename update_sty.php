<?php
	include "db.php";

	$sid = $_GET['sid'];

	$rs = pg_query($con, "select * from stylist where stylist_id=$sid");
	$row = pg_fetch_row($rs);
?>
<center><h2>UPDATE SERVICES</h2></center>

<h2>ADD NEW STYLIST</2>
<form method="post" action="update_sty1.php">
<table>
<tr>
	<td><b>Stylist ID:</b></td>
	<td><input type="text" name="sid" value="<?php echo $row[0]?>" readOnly></td>
</tr>
<tr>
	<td><b>Stylist Name:</b></td>
	<td><input type="text" name="name" value="<?php echo $row[1]?>" required></td>
</tr>
<tr>
	<td><b>Phone:</b></td>
	<td><input type="text" name="phone" value="<?php echo $row[2]?>" required></td>
</tr>
<tr>
	<td><b>Specialization:</b></td>
	<td><input type="text" name="spec" value="<?php echo $row[3]?>" required></td>
</tr>
<tr>
	<td><b>Salary:</b></td>
	<td><input type="text" name="sal" value="<?php echo $row[4]?>" required></td>
</tr>
<tr>
	<td><b>Status:</b></td>
	<td>
	<select name="status" required>
	<option value='Free' <?php if($row[5]=='Free') echo ' selected'?>>Free</option>
	<option value='Busy' <?php if($row[5]=='Busy') echo ' selected'?>>Busy</option>
	</select>
	</td>
</tr>
<tr>
	<td><input type="submit" value="UPDATE"></td>
	<td><input type="reset" value="CLEAR"></td>
</tr>
</table>
</form>

