<?php
require_once __DIR__.'/../../php/jewellery/getdatadispurse.php';
$manger = new jeweller();
$billnumber=$_GET['billnumber'];
$showdata=$manger ->showdata($billnumber);
// print_r($showdata);
?>
<!DOCTYPE html>
<html>

<head lang="en">
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Jeweller</title>
  <base href="/Jeweller/">
    <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css" />
    <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.11.4/jquery-ui.css"/>
    <link href="metronic/theme/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <script src="metronic/theme/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>     
    <script src="assets/multiselectDropdown/bootstrap-multiselect.js" type="text/javascript"></script>  
    <link rel="stylesheet" type="text/css" href="assets/multiselectDropdown/bootstrap-multiselect.css">
    <script src="metronic/theme/assets/global/scripts/app.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
    <link href="assets/toggleButton/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="assets/toggleButton/bootstrap-toggle.min.js"></script>
    <link href="assets/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="assets/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="assets/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="assets/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="assets/img/favicon.png" rel="icon" type="image/png">
    <link href="assets/img/favicon.ico" rel="shortcut icon">
     <link rel="stylesheet" href="assets/css/lib/font-awesome/font-awesome.min.css">
    <link href="metronic/theme/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="metronic/theme/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="metronic/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
     <link href="metronic/theme/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="metronic/theme/assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="metronic/theme/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
   <script src="js/jewellery/bookingJewellery.js"></script>

</head>
<body  style="background-color: #f0f5f5">

     
  <body>
