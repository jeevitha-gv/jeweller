<?php
 require_once __DIR__.'../../php/jewellery/getdatadispurse.php';
$manager=new jeweller();
$getdata=$manager->getdataforsuperadmin();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Jeweller</title>
    <base href="/Jeweller/">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link href="assets/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="assets/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="assets/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="assets/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="assets/img/favicon.png" rel="icon" type="image/png">
    <link href="assets/img/favicon.ico" rel="shortcut icon">
    <link href="metronic/theme/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="metronic/theme/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="metronic/theme/assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="metronic/theme/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="metronic/theme/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="metronic/theme/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/lib/font-awesome/font-awesome.min.css">  
<script type="text/javascript" src="js/jewellery/dashboard.js"></script>
<style type="text/css">
  * {
  box-sizing: border-box;
}
input[type=text],[type=password]{
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
</style>
</head>
<body>
  <?php
     $_SESSION['user_role']='purchase_update';
                    include "siteHeader.php";
                    include "common/leftMenu.php"; ?>
                    <div class="page-content-wrapper" style="width:1076px;height:1076px;margin-left:200px;margin-top:10px;">      <!-- BEGIN CONTENT BODY -->
     <div class="portlet box green">
            <div class="portlet-title">
              <div class="caption">Super Admin</div></div>      
            <div class="portlet-body" style="height: 479px;">
             <div class="panel-body">
  <div class="row" align="center">
    <div class="col-md-6 " style="margin-top: 30px;" >
        
         <div class="row">
        <div class="col-25">
           <label for="fname">Logo</label>
      </div>
      <div class="col-75">
        <img src="uploadedFiles/<?php echo $getdata[0]['userFileName'];?>" width="200px";height="200px">
      </div>
    </div>
        <div class="row">
        <div class="col-25">
           <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" value="<?php echo $getdata[0]['name'];?>" readonly>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Phone Number</label>
      </div>
      <div class="col-75">
        <input type="number" id="number" readonly style="width:199px; height:45px" value="<?php echo $getdata[0]['number'];?>" >
      </div>
    </div>
 <div class="row">
      <div class="col-25">
        <label for="lname">Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="address" value="<?php echo $getdata[0]['address'];?>" readonly>
      </div>
    </div>
   
    <div class="row">
      <button  class="btn btn-primary" name="submit" style="margin-left: 250px;color:white;" onclick="window.location='superAdmin.php'">Click Here To Update</button>
    </div>
   </div>
  </div>
</div>
</div>
</div>
</div>
</body>
</html>

