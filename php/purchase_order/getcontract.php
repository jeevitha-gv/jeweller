<?php
require_once __DIR__.'/getDatapurchaseorder.php';
function managedata()
{
$getClass=new purchase();
$getData=createpurchase();
$manager=$getClass->getcontract_id($getData);
echo json_encode($manager);
}

function createpurchase(){
	$creatData=new stdClass();
	$creatData->start_date=$_POST['start_date'];
	$creatData->end_date=$_POST['end_date'];
	error_log('true'.print_r($creatData,true));
return $creatData;

}
managedata();

?>