
<?php
require_once __DIR__.'/../../php/jewellery/getdatadispurse.php';
$phonenumber=$_POST['phonenumber'];
$billnumber=$_POST['billdata'];
$manager=new jeweller();
$getdata=$manager->getrenewabledate($billnumber,$phonenumber);
$count=count($getdata);
?>

   <label for="SecurityRecommendations" class="control-label">End Date</label><br>

  <input type="Date" class="form-control mainheading" id="end_date"   value="<?php echo $getdata[$count-1]['renewaldate'];?>" >
  <input type="hidden" class="form-control mainheading" id="datatoasign"   value="<?php echo $getdata[$count-1]['enddate'];?>" >
