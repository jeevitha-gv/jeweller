<?php
require_once __DIR__.'/../../php/jewellery/getdatadispurse.php';

// require_once __DIR__.'/../../php/common/config.php';
// require_once __DIR__.'/../../php/whistleblower/whistleManager.php';
$manger = new jeweller();
$pClosed = $manger->getdata();

?>
<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pawn List</title>
    <base href="/Jeweller/">

  <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css" />
    <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
    <!-- <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>  -->
      
    <!-- <script type="text/javascript" src="assets/DataTables/DataTables-1.10.12/js/jquery.dataTables.min.js"></script> -->
        <script type="text/javascript" src="assets/DataTables/Buttons-1.2.1/js/dataTables.buttons.min.js"></script> 
           <script type="text/javascript" src="assets/DataTables/Buttons-1.2.1/js/buttons.flash.min.js"></script> 
        <script type="text/javascript" src="assets/DataTables/pdfmake.min.js"></script>
        <script type="text/javascript" src="assets/DataTables/pdfmake-0.1.18/build/vfs_fonts.js"></script>
        <script type="text/javascript" src="assets/DataTables/Buttons-1.2.1/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="assets/DataTables/Buttons-1.2.1/js/buttons.print.min.js"></script>
        <script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>    
      

    <link href="assets/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="assets/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="assets/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="assets/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="assets/img/favicon.png" rel="icon" type="image/png">
    <link href="assets/img/favicon.ico" rel="shortcut icon">



    <link rel="stylesheet" href="assets/css/lib/font-awesome/font-awesome.min.css">
   

    <style>
        #viewdata {
          /*margin-left: 242px;
          margin-top: -185px;
          margin-right: 135px;
          margin-bottom: 40px;*/
          margin-left: 22%;
          margin-top: -10%;
        }

        table,
        th,
        td {
            border: 1% solid black;
        }

        td {
            height: 50px;
            vertical-align: middle;
        }

        i.fa-vibe {
            content: "";
            background-image: url('complaints.png');

            width: 50px;
            height: 50px;
            display: inline-block;
            background-position: center;
            background-size: cover;
        }
        label{
        font-weight: 600;
        }
        body{
          font-size: 14px;
        }
        body, h1, h2, h3, h4, h5, h6 {
          font-family: "Open Sans",sans-serif;
        }
        .hover{
          color:none;
        }
        .panel{
          background-color: #fff;
          border: 1px solid #32c5d2;
          margin-bottom: 20px;
          box-shadow: none!important;
          border-radius: 0!important;
          color: rgba(0,0,0,0.87);
          padding: 20px;
          width: 1150px;

        }
        .btn{
          border-radius: 0px !important;
          border: none !important;
        }
        .form-control{
              border-radius: 0px;
        }
          .btn.btn-outline.dark {
            border-color: #2f353b;
            color: #2f353b;
            background: 0 0;
            border: 1px solid #2f353b !important;
            margin-left: 7px !important;
           
        }
        .btn.btn-outline.red {
            border-color: #e7505a;
            color: #e7505a;
            background: 0 0;
            border: 1px solid #e7505a !important;
             margin-left: 7px !important;
        }
        .btn.btn-outline.green {
            border-color: #32c5d2;
            color: #32c5d2;
            background: 0 0;
             border: 1px solid #32c5d2 !important;
              margin-left: 7px !important;
        }
        .btn.btn-outline.purple {
            border-color: #8E44AD;
            color: #8E44AD;
            background: 0 0;
            border: 1px solid #8E44AD !important;
             margin-left: 7px !important;
        }
          div.dataTables_wrapper div.dataTables_length label {
        font-weight: normal;
        text-align: left;
        white-space: nowrap;
        display: none !important;
        }
        div.dataTables_wrapper div.dataTables_filter label {
            font-weight: normal;
            white-space: nowrap;
            text-align: left;
            display: none !important;

       }
     
    </style>
</head>


<body>

   <?php
     $_SESSION['user_role']='purchase_update';
                    include "../siteHeader.php";
                    include "../common/leftMenu.php"; ?>
</body>


  
    <body >
       <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                  
                    <div class="row">
                        <div class="col-md-12">
                         <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">Pawn List</div>
                                  
                                </div>
    
      
          <div class="portlet-body ">
          
          

            <table id="modaldetails" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead >
                    <tr>
                      <th>Id</th>
                        <th>Bill Number</th>
                        <th>Name</th>
                        <th>Phone Number</th> 
                        <th>Amount</th>
                        <th>Interest</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                   <?php foreach ($pClosed as $dat) { ?>
                    <tr>
                      <td><?php echo $dat['id']; ?></td>
                       <td><?php echo $dat['bill_number']; ?></td>
                      <td><?php echo $dat['name']; ?></td>
                      <td><?php echo $dat['phonenumber']; ?></td>
                      <td><?php echo $dat['monthlyinterest']; ?></td>
                      <td><?php echo $dat['rateofinterest']; ?></td>
                      <td><?php echo $dat['status']; ?></td>
                      <td><button class="btn btn-primary" style="background: #8e44ad"><a style="color: #fdfdfd;" href="/Jeweller/view/purchase/jewelleryReport.php?id=<?php echo $dat['id']; ?>">More</a></button></td>
                    </tr>
                   <?php } ?> 
                  </tbody>
                                    </table>
                                </div>
                            </div>
                       
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>        
</body>



</html>