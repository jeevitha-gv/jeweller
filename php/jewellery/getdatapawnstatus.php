<?php
require_once __DIR__.'/getdatadispurse.php';
$manager=new jeweller();
$res=$manager->getstatusdata();
echo json_encode($res);
?>
