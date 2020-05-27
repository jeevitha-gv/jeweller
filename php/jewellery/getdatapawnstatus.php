<?php
require_once __DIR__.'/getdatadispurse.php';
$manager=new jeweller();
$res=$manager->getadvanceamountdata();
echo json_encode($res);
?>
