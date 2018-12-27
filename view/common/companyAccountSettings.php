<?php require_once __DIR__.'/../header.php';
require_once '../../php/common/dashboard.php';
$manager = new dashboard();
$userSocialMedias = $manager->getUserSocialMedias($_SESSION['user_id']);
$userImage = $manager->getUserImage($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
  <head lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Fresh GRC Admin</title>
  <base href="/freshgrc/">  
  <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css" />
   <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>  
  <link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.11.4/jquery-ui.css" />  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
  <link href="metronic/theme/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> 
  <link href="metronic/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="metronic/theme/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" /> 
  <link href="metronic/theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
  <link href="metronic/theme/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
  <link href="metronic/theme/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" /> 
  <link href="metronic/theme/assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />  
  <link href="metronic/theme/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
  <link href="metronic/theme/assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
  <link href="metronic/theme/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" /> 
  <link rel="shortcut icon" href="favicon.ico" />
  <script src="js/common/userProfile.js"></script> 
  </head> 
  <body >
    <?php
      include '../siteHeader.php'; 
      include '../common/leftMenu.php';
      $currentMenu = 'auditorAdmin';      
      $userRole = $_SESSION['user_role'];
    ?>
    <?php if($_SESSION['user_role'] == 'auditor') {?>      
    <?php }?>  
  </body>
  <body>
    <div class="page-content-wrapper">      
      <div class="page-content">                                 
        <div class="row">
          <div class="col-md-12">                           
            <div class="profile-sidebar">                                
              <div class="portlet light profile-sidebar-portlet bordered">                                    
                <div class="profile-userpic">
                  <img src="<?php echo "uploadedFiles/auditeeFiles/" .$userImage[0]['image_name']; ?>" class="img-responsive" alt=""> 
                </div>                                   
                <div class="profile-usertitle">
                  <div class="profile-usertitle-name"> 
                    <?php $userRole = $_SESSION['user_role'];
                      echo $userRole;
                     ?>
                  </div>                  
                </div>                                    
                <div class="profile-userbuttons">
                  <!-- <button type="button" class="btn btn-circle green btn-sm">Follow</button>
                  <button type="button" class="btn btn-circle red btn-sm">Message</button> -->
                </div>                                   
                <div class="profile-usermenu">
                  <ul class="nav">                    
                    <li class="active">
                      <a href="view/common/companyAccountSettings.php">
                      <i class="icon-settings"></i> Account Settings </a>
                    </li>
                    <li>
                      <a href="view/common/companyLocationProfile1.php">
                      <i class="glyphicon glyphicon-home"></i> Add Location to company </a>
                    </li>
                    <li>
                      <a href="view/common/companyProfilehelp.php">
                      <i class="icon-info"></i> Help </a>
                    </li>
                    <li>
                      <a href="view/common/companyPrioritySeveritySettings.php">
                      <i class="icon-info"></i>Priority and Severity Settings </a>
                    </li>
                  </ul>
                </div>
              </div>                                
            </div>                           
            <div class="profile-content">
              <div class="row">
                <div class="col-md-12">                     
                  <div class="portlet light bordered">
                    <div class="portlet-title tabbable-line">
                      <div class="caption caption-md">
                        <i class="icon-globe theme-font hide"></i>
                        <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                      </div>
                      <ul class="nav nav-tabs">
                        <li class="active">
                          <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                        </li>
                        <li>
                          <a href="#tab_1_2" data-toggle="tab">Change Image</a>
                        </li>                                                                          
                      </ul>
                    </div>
                    <div class="portlet-body" style="height: 495px;">
                      <div class="tab-content">                         
                        <div class="tab-pane active" id="tab_1_1">
                          <form role="form" action="#">
                            <div class="form-group">
                              <input type="hidden" class="form-control" id="loggedInUser" value="<?php echo $_SESSION['user_id'] ?>">                                        
                            </div>
                            <div class="form-group">
                              <label for="firstname">First Name</label>
                              <input type="text"  class="form-control" id="firstname"/> </div>
                            <div class="form-group">
                              <label for="lastname">Last Name</label>
                              <input type="text" class="form-control" id="lastname"/> </div>
                            <div class="form-group">
                              <label for="mobileno">Mobile Number</label>
                              <input type="text" class="form-control" id="mobileno"/> </div>
                            <div class="form-group">
                              <label for="websiteurl">Website</label>
                              <input type="text"  class="form-control" id="site"/> </div>
                            <div class="form-group">
                              <label for="occupation">Industry</label>
                              <input type="text" class="form-control" id="industry"/> </div>
                            <div class="form-group">
                              <label for="interest">Facebook</label>
                              <input type="text" class="form-control" id="facebook"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="about">Twitter</label>
                              <input type="text"  class="form-control" id="twitter"/> </div><br><br>
                            <div class="margiv-top-10">
                              <a href="javascript:;" style="border: 1px solid #48D1CC;" class="btn green" onclick="saveUserProfileChanges()"> Save Changes </a>
                              <a href="javascript:;" class="btn default" style="border: 1px solid LightGray;"> Cancel </a>
                            </div>
                          </form>
                        </div>
                        <div class="tab-pane" id="tab_1_2">                          
                          <form action="#" role="form">
                            <div class="form-group">
                              <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="assets/img/avatar-sign.png" alt="avatar" id="userprofilepicture" style="width: 150px;height: 150px; border-radius: 50% !important;" /> </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                <div> 
                                <input type="file" id="upload" name="file" accept="image/*">                      
                                  <input type="hidden" id="userFileName" value="<?php echo $userImage[0]['image_name']; ?>">                                  
                                </div>
                              </div>
                              <div class="margin-top-10">                                
                                <button type="button" class="btn green" id="manageButton" onclick="saveUserProfilePicture()">Save Changes</button>    
                              </div>
                              <div class="clearfix margin-top-10">
                                <span class="label label-danger">NOTE! </span>
                                <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                              </div>
                            </div>                            
                          </form>
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
    <script src="metronic/theme/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>  
    <script src="metronic/theme/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script> 
    <script src="metronic/theme/assets/global/scripts/app.min.js" type="text/javascript"></script>  
    <script src="metronic/theme/assets/pages/scripts/profile.min.js" type="text/javascript"></script>
    <div id="savedDataModal" class="modal fade" role="dialog">
                          <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Data Saved Sucessfully!</h4>
        </div>
        <div class="modal-body">
          <b>First Name:</b><p></p>
          <b>Last Name:</b><p></p>
          <b>Mobile Number:</b><p></p>
          <b>Website:</b><p></p>
          <b>Industry:</b><p></p>
          <b>Facebook:</b><p></p>
          <b>Twitter:</b><p></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="reloadPage()">Close</button>
        </div>
      </div>

    </div>
  </div>
  </body> 
</html>