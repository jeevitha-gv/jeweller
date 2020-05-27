
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
    <link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.11.4/jquery-ui.css" />    
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/heatmap.js"></script>
<script src="https://code.highcharts.com/modules/treemap.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>

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

    <style>


    .tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}

/* Style the close button */
.topright {
    float: right;
    cursor: pointer;
    font-size: 28px;
}

.topright:hover {color: red;}
    .highcharts-credits{
      visibility: hidden;
    }
    .jqstooltip { 
      position: absolute;
      left: 0px;
      top: 0px;
      visibility: hidden;
      background: rgb(0, 0, 0) transparent;
      background-color: rgba(0,0,0,0.6);
      filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;
    }
     .jqsfield { 
        color: white;
        font: 10px arial, san serif;
        text-align: left;
      }
      .desc {
        padding-top: 25px;
      }
      #chartdiv1 {
        background-color: white;
       height: 350px;     
      }
      #chartdiv2 {
        height: 350px;
        background-color: white;
      }     
      #chartdiv1 a, #chartdiv2 a, #chartdiv3 a, #chart_4 a{
      position: absolute;
      text-decoration: none;
      color: rgb(0, 0, 0);
      font-family: Verdana;
      font-size: 11px;
      opacity: 0.7;
      display: none !important;
      left: 5px;
      top: 5px;    
    }
    
      </style>
  </head>
  <body style="font-family: sans-serif !important;">
      <body> 
            <?php
     $_SESSION['user_role']='purchase_update';
              include "../siteHeader.php";
              include "../common/leftMenu.php"; ?>
        <div class="page-content-wrapper">          
          <div class="page-content">
          <div id="onclickk" ondblclick="myFunction()"> 
    
            <div class="clearfix"></div>             
            <div class="row">
              <div class="col-lg-6 col-xs-12 col-sm-12">                  
                <div class="portlet light bordered">
                  <div class="portlet-title">
                    <div class="caption">
                      <i class="icon-bar-chart font-dark hide"></i>
                      <span class="caption-subject font-dark bold uppercase">Pawn Status By Advance Amount</span>   
                    </div>                 
                  </div>
                  <div class="portlet-body">                  
                    <div id="chartdiv1" class="display-none" style="display: block;height: 350px;">                   
                    </div>
                  </div>
                </div>                  
              </div>
              <div class="col-lg-6 col-xs-12 col-sm-12">                  
                <div class="portlet light bordered">
                  <div class="portlet-title">
                    <div class="caption">
                      <i class="icon-share font-red-sunglo hide"></i>
                      <span class="caption-subject font-dark bold uppercase">Pawn status By Interest Amount</span>         
                    </div>                 
                  </div>
                  <div class="portlet-body">                  
                    <div id="chartdiv2" class="display-none" style="display: block;height: 350px;">                     
                    </div>                  
                  </div>
                </div>                
              </div>

            </div>                       
          </div>
          </div>
        </div>
        <script type="text/javascript">
          $(document).ready(function(){
             $.ajax({
            dataType: "json",
            url: "php/jewellery/amountinadvance.php",
            success:amountinadvance
          });

                 $.ajax({
            dataType: "json",
            url: "php/jewellery/getdatapawnstatus.php",
            success:getdatapawnstatus
          });
          });


          function amountinadvance(data){
             var chartData=[];
  seriesData=[];
  var chartDrillData=[];
for(i=0;i<data.length;i++){
    chartData.push({"name":data[i].amontadvance,"y":parseInt(data[i].count),"drilldown":data[i].amontadvance});
  }
  for(i=0;i<data.length;i++){
for(j=0;j<data.length;j++){
   seriesData.push([data[j].name,1]);
      } 
      chartDrillData.push({"name":data[i].amontadvance,"id":data[i].amontadvance,"data":seriesData,"drilldown":data[i].amontadvance});
  seriesData=[];

}

    
Highcharts.chart('chartdiv1', {
    chart: {
        type: 'pie'
    },
    credits:
{
  enabled: false
},
    title: {
        text: ''
    },
    subtitle: {
        text: '<a href="http://statcounter.com" target="_blank"></a>'
    },
    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    "series": [{
        name:'name',
        colorByPoint: true,
        data:chartData,
        drilldown:'name'

    }],

    "drilldown": {
    "series": chartDrillData,

    }
});
            
}



 function getdatapawnstatus(data){
  console.log(data);
             var chartData=[];
  seriesData=[];
  var chartDrillData=[];
for(i=0;i<data.length;i++){
    chartData.push({"name":data[i].rateofinterest,"y":parseInt(data[i].count),"drilldown":data[i].rateofinterest});
  }
  for(i=0;i<data.length;i++){
for(j=0;j<data.length;j++){
   seriesData.push([data[j].name,1]);
      } 
      chartDrillData.push({"name":data[i].rateofinterest,"id":data[i].rateofinterest,"data":seriesData,"drilldown":data[i].rateofinterest});
  seriesData=[];

}

    
Highcharts.chart('chartdiv2', {
    chart: {
        type: 'pie'
    },
    credits:
{
  enabled: false
},
    title: {
        text: ''
    },
    subtitle: {
        text: '<a href="http://statcounter.com" target="_blank"></a>'
    },
    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    "series": [{
        name:'name',
        colorByPoint: true,
        data:chartData,
        drilldown:'name'

    }],

    "drilldown": {
    "series": chartDrillData,

    }
});
            
}
        </script>
      </body>
  </body>
</html>
