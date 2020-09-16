<?php


include_once("php_includes/check_login_status.php");
include_once("php_includes/common_frame_a.php");
include_once("php_includes/include_admin_column.php");


 ?>

	
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="Admin Dashboard.htm"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="Dashboard">All TimeTable</a></li>
<li class="active">Transportation TimeTable</li>
</ul>

   <section class="content">
 <!--       <div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-th-list"></i> Request of status</h3></div>
  <div class="col-xs-4"></div>
 <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4 left-padding">
        <a class="btn btn-block btn-success" href="http://localhost:8081/CMS/index.php?r=dashboard%2Fmsg-of-day%2Fcreate">ADD</a>	</div>
	<div class="col-xs-4 left-padding">
	<a class="btn btn-block btn-warning" href="http://localhost:8081/CMS/index.php?r=export-data%2Fexport-to-pdf&amp;model=app%5Cmodules%5Cdashboard%5Cmodels%5CMsgOfDaySearch" target="_blank">PDF</a>	</div>
	<div class="col-xs-4 left-padding">
	<a class="btn btn-block btn-primary" href="http://localhost:8081/CMS/index.php?r=export-data%2Fexport-excel&amp;model=app%5Cmodules%5Cdashboard%5Cmodels%5CMsgOfDaySearch" target="_blank">EXCEL</a>	</div>
  </div>
</div>
-->



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
<!--<table class="table   table-bordered"><thead>
-->
<form method="post" action="TranspotaionTimeTableSql2.php">
<div class="text-center" class="img-left">
    <img src="image/aravali.png" alien="right" hight="80" width="80">
   <font size="6"><b >Aravali College of Engineering and Management </font>
    <br>

    <b>Bus Transportation Schedule</b> </div>
    <br>
    <br>

<table class="table   table-bordered">
<tr> 
<?php
//code for time table goes here.

require_once('PHPExcel/Classes/PHPExcel/IOFactory.php');

$inputFileName = 'TranspotaionTimeTable.xlsx';

//  Read your Excel workbook
try {
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
} catch(Exception $e) {
    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}

//  Get worksheet dimensions
$sheet = $objPHPExcel->getSheet(0); 



?>


    <th>Timing</th>    <th>Bus</th>
    <th>From</th>
    <th>To</th>
</tr>
<tr>
    
    <th> <input type="text" name="Sl1" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A5')->getValue(); ?>></th>
    <th> <input type="text" name="Sl1B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B5')->getValue(); ?>></th>
    <th> <input type="text" name="Sl1F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C5')->getValue(); ?>></th>  
    <th> <input type="text" name="Sl1D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D5')->getValue(); ?>></th>
 </tr>
 
<tr>
    
    <th> <input type="text" name="Sl2" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A6')->getValue(); ?>></th>
    <th> <input type="text" name="Sl2B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B6')->getValue(); ?>></th>
    <th> <input type="text" name="Sl2F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C6')->getValue(); ?>></th>  
    <th> <input type="text" name="Sl2D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D6')->getValue(); ?>></th>
 </tr>

<tr>
    
    <th> <input type="text" name="Sl3" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A7')->getValue(); ?>></th>
    <th> <input type="text" name="Sl3B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B7')->getValue(); ?>></th>
    <th> <input type="text" name="Sl3F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C7')->getValue(); ?>></th>  
    <th> <input type="text" name="Sl3D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D7')->getValue(); ?>></th>
 </tr>
    
<tr>
    
    <th> <input type="text" name="Sl4" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A8')->getValue(); ?>></th>
    <th> <input type="text" name="Sl4B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B8')->getValue(); ?>></th>
    <th> <input type="text" name="Sl4F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C8')->getValue(); ?>></th>  
    <th> <input type="text" name="Sl4D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D8')->getValue(); ?>></th>
 </tr>

 <tr>
    
    <th> <input type="text" name="Sl5" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A9')->getValue(); ?>></th>
    <th> <input type="text" name="Sl5B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B9')->getValue(); ?>></th>
    <th> <input type="text" name="Sl5F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C9')->getValue(); ?>></th>  
    <th> <input type="text" name="Sl5D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D9')->getValue(); ?>></th>
 </tr>

