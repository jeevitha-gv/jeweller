<?php
require_once __DIR__.'/getDatapurchaseorder.php';
$getclass=new purchase();
$getlist=$getclass->getreviewList();
echo json_encode($getlist);
?>