<?php
     $_SESSION['user_role']='purchase_update';
                    include "../siteHeader.php";
                    include "../common/leftMenu.php"; ?>
    <div class="row" style="margin-left: 271px !important;">
     <div class="clearfix" style="float: left;">   
             <button type="button" class="btn btn-success" onclick="location.href='view/interest/interest.php'">Interest</button>       
    </div>
     <div class="clearfix" style="float: left;">   
              <button type="button" class="btn btn-success" onclick="location.href='view/renewal/renewal.php'">Renewal</button>
    </div> 
      <div class="clearfix" style="float: left;">   
             <button type="button" class="btn btn-success" onclick="location.href='view/close/closepawan.php'">Close</button>        
    </div> 
      <div class="clearfix" style="float: left;">   
             <button type="button" class="btn btn-success" onclick="location.href='view/Notice/notice.php'">Notice</button>        
    </div>
    <div class="clearfix" style="float: left;">   
              <button type="button" class="btn btn-success" onclick="location.href='view/purchase/purchasing_order.php'">Disburse</button>       
    </div>  
    </div>                 
    <div class="page-content-wrapper" style="margin-top: -70px;">      <!-- BEGIN CONTENT BODY -->
      <div class="page-content" >
        <div class="col-md-12">
          <div class="portlet box green">
            <div class="portlet-title">
              <div class="caption">Interest</div></div>      
            <div class="portlet-body">            
             <div class="panel-body">
             <div style="padding-left: 16px; padding-top: 5px;"> 
             <?php if($billnumber != NULL)
             {
              ?>
                <div class="row" style="margin-left: 14px;margin-right: 14px;">
           
                      <div class="col-xs-12 col-md-12 col-lg-12 form-group">
                             <!-- <div class="col-md-12" > -->
                              <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Phone Number</label><br>
                                <input type="number" class="form-control mainheading" value="<?php echo $showdata[0]['phonenumber'] ?>" id="phonenumber" onchange="getbilldata()">
                            </div>          
                            </div> 
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Bill Number</label><br>
                                <input type="number" value="<?php echo $showdata[0]['bill_number'] ?>" class="form-control mainheading" id="billdata">
                            </div>          
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Interest Amount</label><br>
                                <input type="number" value="<?php echo $showdata[0]['monthlyinterest'] ?>" class="form-control mainheading" id="interestrate">
                            </div>          
                            </div>

                         </div>
       
            </div><br>
            <div class="row" style="margin-left: 14px;margin-right: 14px;">
           
                      <div class="col-xs-12 col-md-12 col-lg-12 form-group">
                             <!-- <div class="col-md-12" > -->
                              <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Date</label><br>
                                <input type="text" value="<?php echo $showdata[0]['start_date'] ?>" class="form-control mainheading" id="renewal">
                            </div>          
                            </div> 
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Interest Date</label><br>
                                <input type="text" value="<?php echo $showdata[0]['enddate'] ?>" class="form-control mainheading" id="end_date">
                            </div>          
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Total Interest</label><br>
                                <input type="text" value="<?php echo $showdata[0]['totalinterest'] ?>" class="form-control mainheading" id="totalinterest">
                            </div>          
                            </div>

                         </div>
       
            </div><br>
             <div class="modal-footer" style="border-top: 1px solid #eef1f5;margin-top: 31px;">

                <button type="button"  onclick="interest()" data-dismiss="modal" class="btn btn-primary" style="background-color:#4285f4; float:right;margin-left:15px;">Paid</button>          
            </div>                 
             <?php }
             else
              {?>
                <div class="row" style="margin-left: 14px;margin-right: 14px;">
           
                      <div class="col-xs-12 col-md-12 col-lg-12 form-group">
                             <!-- <div class="col-md-12" > -->
                              <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Phone Number</label><br>
                                <input type="Number" class="form-control mainheading" id="phonenumber" onchange="getbilldata()">
                            </div>          
                            </div> 
                            <div class="col-md-4 col-md-4">
                          <div  id="controlDrop">
                                <?php include "../common/getbill.php"; ?>
                            </div>          
                            </div>  
                            <div class="col-md-4">
                          <div class="form-group" id="getinterest">
                                <?php include "../common/getinterestAmount.php"; ?>
                            </div>          
                            </div> 
                         </div>
       
            </div><br>
            <div class="row" style="margin-left: 14px;margin-right: 14px;">
           
                      <div class="col-xs-12 col-md-12 col-lg-12 form-group">
                             <!-- <div class="col-md-12" > -->

    
                            <div class="col-md-4">
                          <div class="form-group" id="getdateforrenewwal">
                                <?php include "../common/getdateforrenewwal.php"; ?>
                            </div>          
                            </div> 
                       
                              <!-- <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Interest Date</label><br>
                                <input type="date" class="form-control mainheading" id="end_date" onchange="totalinterestdata()">
                            </div>          
                            </div> -->
                            <div class="col-md-4" >
                        <div class="form-group" style="margin-top: -2px;">
                        <label class="control-label" style="margin-left:5px !important;" for="SecurityRecommendations">Interest Date</label>
                        <div class="input-group input-large date-picker input-daterange" data-date="" data-date-format="yyyy/mm/dd" style="width: 330px !important; margin-left: 6px;">
                        <input type="text" id="end_date" class="form-control datepickerClass  notranslate" placeholder="Interest Date" name="from" class="" onchange="totalinterestdata()" style="width: 336px;">
                        </div>
                        </div>
                        </div> 
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Total Interest</label><br>
                                <input type="number" class="form-control mainheading" id="totalinterest">
                            </div>          
                            </div>  
                           
                         </div>
       
            </div>
            <div class="modal-footer" style="border-top: 1px solid #eef1f5;margin-top: 31px;">

                <button type="button"  onclick="interest()" data-dismiss="modal" class="btn btn-primary" style="background-color:#4285f4; float:right;margin-left:15px;">Paid</button>          
            </div>
             <?php }
            ?>
                                                            
               </div>
              </div>
           </div>
       </div>       
      </div>
    </div>
 </div>
</body>
</html>
<!-- <script type="text/javascript">
     $(function() {
        $(".datepickerClass").datepicker();
        $('.ui-datepicker').addClass('notranslate');
    });
</script>   -->  
        
    