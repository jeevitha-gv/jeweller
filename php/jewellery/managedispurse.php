<?php
    require_once __DIR__.'/getdatadispurse.php';
    $metaData = new jeweller();


      switch ($_POST['action']){
        case 'create':
          $eventData = getDataFromRequest();            
          $metaData->createData($eventData);
          $metaData->interestpaymentcreate($eventData);
          break;
        case 'paid':
          $eventData = getDataforinterest();            
          $metaData->updateinterest($eventData);
          $metaData->interestpayment($eventData);
          break;
        case 'renewal':
          $eventData = getDataforrenew();            
          $metaData->updateinterest($eventData);
          $metaData->interestpayment($eventData);
          break;
           case 'close':
          $eventData = getDataforclose();            
          $metaData->updateinterest($eventData);
          $metaData->interestpayment($eventData);
          break;
          case 'updaterenewal':
          $eventData = getdatatoupdaterenewal();
          $metaData->updaterenewaldate($eventData);            
            break;
    }

    function getDataFromRequest(){
       $eventData = new stdClass();
       $eventData->name = $_POST['name']; 
       $eventData->start_date = $_POST['start_date'];
       $eventData->renewaldate=date('Y-m-d',strtotime($_POST['start_date'].'+365 days'));
       $eventData->phonenumber = $_POST['phonenumber']; 
       $eventData->bill_number = $_POST['bill_number']; 
       $eventData->driving_license = $_POST['driving_license']; 
       $eventData->dob = $_POST['dob']; 
       $eventData->address = $_POST['address'];  
       $eventData->Weight = $_POST['Weight']; 
       $eventData->carat = $_POST['carat']; 
       $eventData->rateofinterest = $_POST['rateofinterest']; 
       $eventData->marketvalue = $_POST['marketvalue']; 
       $eventData->assessedvalue = $_POST['assessedvalue']; 
       $eventData->amontadvance = $_POST['amontadvance']; 
       $eventData->totalinterest = $_POST['monthlyinterest'];
       $eventData->signature = $_POST['signature']; 
       $eventData->mail=$_POST['mail'];
       $eventData->status='create';
      return $eventData;
    } 

    function getDataforinterest(){
       $eventData = new stdClass();
       $eventData->phonenumber = $_POST['phonenumber']; 
       $eventData->renewaldate=date('Y-m-d',strtotime($_POST['end_date'].'+365 days'));
       $eventData->bill_number = $_POST['bill_number']; 
       $eventData->start_date = $_POST['start_date']; 
       $eventData->end_date = $_POST['end_date']; 
       $eventData->totalinterest = $_POST['totalinterest']; 
       $eventData->status='paid';
      return $eventData;
    }


    function getDataforrenew(){
       $eventData = new stdClass();
       $eventData->phonenumber = $_POST['phonenumber']; 
       $eventData->renewaldate=date('Y-m-d',strtotime($_POST['end_date'].'+365 days'));
       $eventData->bill_number = $_POST['bill_number']; 
       $eventData->start_date = $_POST['start_date']; 
       $eventData->end_date = $_POST['end_date']; 
       $eventData->totalinterest = $_POST['totalinterest']; 
       $eventData->status='renewal';
      return $eventData;
    }
    function getDataforclose(){
       $eventData = new stdClass();
       $eventData->phonenumber = $_POST['phonenumber']; 
       $eventData->bill_number = $_POST['bill_number']; 
       $eventData->start_date = $_POST['start_date']; 
       $eventData->end_date = $_POST['end_date']; 
       $eventData->totalinterest = $_POST['totalinterest'];
       $eventData->renewaldate='0'; 
       $eventData->status='close';
      return $eventData;
    }


   function getdatatoupdaterenewal()
   {
    $eventData = new stdClass();
       $eventData->phonenumber = $_POST['phonenumber']; 
       $eventData->bill_number = $_POST['bill_number']; 
       $eventData->start_date = $_POST['start_date']; 
       $eventData->end_date = $_POST['end_date']; 
       $eventData->totalinterest = $_POST['totalinterest'];
       $eventData->renewaldate=$_POST['datatoasign'];
      return $eventData;
   }
?>


