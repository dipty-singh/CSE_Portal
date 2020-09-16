<?php
$conn=new mysqli("localhost","root","","cms");

	
//session_start();	
$count=$_GET["count"];
		$resource_id=$_GET["resource_id"];
		$resource_name=$_GET["resource_name"];
		$purchase_date=$_GET["purchase_date"];
		$warranty_period=$_GET["warranty_period"];
//$st_id=201352005;
//		$hostel_no=4;
//		$room_no=10;



	$strSQL = "INSERT INTO `cms`.`resources` ( `resource_id`,`resource`, `count`,`purchase_date`,`warranty_period`) VALUES ('".$resource_id."','".$resource_name."', '".$count."','".$purchase_date."','".$warranty_period."') ";
	$rs = mysqli_query($conn, $strSQL);
	
		if($rs)
	{		
	
		header('location: ../index.php?controller=admin&action=hostel_module');
			}
		else{
				header('location: ../failed.php');
	}

	?>