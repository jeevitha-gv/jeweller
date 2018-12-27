<?php
require_once __DIR__.'/../../php/jewellery/getdatadispurse.php';
$phonenumber=$_POST['phonenumber'];
$billnumber=$_POST['billdata'];
$manager=new jeweller();
$getdata=$manager->getrenamount($billnumber,$phonenumber);
$count=count($getdata);
?>

   <label for="SecurityRecommendations" class="control-label">Date</label><br>

  <input type="text" class="form-control mainheading" id="renewal" value="<?php echo $getdata[$count-1]['enddate'];?>" readonly>
