<?Php
require_once __DIR__.'/../common/constants.php';
require_once __DIR__.'/../common/dbOperations.php';
require_once __DIR__.'/../common/appConfig.php';
class purchase{
function getData($getData){
	$sql='INSERT INTO `purchase_order` (`contract_id`, `purchase_order_id`, `partner_contact_name`, `purchase_email`, `purchase_phone`, `purchase_date`, `total_purchase_value`, `total_invoice_against_purchase_order`,`status`) VALUES (?,?,?,?,?,?,?,?,?)';
	$paramArray = array($getData->contract_id,$getData->purchase_order_id,$getData->partner_contact_name,$getData->purchase_email,$getData->purchase_phone,$getData->purchase_date,$getData->total_purchase_value,$getData->total_invoice_against_purchase_order,$getData->status);          
   $dbOps = new DBOperations();
        return $dbOps->cudData($sql, 'sssssssss', $paramArray);
}


public function getPurchaseData($contract_id)
{
		$sql='SELECT * FROM `purchase_order` where `contract_id`=?';
		$dbOps = new DBOperations();
        $paramArray = array($contract_id);
        return $dbOps->fetchData($sql, 's', $paramArray);
}

	 function updatepurchase($getData)
	{
	$sql="UPDATE `purchase_order` SET `contract_id` =?, `purchase_order_id` =?, `partner_contact_name` =?, `purchase_email` =?, `purchase_phone` =?,`purchase_date`=? ,`total_purchase_value` =?, `total_invoice_against_purchase_order` =? WHERE `purchase_order`.`contract_id` = ?";
	$paramArray = array(
	$getData->contract_id,$getData->purchase_order_id,$getData->partner_contact_name,$getData->purchase_email,$getData->purchase_phone,$getData->purchase_date,$getData->total_purchase_value,$getData->total_invoice_against_purchase_order,$getData->contract_id);
	        error_log("paramArray".print_r($paramArray,true));        

        $dbOps = new DBOperations();
        return $dbOps->cudData($sql, 'sssssssss', $paramArray);

	}

	public function getpurchaseList(){
		$sql="SELECT `contract_id`,`partner_contact_name`,`purchase_email`,`purchase_phone`,`purchase_date`,`total_purchase_value`,`total_invoice_against_purchase_order`,`status` FROM `purchase_order`";
  $dbOps = new DBOperations();
  return $dbOps->fetchData($sql);
	}


	function createnotesforreview($getData)
{
	$sql='INSERT INTO `purchase_review` (`contract_id`, `review_notes`) VALUES (?,?)';
	$paramArray = array($getData->contract_id,$getData->reviewnotes);          
   $dbOps = new DBOperations();
   	        error_log("paramArray".print_r($paramArray,true));        

        return $dbOps->cudData($sql, 'ss', $paramArray);
}

function updateStatus($getData){
$sql="UPDATE `purchase_order` SET `status` =? WHERE `purchase_order`.`contract_id` = ?";
	$paramArray = array($getData->status,$getData->contract_id);

        $dbOps = new DBOperations();
        return $dbOps->cudData($sql, 'ss', $paramArray);
}


public function getreviewList()
{
$sql="SELECT `contract_id`,`purchase_order_id`,`partner_contact_name`,`purchase_email`,`purchase_phone`,`total_purchase_value`,`total_invoice_against_purchase_order`,`status` FROM `purchase_order` where `status`!='Reviewed'";
		$dbOps = new DBOperations();
  return $dbOps->fetchData($sql);	
}

public function getcontract_id($getData)
{
  $sql="SELECT contract_id FROM `create_contract` WHERE effective_start_date=? and contract_end_date=?";
    $dbOps = new DBOperations();
        $paramArray = array($getData->start_date,$getData->end_date);
        return $dbOps->fetchData($sql, 'ss', $paramArray); 
}

}



?>