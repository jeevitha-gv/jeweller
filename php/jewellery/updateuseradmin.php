<?php
 require_once __DIR__.'/getdatadispurse.php';
$manager=new jeweller();
$eventData=getDataFromRequest();
$updatadate=$manager->updatasuperadmin($eventData);
 function getDataFromRequest(){
       $eventData = new stdClass();
       $eventData->userFileName = $_POST['userFileName']; 
       $eventData->name = $_POST['name'];
       $eventData->number = $_POST['number']; 
       $eventData->address = $_POST['address']; 
       error_log('fdsb'.print_r($eventData,true));
      return $eventData;
    } 

   