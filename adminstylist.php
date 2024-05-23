<body>
<?php
	include "db.php";

	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$spec = $_POST["spec"];
	$sal = $_POST["sal"];

	if($name!=null && $phone!=null && $spec!=null && $sal!=null)
	{
		pg_query($con,"insert into stylist(stylist_name, stylist_phone, stylist_spec, stylist_salary, stylist_status) values('$name','$phone','$spec',$sal,'Free')");
	}

	$rs = pg_query($con, "select * from stylist order by stylist_id");
?>
<center><h1><i>Stylist</i></h1><br><br>
<center>
<table border="1" bordercolor="red" width='50%'>
<tr>
	<td style='padding:10px;'><b>Stylist ID</b></td>
	<td><b>Stylist Name</b></td>
	<td><b>Phone</b></td>
	<td><b>Specialization</b></td>
	<td><b>Salary</b></td>
	<td><b>Status</b></td>
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
	<td><?php echo $row[4]?></td>
	<td><?php echo $row[5]?></td>
	<td align='center'><a href='delete_sty.php?sid=<?php echo $row[0]?>' style='text-decoration:none;background:black;color:white;padding:5px;'>Delete</a></td>
	<td align='center'><a href='update_sty.php?sid=<?php echo $row[0]?>' style='text-decoration:none;background:black;color:white;padding:5px;'>Update</a></td>
</tr>
<?php
      }
?>
</table>

<h2>ADD NEW STYLIST</2>
<form method="post" action="adminstylist.php">
<table>
<tr>
	<td><b>Stylist Name:</b></td>
	<td><input type="text" name="name" required></td>
</tr>
<tr>
	<td><b>Phone:</b></td>
	<td><input type="text" name="phone" required></td>
</tr>
<tr>
	<td><b>Specialization:</b></td>
	<td><input type="text" name="spec" required></td>
</tr>
<tr>
	<td><b>Salary:</b></td>
	<td><input type="text" name="sal" required></td>
</tr>
<tr>
	<td><input type="submit" value="ADD"></td>
	<td><input type="reset" value="CLEAR"></td>
</tr>
</table>
</form>
</body>
