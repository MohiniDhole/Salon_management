<?php
	include "db.php";

	$sid = $_GET['sid'];

	$rs = pg_query($con, "select * from services where serv_id=$sid");
	$row = pg_fetch_row($rs);
?>
<center><h2>UPDATE SERVICES</h2></center>
<form method="post" action="update_serv1.php">
<table align='center'>
<tr>
	<td><b>Service ID:</b></td>
	<td><input type="text" name="sid" value="<?php echo $row[0]?>" readOnly></td>
</tr>
<tr>
	<td><b>Service Name:</b></td>
	<td><input type="text" name="name" value="<?php echo $row[1]?>" required></td>
</tr>
<tr>
	<td><b>Price:</b></td>
	<td><input type="text" name="price" value="<?php echo $row[2]?>" required></td>
</tr>
<tr>
	<td><b>Type:</b></td>
	<td>
	<select name="type" required>
	<option value=''>Select Service Type</option>
	<option value='Makeup' <?php if($row[3]=='Makeup') echo ' selected';?>>Makeup</option>
	<option value='Haircut' <?php if($row[3]=='Haircut') echo ' selected';?>>Haircut</option>
	<option value='Facials' <?php if($row[3]=='Facials') echo ' selected';?>>Facials</option>
	<option value='Hair Coloring' <?php if($row[3]=='Hair Coloring') echo ' selected';?>>Hair Coloring</option>
</tr>
<tr>
	<td><input type="submit" value="UPDATE"></td>
	<td><input type="reset" value="CLEAR"></td>
</tr>
</table>
</form>

