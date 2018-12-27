<?php
require_once __DIR__.'/../../php/jewellery/getdatadispurse.php';
$metaData = new jeweller();
$getitemdata=$metaData->getdataforitem();
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
    <div class="page-content-wrapper" >      <!-- BEGIN CONTENT BODY -->
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
                                <input type="text" class="form-control mainheading" id="name">
                            </div>          
                            </div> 
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Phone Number</label><br>
                                <input type="number" class="form-control mainheading" id="phonenumber" onchange="dataforform()">
                            </div>          
                            </div>  
                             <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Bill Number</label><br>
                                <input type="number" class="form-control mainheading" id="bill_number" onchange="dataforbill()">
                            </div>          
                            </div>
                         </div>
              <div class="row" style="margin-left: 14px;margin-right: 14px;">

                       
                             <!-- <div class="col-md-12" > -->
                              <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Driving License</label><br>
                                <input type="text" class="form-control mainheading" id="driving_license">
                            </div>          
                            </div> 
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Date Of Birth</label><br>
                                <input type="Date" class="form-control mainheading" id="dob">
                            </div>          
                            </div>  
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Date</label><br>
                                <input type="date" class="form-control mainheading" id="date">
                            </div>          
                            </div> 
                            </div>


                              <div class="row" style="margin-left: 14px;margin-right: 14px;">

                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Address</label><br>
                                <input type="text" class="form-control mainheading" id="address">
                            </div>          
                            </div> 
                               <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Email Id</label><br>
                                <input type="email" class="form-control mainheading" id="mail">
                            </div>          
                            </div> 
                            </div>
                            </div>
                            </div>  
                           </div>

 <div class="panel panel-default">      
                <div class="panel-body">
 <div class="form-group">  
                     <form name="add_name" id="add_name">  
                          <div class="table-responsive">  
                               <table id="dynamic_field" align="center">  
                                <tr><td>Item</td><td>Quantity</td></tr>
                                    <tr>  
                                          <td><input list="browsers" name="browser" id="item" onchange="datalist()">
                                  <datalist id="browsers">
                                    <?php
                                    for($i=0;$i<count($getitemdata);$i++)
                                    {?>
<option value="<?php echo $getitemdata[$i]['items'];?>">
                                   <?php }
                                    ?>
                                   
                                  </datalist>
