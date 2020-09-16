<?php
$conn=mysqli_connect("localhost","root","","cms");
           
            

$cid = $_GET['cid'];
$status = $_GET['status'];
$sql = "UPDATE student_certificate_requests SET status = '".$status."' WHERE  c_id = '".$cid."'";
               
	    //echo "UPDATE student_certificate_requests SET status = '".$status."' WHERE  c_id = '".$cid."'";

            //mysql_select_db('test_db');
            
		$retval = mysqli_query($conn, $sql );
            

		if($retval){
			
		header("location:admin_request_certificate.php");
		///	echo "updated";

		}else{

			//echo "error";

		}

?>
