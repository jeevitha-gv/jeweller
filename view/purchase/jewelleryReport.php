<?php
require_once __DIR__.'/../../php/jewellery/getdatadispurse.php';
$manger = new jeweller();
$id=$_GET['id'];
// session_start();
// $_SESSION['id']=$id;
// echo $_SESSION['id'];
$pawndata = $manger->getpawndata($id);
$nameofpawndetails=$manger->nameofpawndetails($id);
$paid=$manger->paidcalculation($id);
// print_r($paid);
$count=count($paid);
// echo $count;
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
             <button type="button" class="btn btn-success" onclick="location.href='view/interest/interest.php?billnumber=<?php echo $pawndata[0]['bill_number']?>'">Interest</button>       
    </div>
     <div class="clearfix" style="float: left;">   
              <button type="button" class="btn btn-success" onclick="location.href='view/renewal/renewal.php?billnumber=<?php echo $pawndata[0]['bill_number']?>'">Renewal</button>
    </div> 
      <div class="clearfix" style="float: left;">   
             <button type="button" class="btn btn-success" onclick="location.href='view/close/closepawan.php?billnumber=<?php echo $pawndata[0]['bill_number']?>'">Close</button>        
    </div> 
      <div class="clearfix" style="float: left;">   
             <button type="button" class="btn btn-success" onclick="location.href='view/Notice/notice.php'">Notice</button>        
    </div>
    <div class="clearfix" style="float: left;">   
              <button type="button" class="btn btn-success" onclick="location.href='view/purchase/purchasing_order.php'">Disburse</button>       
    </div>      
    </div> 
    <div class="page-content-wrapper" style="margin-top: -70px;" >      <!-- BEGIN CONTENT BODY -->
      <div class="page-content" >
        <div class="col-md-12">
          <div class="portlet box green">
            <div class="portlet-title">
              <div class="caption">Pawn Ledger</div></div>      
            <div class="portlet-body">
             <div class="panel-body">
             <div style="padding-left: 16px; padding-top: 5px;">    

             <!--  <div class="row" style="margin-left: 12px;margin-right: 12px;">
                 -->

            <div class="row" style="margin-left: 14px;margin-right: 14px;">
            <div class="panel panel-default">      
                <div class="panel-body">
                      <div class="col-xs-12 col-md-12 col-lg-12 form-group">
                             <!-- <div class="col-md-12" > -->
                              <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Name</label><br>
                                <input type="text" class="form-control mainheading" id="name" value="<?php echo $pawndata[0]['name']?>" readonly>
                            </div>          
                            </div> 
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Phone Number</label><br>
                                <input type="number" class="form-control mainheading" id="phonenumber" value="<?php echo $pawndata[0]['phonenumber']?>" readonly>
                            </div>          
                            </div>  
                             <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Bill Number</label><br>
                                <input type="number" class="form-control mainheading" id="bill_number" value="<?php echo $pawndata[0]['bill_number']?>" readonly>
                            </div>          
                            </div>
                         </div>

                      <div class="col-xs-12 col-md-12 col-lg-12 form-group">
                       
                             <!-- <div class="col-md-12" > -->
                              <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Driving License</label><br>
                                <input type="text" class="form-control mainheading" id="driving_license" value="<?php echo $pawndata[0]['driving_license']?>" readonly>
                            </div>          
                            </div> 
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Date Of Birth</label><br>
                                <input type="Date" class="form-control mainheading" id="dob" value="<?php echo $pawndata[0]['dob']?>" readonly>
                            </div>          
                            </div>  
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Date</label><br>
                                <input type="date" class="form-control mainheading" id="date" value="<?php echo $pawndata[0]['start_date']?>" readonly>
                            </div>          
                            </div> 
                            </div>
                            


                              <div class="row" style="margin-left: 14px;margin-right: 14px;">

                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Address</label><br>
                                <input type="text" class="form-control mainheading" id="address" value="<?php echo $pawndata[0]['address']?>" readonly>
                            </div>          
                            </div> 
                            </div>
                            </div>
                            </div>  
                           </div>
                    <div class="row" style="margin-left: 14px;margin-right: 14px;">
                      <div class="panel panel-default">      
                        <div class="panel-body">
                          <div class="col-xs-12 col-md-12 col-lg-12 form-group">
                              <?php for($i=0;$i<count($nameofpawndetails);$i++){?>

                             <div class="col-md-4">
                                <div class="form-group">
                                   <label for="SecurityRecommendations">S.No</label><br>
                                    <label> <?php echo $i+1 ?></label>
                                 </div>          
                            </div>
                        <div class="col-md-4">
                        <label for="SecurityRecommendations">Item</label>
                       <input type="text" class="form-control mainheading" id="item" value="<?php echo $nameofpawndetails[$i]['item']?>" readonly>
                        </div>
                        <div class="col-md-4">
                        <label for="SecurityRecommendations">Quantity</label>
                       <input type="number" class="form-control mainheading" id="quantity" value="<?php echo $nameofpawndetails[$i]['quantity']?>" readonly>
                        </div>
                        <?php }?>

                          <div class="col-md-2">
                        <label for="SecurityRecommendations">Weight</label>
                       <input type="number" class="form-control mainheading" id="Weight" value="<?php echo $pawndata[0]['Weight']?>" readonly>
                        </div>
                        </div>
                     </div>
                    </div></div>





            <div class="row" style="margin-left: 14px;margin-right: 14px;">
            <div class="panel panel-default">      
                <div class="panel-body">
                      <div class="col-xs-12 col-md-12 col-lg-12 form-group">
                             <!-- <div class="col-md-12" > -->
                              <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Carat</label><br>
                                <input type="date" class="form-control mainheading" id="carat" value="<?php echo $pawndata[0]['carat']?>" readonly>
                            </div>          
                            </div> 
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Rate Of Interest</label><br>
                                <input type="number" class="form-control mainheading" id="rateofinterest" value="<?php echo $pawndata[0]['rateofinterest']?>" readonly>
                            </div>          
                            </div>  
                             <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Market Value</label><br>
                                <input type="number" class="form-control mainheading" id="marketvalue" value="<?php echo $pawndata[0]['marketvalue']?>" readonly>
                            </div>          
                            </div>
                         </div>
              <div class="row" style="margin-left: 14px;margin-right: 14px;">

                       
                             <!-- <div class="col-md-12" > -->
                              <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Assessed Value</label><br>
                                <input type="text" class="form-control mainheading" id="assessedvalue" value="<?php echo $pawndata[0]['assessedvalue']?>" readonly>
                            </div>          
                            </div> 
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Amount Advance</label><br>
                                <input type="text" class="form-control mainheading" id="amontadvance" value="<?php echo $pawndata[0]['amontadvance']?>" readonly>
                            </div>          
                            </div>  
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Monthly Interest</label><br>
                                <input type="text" class="form-control mainheading" id="monthlyinterest" value="<?php echo $pawndata[0]['monthlyinterest']?>" readonly>
                            </div>          
                            </div>
                              <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Signature</label><br>
                                <input type="text" class="form-control mainheading" id="signature" value="<?php echo $pawndata[0]['signature']?>" readonly>
                            </div>          
                            </div> 
                              
                  </div>

                            </div>
                            </div>  
                           </div>
 <div class="row" style="margin-left: 14px;margin-right: 14px;">
                <div class="panel panel-default">      
                <div class="panel-body">
                      <div class="col-xs-12 col-md-12 col-lg-12 form-group">
                  <div class="row" style="margin-left: 14px;margin-right: 14px;">

                       
                             <!-- <div class="col-md-12" > -->
                             <?php for($i=0;$i<$count;$i++)
                             {
                              ?>
                              <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Started Date</label><br>
                                <input type="text" class="form-control mainheading" id="assessedvalue" value="<?php echo $paid[$i]['startdate']?>" readonly>
                            </div>          
                            </div> 
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Interest Paid Date</label><br>
                                <input type="text" class="form-control mainheading" id="amontadvance" value="<?php echo $paid[$i]['enddate']?>" readonly>
                            </div>          
                            </div>  
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Paid Interest Amount</label><br>
                                <input type="text" class="form-control mainheading" id="monthlyinterest" value="<?php echo $paid[$i]['monthlyinterest']?>" readonly>
                            </div>          
                            </div>
                            <?php } ?>

                                                            
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>                          
  




                   <!--   <div class="modal-footer" style="border-top: 1px solid #eef1f5;margin-top: 30px;">

                <button type="button"  onclick="createdispurse()" data-dismiss="modal" class="btn btn-primary" style="background-color:#4285f4; float:right;margin-left:15px;">Dispurse</button>          
                    </div>  -->
                </div>
              </div>
           </div>
       </div>
      </div>
    </div>
 </div>
</body>
</html>
    
    