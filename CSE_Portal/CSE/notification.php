<?php
$id=$_GET['id'];
$st="InActive";
$conn=mysqli_connect("localhost","root","","cms");
//$db=mysql_select_db("cms",$conn);
$SQL=" UPDATE notification 
 SET status ='".$st."' WHERE note_id ='".$id."' ";
 $rs = mysql_query($conn, $SQL);

?>