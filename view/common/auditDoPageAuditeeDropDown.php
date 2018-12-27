<?php 

    require_once __DIR__.'/../../php/user/userManager.php';

    /*$userManager = new UserManager();*/
    // 4 is auditee role
   
    $allauditees=explode(",",$GLOBALS['auditee']);
    //echo json_encode($allauditees);
    
    $allauditeess=array();
    
   foreach($allauditees as $auditees)
	{
	$userManager = new UserManager();
	array_push($allauditeess,$userManager->getUserNameById($auditees));
	}
	
?>

                                        


<div class="form-group">
    <div class="col-md-6">
    <label >Auditee</label>        
        <div class="input-group select2-bootstrap-prepend" >
            
            <select id="auditee<?php echo $clause['clauseId'] ?>" value="" name="auditeeDropDown" class="form-control select2" multiple>
          <option></option>
             <?php foreach($allauditeess as $auditees){
            foreach($auditees as $auditee)
            {
          ?>
           <option value="<?php echo $auditee['userId'] ?>"><?php echo $auditee['lastName'] ?></option>

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