<tr>
    
    <th> <input type="text" name="Sl6" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A10')->getValue(); ?>></th>
    <th> <input type="text" name="Sl6B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B10')->getValue(); ?>></th>
    <th> <input type="text" name="Sl6F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C10')->getValue(); ?>></th>  
    <th> <input type="text" name="Sl6D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D10')->getValue(); ?>></th>
 </tr>

 <tr>
    
    <th> <input type="text" name="Sl7" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A11')->getValue(); ?>></th>
    <th> <input type="text" name="Sl7B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B11')->getValue(); ?>></th>
    <th> <input type="text" name="Sl7F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C11')->getValue(); ?>></th>  
    <th> <input type="text" name="Sl7D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D11')->getValue(); ?>></th>
 </tr>

 <tr>
    
    <th> <input type="text" name="Sl8" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A12')->getValue(); ?>></th>
    <th> <input type="text" name="Sl8B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B12')->getValue(); ?>></th>
    <th> <input type="text" name="Sl8F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C12')->getValue(); ?>></th>  
    <th> <input type="text" name="Sl8D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D12')->getValue(); ?>></th>
 </tr>
    
    <tr>
    
    <th> <input type="text" name="Sl9" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A13')->getValue(); ?>></th>
    <th> <input type="text" name="Sl9B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B13')->getValue(); ?>></th>
    <th> <input type="text" name="Sl9F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C13')->getValue(); ?>></th>  
    <th> <input type="text" name="Sl9D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D13')->getValue(); ?>></th>
 </tr>
 
   <tr>
    
    <th> <input type="text" name="S20" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A14')->getValue(); ?>></th>
    <th> <input type="text" name="S20B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B14')->getValue(); ?>></th>
    <th> <input type="text" name="S20F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C14')->getValue(); ?>></th>  
    <th> <input type="text" name="S20D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D14')->getValue(); ?>></th>
 </tr>

 <tr>
    
    <th> <input type="text" name="S21" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A15')->getValue(); ?>></th>
    <th> <input type="text" name="S21B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B15')->getValue(); ?>></th>
    <th> <input type="text" name="S21F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C15')->getValue(); ?>></th>  
    <th> <input type="text" name="S21D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D15')->getValue(); ?>></th>
 </tr>
   
   <tr>
    
    <th> <input type="text" name="S22" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A16')->getValue(); ?>></th>
    <th> <input type="text" name="S22B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B16')->getValue(); ?>></th>
    <th> <input type="text" name="S22F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C16')->getValue(); ?>></th>  
    <th> <input type="text" name="S22D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D16')->getValue(); ?>></th>
 </tr>
  
    <tr>
    
    <th> <input type="text" name="S23" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A17')->getValue(); ?>></th>
    <th> <input type="text" name="S23B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B17')->getValue(); ?>></th>
    <th> <input type="text" name="S23F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C17')->getValue(); ?>></th>  
    <th> <input type="text" name="S23D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D17')->getValue(); ?>></th>
 </tr>
 
    <tr>
    
    <th> <input type="text" name="S24" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A18')->getValue(); ?>></th>
    <th> <input type="text" name="S24B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B18')->getValue(); ?>></th>
    <th> <input type="text" name="S24F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C18')->getValue(); ?>></th>  
    <th> <input type="text" name="S24D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D18')->getValue(); ?>></th>
 </tr>
 
   <tr>
    
    <th> <input type="text" name="S25" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A19')->getValue(); ?>></th>
    <th> <input type="text" name="S25B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B19')->getValue(); ?>></th>
    <th> <input type="text" name="S25F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C19')->getValue(); ?>></th>  
    <th> <input type="text" name="S25D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D19')->getValue(); ?>></th>
 </tr>
 
  <tr>
    
    <th> <input type="text" name="S26" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A20')->getValue(); ?>></th>
    <th> <input type="text" name="S26B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B20')->getValue(); ?>></th>
    <th> <input type="text" name="S26F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C20')->getValue(); ?>></th>  
    <th> <input type="text" name="S26D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D20')->getValue(); ?>></th>
 </tr>
    

</table>
<input type="submit" class="btn btn-block btn-success" name="edit"  value="Edit" >
</form>
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
        <strong><a ></a>.</strong>
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
