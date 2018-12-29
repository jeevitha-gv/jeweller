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
    <link href="metronic/theme/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
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
              <a href="view/interest/interest.php"><button type="button" class="btn btn-success">Interest</button></a>        
    </div>
     <div class="clearfix" style="float: left;">   
              <a href="view/renewal/renewal.php"><button type="button" class="btn btn-success">Renewal</button></a>        
    </div> 
      <div class="clearfix" style="float: left;">   
              <a href="view/close/closepawan.php"><button type="button" class="btn btn-success">Close</button></a>        
    </div> 
      <div class="clearfix" style="float: left;">   
              <a href="view/Notice/notice.php"><button type="button" class="btn btn-success">Notice</button></a>        
    </div>
    <div class="clearfix" style="float: left;">   
              <a href="view/purchase/purchasing_order.php"><button type="button" class="btn btn-success">Disburse</button></a>        
    </div>  
    </div>                      
    <div class="page-content-wrapper" style="margin-top: -70px;">      <!-- BEGIN CONTENT BODY -->
      <div class="page-content" >
        <div class="col-md-12">
          <div class="portlet box green">
            <div class="portlet-title">
              <div class="caption">Pawn Ledger</div></div>      
            <div class="portlet-body">
             <div class="panel-body">                                                    
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
              <div class="row" style="margin-left: 14px;margin-right: 14px;margin-top: 70px;">

                       
                             <!-- <div class="col-md-12" > -->
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Driving License</label><br>
                                <input type="text" class="form-control mainheading" id="driving_license">
                            </div>          
                            </div> 
                            <!-- <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">Date Of Birth</label><br>
                                <input type="Date" class="form-control mainheading" id="dob">
                            </div>          
                            </div> -->
                        <div class="col-md-4" >
                        <div class="form-group" style="margin-top: -2px;">
                        <label class="control-label" style="margin-left:5px !important;" for="SecurityRecommendations">Date Of Birth</label>
                        <div class="input-group input-large date-picker input-daterange" data-date="" data-date-format="yyyy/mm/dd" style="width: 330px !important; margin-left: 6px;">
                        <input type="text" id="dob" class="form-control datepickerClass  notranslate" placeholder="Date Of Birth" name="from" class="">
                        </div>
                        </div>
                        </div>
                         <div class="col-md-4" >
                        <div class="form-group" style="margin-top: -2px;">
                        <label class="control-label" style="margin-left:5px !important;" for="SecurityRecommendations">On Date</label>
                        <div class="input-group input-large date-picker input-daterange" data-date="" data-date-format="yyyy/mm/dd" style="width: 330px !important; margin-left: 6px;">
                        <input type="text" id="date" class="form-control datepickerClass  notranslate" placeholder="On Date" name="from" class="">
                        </div>
                        </div>
                        </div>
              </div>

                            <!-- <div class="col-md-4">
                            <div class="form-group">
                                <label for="SecurityRecommendations">On Date</label><br>
                                <input type="date" class="form-control mainheading" id="date">
                            </div>          
                            </div> 
                            </div> -->


              <div class="row" style="margin-left: 14px;margin-right: 14px;margin-top: 20px;">

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

            <div class="row" style="margin-left: 14px;margin-right: 14px;margin-top: 10px;">
            <div class="panel panel-default">      
            <div class="panel-body">
                  <div class="form-group">  
                     <form name="add_name" id="add_name">  
                          <div class="table-responsive">  
                               <table id="dynamic_field" align="center">  
                                <tr><td>Item</td><td>Quantity</td></tr>
                                    <tr>  
                                          <td><select  name="item[]" class="form-control name_list" style="width: 209px;">
                                            <option value="Bangle">Bangle</option>
                                            <option value="Ring">Ring</option>
                                            <option value="chain">chain</option>
                                            <option value="Bracelet">Bracelet</option>
                                            <option value="Watch">Watch</option>
                                            <option value="ear ring">ear ring</option>
                                            <option value="Anklets">Anklets</option>
                                            <option value="Asorted">Asorted</option>

                                          </select></td> 
                                          <td><input type="text" name="quantity[]" placeholder="Enter your Quantity" class="form-control name_list" /></td> 
                                          <input type="hidden" name="number" placeholder="Enter your number" class="form-control name_list" id='formphonenumber' /> 
                                          <input type="hidden" name="billnumber" placeholder="Enter your number" class="form-control name_list" id='formbillnumber' />

                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table> <br>
                               <div align="center" class="form-group">
                               <label>Weight in grams</label> 
                                <input type="number" class="form-control mainheading" style="width:197px"  id="Weight" >
                              </div>
                          </div>  
                     </form>  
                  </div>
                    
            </div>
            </div>  
            </div>                      

 <!-- <div class="panel panel-default">      
                <div class="panel-body">
 <div class="form-group">  
                     <form name="add_name" id="add_name">  
                          <div class="table-responsive">  
                               <table id="dynamic_field" align="center">  
                                <tr><td>Item</td><td>Quantity</td></tr>
                                    <tr>  
                                          <td><select  name="item[]" class="form-control name_list">
                                            <option value="Bangle">Bangle</option>
                                            <option value="Ring">Ring</option>
                                            <option value="chain">chain</option>
                                            <option value="Bracelet">Bracelet</option>
                                            <option value="Watch">Watch</option>
                                            <option value="ear ring">ear ring</option>
                                            <option value="Anklets">Anklets</option>
                                          </select></td> 
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
            </div> -->


            <div class="row" style="margin-left: 14px;margin-right: 14px;margin-top:10px;">
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
              <div class="row" style="margin-left: 14px;margin-right: 14px;margin-top: 70px;">

                       
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
                              <div class="col-md-4" style="margin-top: 10px;">
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
                    <p>I hearby pawn and handover to Samy & Sons the above mentioned gold article owned by me. I declare that the above particular are true and correct to the best of my knowledge and belief and agree for terms and conditions and started below.</p><br>
                    <p>நகை மீளப்பெறும் தருணத்தில் 24 மணித்தியாலங்களுக்கு முன்பாக அறியத்தருவதோடு நகையை அடைவு வைத்தவரே மீளப்பெற வர வேண்டும். அதோடு மூலப்பிரதியை கண்டிப்பாக கொண்டு வர வேண்டும் தவறின் சட்டத்தரணியூடாக சத்யகடன்னாசி முடித்தே திரும்ப பெறவேண்டும். பணம் செலுத்தும்போது காசாகவே செலுத்தவேண்டும்.<br>
                      எனக்குச் சொந்தமான  மேற்குறிப்பிட்ட தங்க பொருட்களை சாமீ ஆன் சன்ஸ் அடைவு நிறுவனத்தில் அடைவு வைத்திருக்கின்றேன் மேற்குறிப்பிட்ட விவரங்கள் உண்மையானவை என 
                      உறுதிப்படுத்துவதுடன் மேலே உள்ள நிபந்தனைகளுக்கு, விதிகளுக்கும் இணங்குகின்றேன். எக்காரணம் கொன்றும் அடைவு நிறுவனத்தில் அடைவு வைக்கப்பட்ட எனது நகைகள் 365 நாட்களுக்கு மேல் இருக்கமாட்டாது என்பதை அறிவதோடு வட்டி பணத்தை மதம் மதம் கட்டவேணும், கட்ட தவறின் 3 மாதத்திற்கு ஒரு முறை கண்டிப்பாக கட்டவேணும் என்பதையும் நன்கு அறிவேன்</p>
                    <div class='row' style="margin-top: 50px;">
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
                    <br/>
                      இச்சீட்டின் மூலம் அடைவு நகைகள்  அனைத்தையும் பெற்றுக்கொண்டதுடன் குறித்த அடைவு தொடர்பாக சாமீ அன்ட் சன்ஸ் பவுண் ப்ரோகேற்கும் எண்களுக்கும் எதுவித தொடர்பும் இல்லை என்பதை இத்தால் உறுதிப்படுத்துகின்றேன்
                    </p>
                     <div class='row' style="margin-top: 50px;">
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
