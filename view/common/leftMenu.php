
<div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
               <div class="page-sidebar navbar-collapse collapse" style="margin-left: 6px;width: 174px;">

                   

 <?php if($_SESSION['user_role']=='purchase_update' ){ ?>
                    <ul class="page-sidebar-menu" data-keep-expanded="true" data-auto-scroll="false" data-slide-speed="200">

                       <!--  <li class="heading">
                            <h3 class="uppercase"></h3>
                        </li> -->
                        <li class="nav-item active " id="compliancedash"  >
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <span class="title">Dispursuse</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">

                                <?php if($_SESSION['user_role']=='purchase_update'){ ?>
                                 <li class="nav-item  ">
                                    <a href="view/interest/interest.php" class="nav-link ">
                                        <span class="title">Interest</span>
                                    </a>
                                </li>
                                 <li class="nav-item  ">
                                    <a href="view/renewal/renewal.php" class="nav-link ">
                                        <span class="title">Renewal</span>
                                    </a>
                                </li>
                                 <li class="nav-item  ">
                                    <a href="view/close/closepawan.php" class="nav-link ">
                                        <span class="title">Close</span>
                                    </a>
                                </li>
                                 <li class="nav-item  ">
                                    <a href="view/Notice/notice.php" class="nav-link ">
                                        <span class="title">Notice</span>
                                    </a>
                                </li>
                                 <li class="nav-item  ">
                                    <a href="view/purchase/bookedlist.php" class="nav-link ">
                                        <span class="title">PawnList</span>
                                    </a>
                                </li>
                                
                                <?php } }?>
                            </ul>
                        </li>
                        
                    </ul>
            
 <?php if($_SESSION['user_role']=='review' ){ ?>
                    <ul class="page-sidebar-menu" data-keep-expanded="true" data-auto-scroll="false" data-slide-speed="200">

                       <!--  <li class="heading">
                            <h3 class="uppercase"></h3>
                        </li> -->
                        <li class="nav-item active " id="compliancedash"  >
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <span class="title">ContractO</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">

                                <?php if($_SESSION['user_role']=='review'){ ?>
                                 <li class="nav-item  ">
                                    <a href="view/review/reviewlist.php" class="nav-link ">
                                        <span class="title">List</span>
                                    </a>
                                </li>
                                <?php } }?>
                            </ul>
                        </li>
                        
                    </ul>
            

<?php if($_SESSION['user_role']=='invoice' ){ ?>
                    <ul class="page-sidebar-menu" data-keep-expanded="true" data-auto-scroll="false" data-slide-speed="200">

                       <!--  <li class="heading">
                            <h3 class="uppercase"></h3>
                        </li> -->
                        <li class="nav-item active " id="compliancedash"  >
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <span class="title">ContractO</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">

                                <?php if($_SESSION['user_role']=='invoice'){ ?>
                                 <li class="nav-item  ">
                                    <a href="view/invoice/invoicelist.php" class="nav-link ">
                                        <span class="title">List</span>
                                    </a>
                                </li>
                                <?php } }?>
                            </ul>
                        </li>
                        
                    </ul>

                    <?php if($_SESSION['user_role']=='invoice_Approve' ){ ?>
                    <ul class="page-sidebar-menu" data-keep-expanded="true" data-auto-scroll="false" data-slide-speed="200">

                       <!--  <li class="heading">
                            <h3 class="uppercase"></h3>
                        </li> -->
                        <li class="nav-item active " id="compliancedash"  >
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <span class="title">ContractO</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">

                                <?php if($_SESSION['user_role']=='invoice_Approve'){ ?>
                                 <li class="nav-item  ">
                                    <a href="view/invoice/invoiceApprovelist.php" class="nav-link ">
                                        <span class="title">List</span>
                                    </a>
                                </li>
                                <?php } }?>
                            </ul>
                        </li>
                        
                    </ul>
            
            

                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
        









 <script type="text/javascript">
        document.getElementById("compliancedash").onclick = function() {showComplianceDash()};
        function showComplianceDash() {
           location.href = "/Jeweller/view/purchase/purchasing_order.php";
        }
    </script>



     
   
        <style type="text/css">
            .title{
              color: black;
           }
            .title :hover span{
               color:#5b9bd1;
            }
        </style>


