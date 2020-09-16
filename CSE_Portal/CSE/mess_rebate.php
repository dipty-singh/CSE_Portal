	
?>
<?php
$conn=mysqli_connect("localhost","root","","cms");

//session_start();	
	$date1=$_GET["startDate"];
		$Days=$_GET["days"];
		$Desc=$_GET["description"];
	$strSQL = "INSERT INTO `cms`.`rebate` ( `from_date`, `no_of_days`,`description`) VALUES ('".$date1."', '".$Days."','".$Desc."') ";
	$rs = mysqli_query($strSQL);
	
		if($rs)
	{
	
		
		
	
		header('Location: index.php?controller=student&action=mess_module');
	}
		else
		echo "failed" .mysql_error();
	
?>
