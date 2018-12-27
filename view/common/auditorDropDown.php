<?php
    require_once __DIR__.'/../../php/user/userManager.php';

    $userManager = new UserManager();
    // 4 is auditor role
    $allAuditors = $userManager->getAllUsersByRole(4,$_SESSION['company']);
    
?>




<div class="form-group">  
  <label style="margin-left: 15px;">Auditor</label>
    <div class="col-md-12">        
        <div class="input-group select2-bootstrap-prepend">
            
            <select id="auditor" class="form-control select2" multiple>
                                                                                           
              <?php foreach($allAuditors as $auditor){ ?>
               <option value="<?php echo $auditor['userId'] ?>"><?php echo htmlspecialchars($auditor['lastName']) ?></option>
               <?php } ?>                                    
            </select> 
           
        </div>
    </div>
</div>
<script type="text/javascript">
         $(document).ready(function() {
  $('#auditor').multiselect();
});
       </script>
                                        
