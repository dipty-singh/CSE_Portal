<?php 
  $name= "";

include_once("php_includes/check_login_status.php");
$id=$_SESSION['userid'];
include_once("php_includes/common_frame_s.php");
include_once("php_includes/include_student_column.php");

?>

<script>

function sendInfo(n)  
{  
var v=document.getElementById(n).value;  
 
 id=n;
 id=Math.floor(id/10);
 id=id+"2";
var url="fetch.php?val="+v;  
  
if(window.XMLHttpRequest){  
request=new XMLHttpRequest();  
}  
else if(window.ActiveXObject){  
request=new ActiveXObject("Microsoft.XMLHTTP");  
}  
  
try{  
    
request.onreadystatechange=getInfo;  
request.open("GET",url,true);  
request.send();  
}catch(e){alert("Unable to connect to server");}  
}  
  
function getInfo(){  
    
if(request.readyState==4){  
var val1=request.responseText;  
document.getElementById(id).value=val1;  
desc(id);
}  
}  


</script>
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="?controller=pages&action=home"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="?controller=student&action=mess_module">Application</a></li>
<li class="active">Application Form</li>
</ul>

    <section class="content">
        <div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-plus"></i> Application form</h3></div>
  <div class="col-xs-4"></div>
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4"></div>
	<div class="col-xs-4"></div>
	<div class="col-xs-4 left-padding">
	<a class="btn btn-block btn-back" href="?controller=student&action=mess_module">Back</a>	</div>
   </div>
</div>

<div class="msg-of-day-create">
     <style>
.checkbox label {
    padding-left: 30px !important;
}
</style>
<div class="col-xs-12 col-lg-12">
  <div class="box-success box view-item col-xs-12 col-lg-12">
   <div class="request-rebate-form">
    <form id="request-rebate-form" action="query/mess_rebate.php" method="get" role="form">
    <div class="form-group field-stuinfo-stu_problem_start_date ">
<label class="control-label" for="stuinfo-stu_start_date">Starting Date of Leave</label>
<input type="hidden" placeholder=""  required name="id" class="form-control" value=<?php echo $_SESSION['userid'] ?> ><div class="help-block"></div>
<input type="date" placeholder="Start Date"  required name="startDate" class="form-control" name="start_date"><div class="help-block"></div>
</div>    
   <div class="form-group field-stuinfo-stu_problem_subject ">
<label class="control-label" for="stuinfo-stu_problem_subject">No of Days for Leaave</label>
<input type="text" required placeholder="No of Days" name="days" class="form-control" name="problem_subject"><div class="help-block"></div>
</div>    
   </div>
<textarea id="msgofday-msg_details" class="form-control" name="description" maxlength="100" required placeholder="Enter reason for leave"></textarea>

<p class="help-block help-block-error"></p>
</div>
    <div class="form-group col-xs-12 col-sm-6 col-lg-4 no-padding">
	<div class="col-xs-6">
        <button type="submit" class="btn btn-block btn-success">submit</button>	</div>
	<div class="col-xs-6">
	<a class="btn btn-default btn-block" href="index.php?r=dashboard%2Fmsg-of-day%2Findex">Cancel</a>	</div>
    </div>
    <!--to print the result  -->
    <div id="result" > </div>
    </form>   </div>
  
</div>
    </section>
<?php

include_once("php_includes/footer.php");

 ?>

</aside>


	
      </div>
    <script src="js/yii_002.js"></script>
<script src="js/yii_003.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
jQuery('#msg-of-day-form').yiiActiveForm([{"id":"msgofday-msg_details","name":"msg_details","container":".field-msgofday-msg_details","input":"#msgofday-msg_details","error":".help-block.help-block-error","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.string(value, messages, {"message":"Details must be a string.","max":100,"tooLong":"Details should contain at most 100 characters.","skipOnEmpty":1});}},{"id":"msgofday-msg_user_type","name":"msg_user_type","container":".field-msgofday-msg_user_type","input":"#msgofday-msg_user_type","error":".help-block.help-block-error","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"User Type must be a string.","max":3,"tooLong":"User Type should contain at most 3 characters.","skipOnEmpty":1});}},{"id":"msgofday-is_status","name":"is_status","container":".field-msgofday-is_status","input":"#msgofday-is_status","error":".help-block.help-block-error","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Status must be an integer.","skipOnEmpty":1});}}], []);
});</script>    
    
    </body></html>
