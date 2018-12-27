<?php require_once __DIR__.'/../header.php';
require_once __DIR__.'/../subscription.php';
require_once '../../php/common/dashboard.php';
require_once '../../php/common/feedManager.php';
require_once __DIR__.'/timelinemanager.php';
//timeline
$timeManager = new TimeManager();
$users = $timeManager->users(); //user choice
$chats = $timeManager->timeLine(); //chat retrive
$manager = new dashboard();
$allTasksForUsers=$manager->getAllTaskForUser($_SESSION['user_id']);
$allUsers = $manager->getAllUsersForTicket();
$userSocialMedias = $manager->getUserSocialMedias($_SESSION['user_id']);
$userImage = $manager->getUserImage($_SESSION['user_id']);
$getAllSupportTickets=$manager->getAllSupportTickets();
$feedManager=new FeedManager();
$loggedInUser=$_SESSION['user_id'];
$feeds=$feedManager->getFeeds($loggedInUser,$_SESSION['user_role']);
error_log("feeds".print_r($feeds,true));
error_log("feeds".print_r($getAllSupportTickets,true));
require_once __DIR__.'/../../php/company/companyManager.php';
$manager=new CompanyManager();
$id=$manager->getCompanyIdForUser($_SESSION['user_id']);
switch ($_SESSION['user_role']) {
  case 'super_admin':
    $feedMessage="New Compliance Library is created by";
    $isAuditor=0;
    break;
  case 'auditor':
    $feedMessage="New Audit is assigned for";
    $isAuditor=1;
    break;
  default:
    # code...
    break;
}
$companyId=$id[0]['id'];
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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap.min.css">
   <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>  
  <link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.11.4/jquery-ui.css" />  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
  <link href="metronic/theme/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> 
  <link href="metronic/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="metronic/theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
  <link href="metronic/theme/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
  <link href="metronic/theme/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" /> 
  <link href="metronic/theme/assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />  
  <link href="metronic/theme/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
  <link href="metronic/theme/assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
  <link href="metronic/theme/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" /> 
  <link rel="shortcut icon" href="favicon.ico" />
  <script src="js/common/userProfile.js"></script> 
  <link rel="stylesheet" type="text/css" href="assets/css/intro.css">
<script type="text/javascript" src="js/intro.js"></script> 

<script>

$(document).ready(function(){
    $('[data-toggle="popover"]').popover({ html : true, container: 'body'});    
});
</script>
   
    <script src="js/audit/auditCreateManagement.js"></script>
       <script src="//fast.appcues.com/31746.js">// NOTE: These values should be specific to the current user.
  Appcues.identify("<?php echo $user->id; ?>", { // Replace with unique identifier for current user
    name: "Gokul Kandasamy",   // Current user's name
    email: "gokulk@fixnix.co"

, // Current user's email
    created_at: <?php echo $user->created_at; ?>,    // Unix timestamp of user signup date

    // Additional user properties.
    // is_trial: "<?php echo $user->is_trial; ?>",
    // plan: "<?php echo $user->plan; ?>"

  });
 </script>



  </head>
  <style type="text/css">




    div.dataTables_wrapper div.dataTables_length label {
    font-weight: normal;
    text-align: left;
    white-space: nowrap;
    display: none;
}
  .scroller{
    overflow-y:scroll; 
  }
div.dataTables_wrapper div.dataTables_filter label {
    font-weight: normal;
    white-space: nowrap;
    text-align: left;
    display: none;
}

/* reset our lists to remove bullet points and padding */
.mainmenu, .submenu {
  list-style: none;
  padding: 0;
  margin: 0;
}

/* make ALL links (main and submenu) have padding and background color */
.mainmenu a {
  display: block;
  
  text-decoration: none;
  padding: 10px;
  color: #000;
}

/* add hover behaviour */
.mainmenu a:hover {
    background-color: rgb(242,246,249);
    text-decoration: none;
}


