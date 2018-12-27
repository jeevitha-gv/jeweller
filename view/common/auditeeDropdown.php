 <?php
    require_once __DIR__.'/../../php/user/userManager.php';

    $userManager = new UserManager();
    // 7 is auditee role
    $allAuditors = $userManager->getAllUsersByRole(7,$_SESSION['companyId']);
?>
     


<div class="form-group">
    <label style="margin-left:12px;">Auditee</label>
    <div class="col-md-12">
        <div class="input-group select2-bootstrap-prepend">
           <select id="auditee" class="form-control select2" multiple>
                                                                                            
         <?php foreach($allAuditors as $auditor){ ?>
    <option value="<?php echo $auditor['userId'] ?>"><?php echo htmlspecialchars($auditor['lastName']) ?></option>
    <?php } ?>
     </select>
      
    </div>
   </div>
 </div>

 <script type="text/javascript">
         $(document).ready(function() {
  $('#auditee').multiselect();
});
       </script>
                 

