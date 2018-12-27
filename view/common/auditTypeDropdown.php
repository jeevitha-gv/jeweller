<?php
    require_once __DIR__.'/../../php/common/appConfig.php';
    $allAuditTypes = AppConfig::getAllConfigValues('audit_type');
    ?>
   
 <label style="margin-left:60px">Audit Type</label>
 <div class="form group">
<div class="col-md-12" style="margin-left:48px"; >
<input id="auditTypeToggle" type="checkbox" data-toggle="toggle" data-on="Internal" data-off="External" data-onstyle="success" data-offstyle="danger" onchange="auditType()" >
<input type="hidden" id="auditTyp">
</div>
</div>
