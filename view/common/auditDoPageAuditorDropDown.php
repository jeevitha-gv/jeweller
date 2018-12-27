<?php 

    require_once __DIR__.'/../../php/user/userManager.php';

    /*$userManager = new UserManager();*/
    // 4 is auditor role
   
    $allAuditors=explode(",",$GLOBALS['auditor']);
    //echo json_encode($allAuditors);
    
    $allAuditorss=array();
    
   foreach($allAuditors as $auditors)
	{
	$userManager = new UserManager();
	array_push($allAuditorss,$userManager->getUserNameById($auditors));
	}
	
?>

                                        


<div class="form-group">
    <div class="col-md-6" style="margin-top: 0px;">
    <label >Auditor</label>        
        <div class="input-group select2-bootstrap-prepend">
            
            <select id="auditor<?php echo $clause['clauseId'] ?>"  name="auditorDropDown" class="form-control select2" multiple>
          <option></option>
             <?php foreach($allAuditorss as $auditors){
            foreach($auditors as $auditor)
            {
          ?>
           <option value="<?php echo $auditor['userId'] ?>"><?php echo $auditor['lastName'] ?></option>

           <?php } }?>
        </select>
 
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" data-select2-open="single-prepend-text">
                 <span class="glyphicon glyphicon-search"></span>
                </button>
            </span> 
        </div>
    </div>
</div>
<!-- <script src="metronic/theme/assets/pages/scripts/components-select2.min.js" type="text/javascript"></script> -->