/* when hovering over a .mainmenu item,
  display the submenu inside it.
  we're changing the submenu's max-height from 0 to 200px;
*/

.mainmenu li:hover .submenu {
  display: block;
  max-height: 300px;
}

/*
  we now overwrite the background-color for .submenu links only.
  CSS reads down the page, so code at the bottom will overwrite the code at the top.
*/



/* hover behaviour for links inside .submenu */
.submenu a:hover {
   background-color: rgb(242,246,249);

}

/* this is the initial state of all submenus.
  we set it to max-height: 0, and hide the overflowed content.
*/
.submenu {
  overflow: auto;
  max-height: 0;
  -webkit-transition: all 0.5s ease-out;
  background-color: rgb(240, 250, 256);
}
  </style>

  <body >
    <?php

      include '../siteHeader.php'; 
      include '../common/leftMenu.php';
      $currentMenu = 'auditorAdmin';      
      $userRole = $_SESSION['user_role'];
    ?>  
  </body>
  <body>
    <div class="page-content-wrapper">      
      <div class="page-content" style="margin-top: -10px;">                                 
        <div class="row">
          <div class="col-md-12">                           
            <div class="profile-sidebar">                                
              <div class="portlet light profile-sidebar-portlet bordered">                         
                <div class="profile-userpic">
                  <a href="view/common/overview.php"><img style="width:160px !important;height:106px !important;" src="<?php echo "uploadedFiles/auditeeFiles/" .$userImage[0]['image_name']; ?>" class="img-responsive" alt=""></a>  
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
                    <li class="active" data-step="2" data-intro="Overview of Your profile.">
                      <a href="view/common/overview.php">
                      <i class="icon-home"></i> Overview </a>
                    </li>
                    <li data-step="8" data-intro="Update Your Account Settings.">
                      <a href="view/common/accountSettings.php">
                      <i class="icon-settings"></i> Account Settings </a>
                    </li>
                    <li data-step="9" data-intro="Documentation for freshgrc.com">
                      <a href="view/common/profilehelp.php">
                      <i class="icon-info"></i> Help </a>
                    </li>
                  </ul>
                </div>
              </div>                                
              <div class="portlet light bordered" style="height: 300px;">             
                <div class="row list-separated profile-stat">
                  <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="uppercase profile-stat-title" id="totalprojects"></div>
                    <div class="uppercase profile-stat-text"><a href="view/common/todotask.php"> Projects </a></div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="uppercase profile-stat-title" id="totaltasks"></div>
                    <div class="uppercase profile-stat-text"><a href="view/common/todotask.php"> Tasks</a></div>
                  </div>
                  <!-- <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="uppercase profile-stat-title" id="totaluploads"></div>
                    <div class="uppercase profile-stat-text"> Uploads </div>
                  </div> -->
                </div>          
               <div>                  
                  <div class="margin-top-20 profile-desc-link">
                    <i class="fa fa-globe"></i>
                    <a href="https://fixnix.co"><?php echo $userSocialMedias[0]['site'];?></a>
                  </div>
                  <div class="margin-top-20 profile-desc-link">
                    <i class="fa fa-twitter"></i>
                    <a href="https://twitter.com/sshanmugavel"><?php echo $userSocialMedias[0]['twitter'];?></a>
                  </div>
                  <div class="margin-top-20 profile-desc-link">
                    <i class="fa fa-facebook"></i>
                    <a href="https://www.facebook.com/shanmugavel"><?php echo $userSocialMedias[0]['facebook'];?></a>
            
                  </div>
                </div>
              </div>                              
            </div>                           
            <div class="profile-content">
              <div class="row">
                <div class="col-md-6">                      
                  <div class="portlet light bordered tasks-widget" data-step="3" data-intro="This is the list of Pending Tasks." style="height: 256px;">
                    <div class="portlet-title">
                      <div class="caption caption-md">
                        <i class="icon-bar-chart theme-font hide"></i>
                        <span class="caption-subject font-blue-madison bold uppercase">Tasks</span>
                        <span class="caption-helper"> pending</span>
                      </div>                        
                    </div>
                    <div class="portlet-body" style="height:175px; overflow: auto;">
                        
                      <div class="task-content">
                        <div class="scroller"  data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2"><?php foreach($allTasksForUsers as $allTasks){ ?>                                  
                          <ul class="task-list">
                            <li style="cursor: pointer;">
                              <div class="task-checkbox">
                                <input type="hidden" value="1" name="test" />
                                <input type="checkbox" class="liChild" value="2" name="test" /> </div>
                              <div class="task-title" >
                                <span tabindex="0" class="task-title-sp" title="<?php echo $allTasks['taskName']  ?>" data-toggle="popover" data-trigger="focus" data-content="<?php echo'The task is assigned by'; echo' '; echo $allTasks['userName']; echo'<br>'; echo'The task is assigned to'; echo' '; echo $allTasks['userass'];
                                echo'<br>'; echo'The due date is'; echo' '; echo $allTasks['dueDate']; ?>"  data-html="true" ><?php echo $allTasks['taskName'];   ?></span><span class="task-bell"><i class="fa fa-bell-o"></i></span>
                              </div>                                
                            </li>
                           
                          </ul>
                             <?php }?>                                                         
                        </div>
                      </div>
                   
                    </div>
                  </div>                      
                </div>
                <div class="col-md-6">                                       
                  <div class="portlet light bordered" data-step="4" data-intro="This is the list of Feeds for Compliance library." style="height: 255px;">
                    <div class="portlet-title tabbable-line">
                      <div class="caption caption-md">
                        <i class="icon-globe theme-font hide"></i>
                        <span class="caption-subject font-blue-madison bold uppercase">Feeds</span>
                      </div>                      
                    </div>
                    <div class="portlet-body" style="overflow:auto; height:170px;">                                               
                      <div class="tab-content">
                        <div class="tab-pane active" id="tab_1_1">
                          <div class="scroller" style="height: 320px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                            <ul class="feeds">
                              <?php foreach($feeds as $feed){ ?>
                                <li>
                                  <div class="col1">                                
                                    <div class="cont">
                                      <div class="cont-col1">
                                        <div class="label label-sm label-success">
                                          <i class="fa fa-bell-o"></i>
                                        </div>
                                      </div>
                                      <div class="cont-col2">                                    
                                      <?php if($userRole == 'policy_owner'){ ?>
                                          <div class="desc" id="feed<?php echo $auditId ?>">New <?php echo $feed['procedure']?> - <?php echo $feed['title']?> is created by <?php echo $feed['last_name'] ?> <?php echo $feed['name'] ?>
                                      <?php } else if($userRole == 'policy_reviewer' || $userRole == 'policy_approver') { ?>
                                          <div class="desc" id="feed<?php echo $auditId; ?>"> <?php echo $feed['title'];?> is <?php echo $feed['status'];?>                                          
                                      <?php } else {?>
                                        <div class="desc" id="feed<?php echo $auditId ?>"><?php echo $feedMessage." " ?> <?php echo $feed['last_name'] ?>     <?php echo $feed['title'] ?> 
                                      <?php } ?>
                                          <?php if($isAuditor==1){ ?>
                                            <span class="label label-sm label-info">
                                              
                                              <a  <?php if($feed['status']=="create") {?> href="view/audit/auditDoPage.php?auditId=<?php echo $feed['id'] ?>" <?php }?>  <?php if($feed['status']=="prepared") {?> href="view/audit/auditeeDoPage?auditId=<?php echo $feed['id'] ?>" <?php }?> <?php if($feed['status']=="performed") {?> href="view/audit/auditCheckPage.php?auditId=<?php echo $feed['id'] ?>" <?php }?> <?php if($feed['status']=="returned") {?> href="view/audit/auditActPage.php?auditId=<?php echo $feed['id'] ?>" <?php }?>> Take action</a>  <?php } ?>
                                            </span>
                                        </div>
                                      </div>
                                    </div>                                  
                                  </div>
                                  <div class="col2">
                                      <?php if($userRole == 'policy_owner' || $userRole == 'policy_reviewer' || $userRole == 'policy_approver'){?>
                                        <div class="date"><?php echo $feed['date']?></div>
                                      <?php } else {  ?>
                                        <div class="date"> Just now </div>
                                      <?php } ?>
                                  </div>
                                </li>
                              <?php 
                            } ?>
                          </div>
                        </div>                        
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>              
              <div class="row">   
                <div class="col-md-6">                      
                  <div class="portlet light bordered" data-step="5" data-intro="Logs of user logins">
                    <div class="portlet-title">
                      <div class="caption caption-md">
                        <i class="icon-bar-chart theme-font hide"></i>
                        <span class="caption-subject font-blue-madison bold uppercase">User Logs</span>
                        
                      </div>                      
                    </div>
                    <div class="portlet-body">
                      <div class="scroller" style="height: 315px; overflow-y: scroll;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                        <div class="general-item-list">
                          <?php foreach($getAllSupportTickets as $support) {?>
                          <div class="item">
                            <div class="item-head">
                              <div class="item-details">
                                
                                <a class="item-name primary-link"><?php echo htmlspecialchars($support['last_name']) ?></a>
                                <!-- <span class="item-label">3 hrs ago</span> -->
                              </div>
                              <span class="item-status">
                              <span >Logged in at</span> <?php echo htmlspecialchars($support['logged_in_time']) ?>
                              <br/>
                              <span >Logged out at</span> <?php echo htmlspecialchars($support['logged_out_time']) ?>
                            </span>
                            </div>
                            
                          </div>
                          <?php } ?>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="portlet light portlet-fit bordered" data-step="6" data-intro="This is the list Timeline" style="height: 410px;">
                    <div class="portlet-title">
                      <div class="caption">
                        <i class="icon-microphone font-green"></i>
                        <span class="caption-subject bold font-green uppercase"> Timeline</span>
                        <span class="caption-helper">user timeline</span>
                      </div>
                      <form method="POST" action="view/common/chatProcess.php">
                        <select name="to_id" style="margin-left: 49px;height: 30px;background-color: white;border: 1px solid #48D1CC;">
                           <?php foreach($users as $user){
                            if($_SESSION['user_id']!=$user['id']){ ?>
                          <option value="<?php echo $user['id']; ?>"><?php echo htmlspecialchars($user['last_name']); ?></option>
                           <?php } } ?> 
                        </select><br><br>
                        <input type="text" name="chatMessage" style="margin-left: 49px;width: 196px;">
                        <button type="submit" name="submit" style="width: 70px;height: 25px;margin-left: 3px;border: 1px solid #48D1CC;background-color:  #48D1CC;">Post</button>
                      </form>                      
                    </div>
                    <div class="portlet-body">
                      <div class="timeline" style="overflow:scroll; height:250px;>                               
                        <div class="timeline-item">                                                        
                          <div class="timeline-item">
                            <div class="timeline-badge">
                            <img class="timeline-badge-userpic" src="assets/img/shan.jpg"> </div>
                            <div class="timeline-body">
                              <div class="timeline-body-arrow"> </div>
                              <div class="timeline-body-head">
                                <div class="timeline-body-head-caption">
                                  <a href="javascript:;" class="timeline-body-title font-blue-madison">Shanmugavel Sankaran</a>
                                  <span class="timeline-body-time font-grey-cascade">Added office location at 2:50 PM</span>
                                </div>
                                <div class="timeline-body-head-actions">
                                  <div class="btn-group">                                      
                                    <ul class="dropdown-menu pull-right" role="menu">
                                      <li>
                                        <a href="javascript:;">Action </a>
                                      </li>
                                      <li>
                                        <a href="javascript:;">Another action </a>
                                      </li>
                                      <li>
                                        <a href="javascript:;">Something else here </a>
                                      </li>
                                      <li class="divider"> </li>
                                      <li>
                                        <a href="javascript:;">Separated link </a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>                                    
                            </div>
                          </div>  
                       <?php foreach($chats as $chat){ ?>  
                       <?php $from = $timeManager->userDetails($chat['from_id']); ?>                            
                          <div class="timeline-item">
                            <div class="timeline-badge">
                              <div class="timeline-icon">
                                <i class="icon-user-following font-green-haze"></i>
                              </div>
                            </div>
                            <div class="timeline-body">
                              <div class="timeline-body-arrow"> </div>
                              <div class="timeline-body-head">
                                <div class="timeline-body-head-caption">
                                  <span class="timeline-body-alerttitle font-red-intense"><?php echo $from[0]['last_name']; ?></span>
                                  <?php $to = $timeManager->userDetails($chat['to_id']); ?>
                                  <span class="timeline-body-time font-grey-cascade"><?php echo $chat['create_time']; ?></span>
                                </div>
                                <div class="timeline-body-head-actions">
                                  <div class="btn-group">                                        
                                      <ul class="dropdown-menu pull-right" role="menu">
                                        <li>
                                          <a href="javascript:;">Action </a>
                                        </li>
                                        <li>
                                          <a href="javascript:;">Another action </a>
                                        </li>
                                        <li>
                                          <a href="javascript:;">Something else here </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                          <a href="javascript:;">Separated link </a>
                                        </li>
                                      </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="timeline-body-content">
                                <span class="font-grey-cascade"> @<?php echo $to[0]['last_name']; ?>  <?php echo $chat['message']; ?>
                                  
                                </span>
                              </div>
                            </div>
                          </div> 
                      <?php }?>
                      
                        </div>
                        
               
                      </div>
                    </div>
                  </div>
                </div>
              </div>                                       
            </div>
            <?php
            if ($_SESSION['user_role']=='super_admin') {
            ?>
               <div class="row">
              <div class="col-md-12">
                <div class="portlet box green" data-step="7" data-intro="creating Organization Structure">
                  <div class="portlet-title"><div class="caption">USER MANAGEMENT</div></div>      
                  <div class="portlet-body">                        
                    <div class="table-scrollable table-scrollable-borderless">
                      <div class="container" style="width: 100%; margin-left: -3%;
                        margin-top: 0px;">
                        <div class="row profile col-md-12" style="margin-top: 0px;">
                          <div class="" style="width: 105%; margin-left: 0%; 
                          margin-top: 0px; height: 426px;"> 
                            <div class="portlet light bordered" style="margin-left: 0%;
                              width: 100%; height: 654px;">
                              <div class="portlet-title tabbable-line">
                                <div class="caption caption-md">
                                  <i class="icon-globe theme-font hide"></i>
                                </div>
                                <div class="col-md-12" style="margin-left: -2%; width: 112%;">
                                  <?php 
                                    if($_SESSION['user_role']=='super_admin')
                                    {
                                      include "../superadmin/userAdmin.php";
                                    }
                                  ?>
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

            <?php              
            }
            ?>
          
          </div>                                  
        </div>
      </div>           
    </div>   
    <div>
      
      <a class="btn btn-primary btn-sm" href="javascript:Appcues.show('-LDztF1m9QMWizoTy9zP')">Show hints &#x27a4;</a>
    </div>




    <!-- <script src="metronic/theme/assets/global/plugins/jquery.min.js" type="text/javascript"></script> -->
    <script src="metronic/theme/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>    
    <script src="metronic/theme/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>    
    <script src="metronic/theme/assets/global/scripts/app.min.js" type="text/javascript"></script>      
    <script src="metronic/theme/assets/pages/scripts/profile.min.js" type="text/javascript"></script> 
    <!-- gmaps -->
    <!-- <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script src="metronic/theme/assets/pages/scripts/timeline.min.js" type="text/javascript"></script> 
    <script src="metronic/theme/assets/global/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>  -->
  </body>  
</html>