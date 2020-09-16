
<?php
include_once("php_includes/common_frame_s.php");
include_once("php_includes/check_login_status.php");
include_once("php_includes/include_student_column.php");


   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $sid = $_SESSION['userid'];
   $conn = new mysqli($dbhost, $dbuser, $dbpass, "cms");

   if(! $conn )
   {
      die('Could not connect: ' . mysqli_error());
   }
   
   $sql = "SELECT DISTINCT sid,cid,request_type,purpose,request_date,status FROM certificate JOIN student_certificate_requests ON certificate.cid=student_certificate_requests.c_id WHERE sid='".$sid."'";

   ?>

        <aside class="right-side">

        <ul class="breadcrumb">
          <li><a href="?controller=pages&action=home"><i class="fa fa-dashboard"></i> Home</a></li>
 <li><a href="certificate.php"><i class="fa fa-dashboard"></i> Certificate Request </a></li>

<li class="active">List of Certificates</li>
</ul>

   <section class="content">


<div class="col-xs-12" style="padding-top: 10px;">
   <div class="box">
      <div class="box-body table-responsive">
	<div class="msg-of-day-index">
	<div id="w0">	    <style>
.glyphicon-remove-circle {
  color : #C9302C;
}
.glyphicon-ok-circle {
  color : #449D44;
}
</style>



<div id="w1" class="grid-view">
<table class="table table-striped table-bordered"><thead>
<tr><th>S No.</th><th><a href="#">Description</a></th><th><a href="#">Type</a></th><th><a href="#"> Id</a></th><th><a>Apply Date</a></th><th><a>Status</a></th></tr>
</thead>
<tbody>



  <?php
  $retval = mysqli_query( $conn,  $sql );
   if(! $retval )
   {
      die('Could not get data: ' . mysqli_error());
   }
   
   while($row = $retval->fetch_assoc())
   {

       
 ?>


<tr>
    <td id="<?php  echo $row['cid']; ?>"><?php  echo $row['cid']; ?></td>
    <td id="<?php   echo $row['cid'].'r'; ?>"> <?php  echo $row['request_type'];  ?></td>
    <td id="<?php   echo $row['cid'].'p'; ?>"><?php  echo $row['purpose'];  ?></td>
    <td id="<?php   echo $row['cid'].'s'; ?>"> <?php  echo $row['sid'];  ?></td>
    <td id="<?php   echo $row['cid'].'rd'; ?>"><?php  echo $row['request_date'];  ?></td>
    <td id="<?php   echo $row['cid'].'rd'; ?>"><?php  echo $row['status'];  ?></td>
  
</tr>
<?php 
} 

 mysqli_close($conn);
?>


</tbody></table>
</div></div>	</div>
      </div>
   </div>
</div>
    </section>

    <footer class="edusec-main-footer">
      <div class="container col-lg-12 col-md-12 col-xs-12 no-padding">
        <div class="pull-right hidden-xs">
          <!--b>Version</b> 3.0 -->
        </div>
        <strong>
      </div>
    </footer>

</aside>


	
      </div>
    <script src="js/yii_002.js"></script>
<script src="js/jquery_002.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
$("a.toggle-column").on("click", function(e) {
    e.preventDefault();
    $.post($(this).attr("href"), function(data) {
        var pjaxId = $(e.target).closest(".grid-view").parent().attr("id");
        $.pjax.reload({container:"#" + pjaxId});
    });
    return false;
});
jQuery('#w1').yiiGridView({"filterUrl":"/CMS/index.php?r=dashboard%2Fmsg-of-day%2Findex","filterSelector":"#w1-filters input, #w1-filters select"});
jQuery(document).pjax("#w0 a", "#w0", {"push":false,"replace":false,"timeout":1000,"scrollTo":false});
jQuery(document).on('submit', "#w0 form[data-pjax]", function (event) {jQuery.pjax.submit(event, '#w0', {"push":false,"replace":false,"timeout":1000,"scrollTo":false});});
});</script>    
    
    </body></html>

