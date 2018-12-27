<?php
require_once __DIR__.'/getDatapurchaseorder.php';
$getclass=new purchase();
$getlist=$getclass->getpurchaseList();
echo json_encode($getlist);
?>