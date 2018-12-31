<?php
require_once __DIR__.'/getdatadispurse.php';
$manager=new jeweller();
$res=$manager->getuserforadvanceamount();
echo json_encode($res);
?>
