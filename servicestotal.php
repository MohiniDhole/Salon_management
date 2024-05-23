<body>
<?php
	$serv = $_POST["servselect"];

 	$servsum=0;

 	if($serv!=null)
 	{
  		for($i=0;$i<sizeof($serv);$i++)
			$servsum=$servsum+$serv[$i];
	}
?>
<h1>Your services total will be Rs.<?php echo $servsum?>/-</h1>

</body>
</html>
