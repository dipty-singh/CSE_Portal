<?php
$conn=new mysqli("localhost","root","","cms");

//include_once("../../php_includes/check_login_status.php");
?>
<?php
$conn=new mysqli("localhost","root","","cms");

//session_start();	
$st_id=$_GET['id'];
$status="Pending";
	$date1=$_GET["startDate"];
		$Days=$_GET["days"];
		$Desc=$_GET["description"];
		$note="You have new Leave application"; 
		$app="/index.php?controller=admin&action=rebate_status";
		$usr_typ="admin";
	$strSQL1 = "INSERT INTO `cms`.`notification` ( `note`,`app`,`usr_typ`) VALUES ('".$note."','".$app."','".$usr_typ."') ";
	$rs1 = mysqli_query($conn, $strSQL1);	
	$strSQL = "INSERT INTO `cms`.`rebate` ( `st_id`,`from_date`, `no_of_days`,`description`,`status`) VALUES ('".$st_id."','".$date1."', '".$Days."','".$Desc."','".$status."') ";
	$rs = mysqli_query($conn, $strSQL);
	
		if($rs)
	{
	
		
		
	
		header('Location: ../index.php?controller=student&action=mess_module');
	}
		else
		echo("failed" .mysqli_error());
	
?>
