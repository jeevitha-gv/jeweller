<?php
require_once __DIR__.'/../jewellery/getdatadispurse.php';
    $metaData = new jeweller();
    $eventData=getDataFromRequest();
    $getdata=$metaData->updateitems($eventData);
function getDataFromRequest(){
       $eventData = new stdClass();
       $eventData->updateitems=$_POST['item'];
      return $eventData;
    } 
?>