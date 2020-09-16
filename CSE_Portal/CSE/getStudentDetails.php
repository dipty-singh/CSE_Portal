<?php

  $conn=new mysqli("localhost","root","","cms");
  
  $url="";
?> 


<?php 
  $batch = $_GET['batch'];
  $strSQL = "SELECT sid, firstname, lastname FROM student WHERE batch='".$batch."'";
  $rs = mysqli_query($conn, $strSQL);
  $counter=1; 
while($row = mysqli_fetch_array($rs)) {
  $id = $row['sid'];
  $name= $row['firstname'];
  $lastname=$row['lastname'];
  $url = "admin_acad_semresult.php?id=".$id;?>
  <tr id="w1-filters" class="filters">
    <td> <?php  echo $counter++;   ?></td>
    <td><a href=<?php echo $url ?>><?php  echo $id   ?><a/></td>
    <td><?php  echo $name   ?></td>
    <td><?php  echo $lastname   ?></td>
</tr>
<?php }
?>
