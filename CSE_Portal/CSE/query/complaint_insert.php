<?php

$conn=new mysqli("localhost","root","","cms");
//session_start();	
$st_id=$_GET['id'];
$status="Pending";
	$comp_module=$_GET["module"];
	$comp_description=$_GET["description"];
	
	$strSQL = "INSERT INTO `cms`.`complaint` ( `sid`,`Request_type`,`subject_description`,`status`) VALUES ('".$st_id."','".$comp_module."', '".$comp_description."','".$status."') ";
	$rs = mysqli_query($conn, $strSQL);
	
		if($rs)
	{
	
	echo "your complaint has been submitted";	
		
	
		header('Location: ../index.php?controller=student&action=complain');
	}
		else
		echo "failed" .mysqli_error();
	
?>
