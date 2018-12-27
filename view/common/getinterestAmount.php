<?php
require_once __DIR__.'/../../php/jewellery/getdatadispurse.php';
$phonenumber=$_POST['phonenumber'];
$billnumber=$_POST['billdata'];
$manager=new jeweller();
$getdata=$manager->getinterestamount($billnumber,$phonenumber);
?>

   <label for="SecurityRecommendations" class="control-label">Interest Amount</label><br>

  <input type="text" class="form-control mainheading"  id="interestrate" value="<?php echo $getdata[0]['monthlyinterest']; ?>" readonly>
