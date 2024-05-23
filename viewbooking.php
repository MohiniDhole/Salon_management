<style>
td
{
	padding:10px;
	border: 1px solid black;
}
</style>

<?php
	include "db.php";

	$rs = pg_query($con, "select booking_id, booking_date, serv_name, stylist_name, client_name, client_phone,status from booking, services, stylist, client where booking.serv_id=services.serv_id and booking.stylist_id = stylist.stylist_id and booking.client_id = client.client_id");
?>
<center><h1><i>Bookings</i></h1><br><br>
<center>
<table border=1 bordercolor="red" width="80%">
<tr style='background: red;'>
	<td>Booking ID</td>
	<td>Booking Date</td>
	<td>Service</td>
	<td>Stylist</td>
	<td>Client</td>
	<td>Client Phone</td>
	<td>Status</td>
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
	<td><?php echo $row[4]?></td>
	<td><?php echo $row[5]?></td>
	<td><?php echo $row[6]?></td>
	<td align='center'><?php if($row[6]=='Pending') echo "<a href='change_status.php?bid=$row[0]'>Change Status</a>";?></td>
</tr>
<?php
	}
?>
</table>
</body>
