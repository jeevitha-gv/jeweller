
<?php
require_once __DIR__.'/../../php/jewellery/getdatadispurse.php';
$phonenumber=$_POST['phonenumber'];
$billnumber=$_POST['billdata'];
$manager=new jeweller();
$getdata=$manager->getrenewabledate($billnumber,$phonenumber);
$count=count($getdata);
?>

   <label for="SecurityRecommendations" class="control-label">Renewal Date</label><br>
 <div class="input-group input-large date-picker input-daterange" data-date="" data-date-format="yyyy/mm/dd">
                        <input type="text" id="date" class="form-control datepickerClass  notranslate" placeholder="On Date" name="from" class="" style="width: 299px;">
                        </div>
  <!-- <input type="Date" class="form-control mainheading" id="end_date"   value="<?php echo $getdata[$count-1]['renewaldate'];?>" > -->
  <input type="hidden" class="form-control mainheading" id="datatoasign"   value="<?php echo $getdata[$count-1]['enddate'];?>" >
