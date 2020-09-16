       <?php
       //include_once("php_includes/check_login_Staus.php");
       $sid=$_POST['id'];

         if(isset($_POST['add']))
         {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn=new mysqli("localhost","root","","cms");

            if(! $conn )
            {
               die('Could not connect: ' . mysqli_error());
            }

            if(! get_magic_quotes_gpc() )
            {
               $emp_name = addslashes ($_POST['emp_name']);
               $emp_address = addslashes ($_POST['emp_address']);
            }
            else
            {
               $emp_name = $_POST['emp_name'];
               $emp_address = $_POST['emp_address'];
            }

            // $emp_salary = $_POST['emp_salary'];

            $sql = "INSERT INTO certificate(request_type,purpose, request_date) VALUES('".$emp_address."','".$emp_name."', NOW())";
               
            $retval = mysqli_query( $conn, $sql);
            
            /*if(! $retval )
            {
               die('Could not enter data: ' . mysqli_error());
            }
            
            echo "Entered data successfully\n";
            */
           header('location:show.php');

            $sql1 = "SELECT cid from certificate WHERE request_type='".$emp_address."' and purpose='".$emp_name."'";
              $rs = mysqli_query($conn, $sql1);
              $cidd="";
              while($row = $rs->fetch_assoc()) {
               $cidd=$row['cid'];
            }

            //echo $cidd ." " . $sid;
            $usr_typ="admin";
$note="New Certificate Requests";
$app="admin_request_certificate.php";
  $strSQL1 = "INSERT INTO `cms`.`notification` ( `note`,`app`,`usr_typ`) VALUES ('".$note."','".$app."','".$usr_typ."') ";
  $rs1 = mysqli_query($conn, $strSQL1); 



            $sql2 = "INSERT INTO student_certificate_requests(sid,c_id,status) VALUES('".$sid."','".$cidd."', 'Pending')";
               
            
            $retval3 = mysqli_query( $conn, $sql2 );
            
           mysqli_close($conn);
         }
         
            ?>

            
           