</td> 
                                          <td><input type="text" name="quantity[]" placeholder="Enter your Quantity" class="form-control name_list" /></td> 
                                          <input type="hidden" name="number" placeholder="Enter your number" class="form-control name_list" id='formphonenumber' /> 
                                          <input type="hidden" name="billnumber" placeholder="Enter your number" class="form-control name_list" id='formbillnumber' />

                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table> <br>
                               <div align="center" class="form-group">
                               <label>Weight</label> 
                                <input type="number" class="form-control mainheading" style="width:197px"  id="Weight" >
                              </div>
                          </div>  
                     </form>  
                </div>
              </div>
            </div>


            <div class="row" style="margin-left: 14px;margin-right: 14px;">
            <div class="panel panel-default">      
                <div class="panel-body">
                      <div class="col-xs-12 col-md-12 col-lg-12 form-group">
                             <!-- <div class="col-md-12" > -->
                              <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Carat</label><br>
                                <input type="text" class="form-control mainheading" id="carat">
                            </div>          
                            </div> 
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Rate Of Interest</label><br>
                                <input type="number" class="form-control mainheading" id="rateofinterest">
                            </div>          
                            </div>  
                             <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Market Value</label><br>
                                <input type="number" class="form-control mainheading" id="marketvalue">
                            </div>          
                            </div>
                         </div>
              <div class="row" style="margin-left: 14px;margin-right: 14px;">

                       
                             <!-- <div class="col-md-12" > -->
                              <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Assessed Value</label><br>
                                <input type="text" class="form-control mainheading" id="assessedvalue">
                            </div>          
                            </div> 
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Amount Advance</label><br>
                                <input type="text" class="form-control mainheading" id="amontadvance" onchange="getmonthlyinterest()">
                            </div>          
                            </div>  
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Monthly Interest</label><br>
                                <input type="text" class="form-control mainheading" id="monthlyinterest" readonly>
                            </div>          
                            </div>
                              <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Signature</label><br>
                                <input type="text" class="form-control mainheading" id="signature">
                            </div>          
                            </div> 
                              
                            </div>
                            </div>
                            </div>  
                           </div>

                     <div class="modal-footer" style="border-top: 1px solid #eef1f5;margin-top: 30px;">

                <button type="button"  onclick="createdispurse()" data-dismiss="modal" class="btn btn-primary" style="background-color:#4285f4; float:right;margin-left:15px;">Disburse</button>          
                    </div> 
                    <p align="center" style="color:red">*Terms and Condition</p>
                     <div class="row" style="margin-left: 14px;margin-right: 14px;">
            <div class="panel panel-default">      
                <div class="panel-body">
                  <ol>
                    <li>Pawing advance is repayable within the agreed period stated above, with any overdue interest.(the pawned articles will not be in our custody,after 365 days from date of pawing)</li>
                    <li>Samy & Sons Pawn Broker reserves the right to sell the pawned articles to sell the pawned articles not redeemed within the agreed period stated above.</li>
                    <li>Samy & Sons Pawn Broker will not be responsible for any loss/damage of pawned articles by fire or robbery also damaged while testing</li>
                    <li>Samy & Sins Pawn Broker Reserves the right to add or amend any of the terms and conditions.</li>
                    <li>The Pawn ticket must be surrendered to redeem the pawn articles(if the Ticket is lost or the Pawner is dead, a swom athdavit must be submitted by the authorized beneficiary)</li>
                    <li>The name Samy & Sons Pawn Broker shall include all of it's branches, if any</li>
                    <li>All Pawness must be least 18 years of age or older to eligible for paening</li>
                    <li>Photo Identification is required for all transactions</li>
                    <li>Any changes in adress and /or telephone number must be notified prompty.</li>
                    <li>Prior notice is required for redemption</li>
                    <li>It is Pawnee's responsibility to redeem the pawned articles when they are due.</li>
                    <li>If an extension to redemption period is required, A writen request for such extension must be made be made at least fifteen days prior to the actual date of redemption</li>
                    <li>Credit cards or direct payments will not be accepted for payment of interest of redemption</li>
                    </ol>
                    <p>I hearby pawn and handover to Samy & Sons the above mentioned gold article owned by me. I declare that the above particular are true and correct to the best of my knowledge and belief and agree for terms and conditions and started below.</p>
                    <div class='row'>
                     <div class='col-md-4'>
                      <label>--------------------------------------------</label><br>
                      <label style="margin-left:50px">Pawnee's Signature</label>
                      </div> 
                      <div class='col-md-4'>
                             <label>--------------------------------------------</label> <br>
                             <label style="margin-left:58px">Date</label>
                      </div> 
                      <div class='col-md-4'>
                              <label>------------------------------------------------------</label><br>
                              <label>Authorised officers signature Samy & Sons Pawn Brokers</label>
                      </div>
                    </div>


                            </div>
                          </div>
                        </div>




                        <div class="row" style="margin-left: 14px;margin-right: 14px;">
            <div class="panel panel-default">      
                <div class="panel-body">

                  <h3 align="center">REDEMPTION OF PAWN ARTICLES</h1>
                  <p> The articles pawned by this ticket per details above having received I/we hereby discharge Amy &Sons Pawn Broker from all obligation and liabilities in respect of the pawn.
                    </p>
                     <div class='row'>
                     <div class='col-md-4 col-sm-4'>
                      <label>--------------------------------------------</label><br>
                      <label style="margin-left:50px">Pawnee's Signature</label>
                      </div> 
                      <div class='col-md-4 col-sm-4'>
                             <label>--------------------------------------------</label> <br>
                             <label style="margin-left:58px">Date</label>
                      </div> 
                      <div class='col-md-4 col-sm-4'>
                              <label>------------------------------------------------------</label><br>
                              <label>Authorised officers signature Samy & Sons Pawn Brokers</label>
                      </div>
                    </div>
                </div>
              </div>
            </div>

                </div>
              </div>
           </div>
       </div>
      </div>
    </div>
 </div>


</body>
</html>
    
    