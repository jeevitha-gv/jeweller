<?php
require_once __DIR__.'/getDatapurchaseorder.php';
switch ($_POST['action']) {
case 'create':
$getClass=new purchase();
$getData=createpurchase();
$manager=$getClass->getData($getData);
break;
case 'update':
$getClass=new purchase();
$getData=getdatatoupdate();
$manager=$getClass->updatepurchase($getData);
$manager=$getClass->updateStatus($getData);
break;
case 'review':
$getClass=new purchase();
$getData=getdatatoreview();
$manager=$getClass->updateStatus($getData);
$insertReview=$getClass->createnotesforreview($getData);
break;
}
function createpurchase(){
	$creatData=new stdClass();
	$creatData->contract_id=$_POST['contract_id'];
	$creatData->purchase_order_id=$_POST['purchase_order_id'];
	$creatData->partner_contact_name=$_POST['partner_contact_name'];
	$creatData->purchase_email=$_POST['purchase_email'];
	$creatData->purchase_phone=$_POST['purchase_phone'];
	$creatData->purchase_date=$_POST['purchase_date'];
	$creatData->total_purchase_value=$_POST['total_purchase_value'];
	$creatData->total_invoice_against_purchase_order=$_POST['total_invoice_against_purchase_order'];
	$creatData->status='Created';
return $creatData;

}

function getdatatoupdate(){
	$creatData=new stdClass();
	$creatData->contract_id=$_POST['contract_id'];
	$creatData->purchase_order_id=$_POST['purchase_order_id'];
	$creatData->partner_contact_name=$_POST['partner_contact_name'];
	$creatData->purchase_email=$_POST['purchase_email'];
	$creatData->purchase_phone=$_POST['purchase_phone'];
	$creatData->purchase_date=$_POST['purchase_date'];
	$creatData->total_purchase_value=$_POST['total_purchase_value'];
	$creatData->total_invoice_against_purchase_order=$_POST['total_invoice_against_purchase_order'];
	$creatData->status='Updated';
return $creatData;
}


function getdatatoreview(){
	$creatData=new stdClass();
	$creatData->contract_id=$_POST['contract_id'];
	$creatData->reviewnotes=$_POST['reviewnotes'];
	$creatData->status='Reviewed';
return $creatData;
}
?>

