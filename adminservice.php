<body>
<?php
	include "db.php";

	$name = $_POST["name"];
	$price = $_POST["price"];
	$type = $_POST["type"];

	if($name!=null && $price!=null && $type!=null)
	{
		pg_query($con,"insert into services(serv_name,serv_price,serv_type) values('$name',$price, '$type')");
	}

	$rs = pg_query($con, "select * from services order by serv_id");
?>
<center><h1><i>Services</i></h1><br><br>
<center>
<table border="1" bordercolor="red" width='50%'>
<tr>
	<td style='padding:10px;'><b>Service ID</b></td>
	<td><b>Service Name</b></td>
	<td><b>Price</b></td>
	<td><b>Service Type</b></td>
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
	<td align='center'><a href='delete_serv.php?sid=<?php echo $row[0]?>' style='text-decoration:none;background:black;color:white;padding:5px;'>Delete</a></td>
	<td align='center'><a href='update_serv.php?sid=<?php echo $row[0]?>' style='text-decoration:none;background:black;color:white;padding:5px;'>Update</a></td>
</tr>
<?php
      }
?>
</table>

<h2>ADD NEW SERVICES</2>
<form method="post" action="adminservice.php">
<table>
<tr>
	<td><b>Service Name:</b></td>
	<td><input type="text" name="name" required></td>
</tr>
<tr>
	<td><b>Price:</b></td>
	<td><input type="text" name="price" required></td>
</tr>
<tr>
	<td><b>Type:</b></td>
	<td>
	<select name="type" required>
	<option value=''>Select Service Type</option>
	<option value='Makeup'>Makeup</option>
	<option value='Haircut'>Haircut</option>
	<option value='Facials'>Facials</option>
	<option value='Hair Coloring'>Hair Coloring</option>
</tr>
<tr>
	<td><input type="submit" value="ADD"></td>
	<td><input type="reset" value="CLEAR"></td>
</tr>
</table>
</form>
</body>
