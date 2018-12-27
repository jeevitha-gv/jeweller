<?php
require_once __DIR__.'/../../php/jewellery/getdatadispurse.php';
$phonenumber=$_POST['phonenumber'];
$manager=new jeweller();
$getdata=$manager->getbilldata($phonenumber);
?>

<div class="form-group">
        <label  class="control-label">Bill Numeber
           </label>
<select class="form-control"  onchange="getinterestamounttorenewal()" id="billdata">
	<option>---Select The Bill Number---</option>

  <?php foreach ($getdata as $value) {
    foreach ($value as $val) {?>
  <option value="<?php echo $val; ?>"> <?php echo $val; ?></option>
<?php }}?>
</select>
</div>