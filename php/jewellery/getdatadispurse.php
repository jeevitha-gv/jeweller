<?php
require_once __DIR__.'/../common/constants.php';
require_once __DIR__.'/../common/dbOperations.php';
require_once __DIR__.'/../common/appConfig.php';
class jeweller{
    function createData($eventData){
   	$sql="INSERT INTO `dispurse` (`name`,`start_date`,`phonenumber`, `bill_number`, `driving_license`, `dob`, `address`, `Weight`, `carat`, `rateofinterest`, `marketvalue`, `assessedvalue`, `amontadvance`, `monthlyinterest`, `signature`,`mail`,`status`) VALUES  (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $paramArray = array(  
       $eventData->name, 
       $eventData->start_date, 
       $eventData->phonenumber,
       $eventData->bill_number,
       $eventData->driving_license,
       $eventData->dob,
       $eventData->address,
       $eventData->Weight,
       $eventData->carat ,
       $eventData->rateofinterest ,
       $eventData->marketvalue ,
       $eventData->assessedvalue,
       $eventData->amontadvance,
       $eventData->totalinterest,
       $eventData->signature,
        $eventData->mail,
       $eventData->status
      
);        
        $dbOps = new DBOperations();        
        return $dbOps->cudData($sql, 'sssssssssssssssss', $paramArray); 
    }





        function updateinterest($eventData){
    $sql="UPDATE `dispurse` SET `status` = ? WHERE phonenumber =? and bill_number=?";
        $paramArray = array( 
       $eventData->status, 
       $eventData->phonenumber,
       $eventData->bill_number,
      
);        
        $dbOps = new DBOperations();        
        return $dbOps->cudData($sql, 'sss', $paramArray); 
    }




    public function getdata()
    {
      $sql='SELECT * FROM dispurse order by `id` DESC';
        $dbOps = new DBOperations();    
        return $dbOps->fetchData($sql);
    }

    public function getpawndata($id)
    {

  $sql='SELECT * FROM `dispurse` where `id`=?';
    $dbOps = new DBOperations();
        $paramArray = array($id);
        return $dbOps->fetchData($sql, 'i', $paramArray); 

    }

public function getbilldata($phonenumber)
{
  $sql='SELECT `bill_number` FROM `dispurse` where `phonenumber`=?';
    $dbOps = new DBOperations();
        $paramArray = array($phonenumber);
        return $dbOps->fetchData($sql, 'i', $paramArray); 

}

public function getinterestamount($billdata,$phonenumber)
{
  $sql='SELECT `monthlyinterest` FROM `dispurse` where `bill_number`=? and `phonenumber`=?';
    $dbOps = new DBOperations();
        $paramArray = array($billdata,$phonenumber);
        return $dbOps->fetchData($sql, 'ii', $paramArray); 

}


public function getrenamount($billdata,$phonenumber)
{
  $sql='SELECT `enddate` FROM `interest` where `billnumber`=? and `phonenumber`=?';
    $dbOps = new DBOperations();
        $paramArray = array($billdata,$phonenumber);
        return $dbOps->fetchData($sql, 'ii', $paramArray); 

}
public function getrenewabledate($billdata,$phonenumber)
{
  $sql='SELECT `renewaldate`,`enddate` FROM `interest` where `billnumber`=? and `phonenumber`=?';
    $dbOps = new DBOperations();
        $paramArray = array($billdata,$phonenumber);
        return $dbOps->fetchData($sql, 'ii', $paramArray); 

}


function interestpayment($eventData)
{
    $sql="INSERT INTO `interest` (`phonenumber`, `billnumber`, `startdate`, `enddate`, `interestpaid`,`renewaldate`) VALUES (?,?,?,?,?,?)";
        $paramArray = array(  
       $eventData->phonenumber,
       $eventData->bill_number,
       $eventData->start_date,
       $eventData->end_date,
       $eventData->totalinterest,       
      $eventData->renewaldate,
);        
        $dbOps = new DBOperations();        
        return $dbOps->cudData($sql, 'ssssss', $paramArray); 
}

function interestpaymentcreate($eventData)
{
    $sql="INSERT INTO `interest` (`phonenumber`, `billnumber`, `startdate`, `enddate`,`renewaldate`, `interestpaid`) VALUES (?,?,?,?,?,?)";
        $paramArray = array(  
       $eventData->phonenumber,
       $eventData->bill_number,
       $eventData->start_date,
       $eventData->start_date,
       $eventData->renewaldate,

       $eventData->totalinterest,       
      
);        
        $dbOps = new DBOperations(); 
        return $dbOps->cudData($sql, 'ssssss', $paramArray); 
}


    public function nameofpawndetails($id)
    {

  $sql='SELECT * FROM `pawndata`,`dispurse` where `pawndata`.`number`=`dispurse`.`phonenumber` and `pawndata`.`billnumber`=`dispurse`.`bill_number` and `dispurse`.`id`=?';
    $dbOps = new DBOperations();
        $paramArray = array($id);
        return $dbOps->fetchData($sql, 'i', $paramArray); 

    }

function updaterenewaldate($eventData)
{
   $sql="UPDATE `interest` SET `renewaldate` = ? WHERE phonenumber =? and billnumber=? and enddate=?";
        $paramArray = array( 
        $eventData->end_date,
       $eventData->phonenumber,
       $eventData->bill_number,
       $eventData->renewaldate
       );        
        $dbOps = new DBOperations();        
        return $dbOps->cudData($sql, 'ssss', $paramArray); 
}
public function getDataForInterest($id)
{
   $sql="SELECT i.phonenumber,i.billnumber,i.startdate,i.enddate,d.monthlyinterest FROM dispurse d,interest i where d.phonenumber=i.phonenumber and d.bill_number=i.billnumber and d.id=29";
    $dbOps = new DBOperations();
        $paramArray = array($id);
        return $dbOps->fetchData($sql, 'i', $paramArray); 
}

public function paidcalculation($id)
{
   $sql="SELECT i.startdate,i.enddate,d.monthlyinterest FROM dispurse d,interest i where d.phonenumber=i.phonenumber and d.bill_number=i.billnumber and d.id=?";
    $dbOps = new DBOperations();
    $paramArray = array($id);
    return $dbOps->fetchData($sql, 'i', $paramArray); 
}

}
    ?>