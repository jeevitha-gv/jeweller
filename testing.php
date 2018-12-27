<?php
require __DIR__."/vendor/autoload.php";

$antiXss = new \voku\helper\AntiXSS();
$harm_string=new StdClass();
$harm_string->desc = "Hello, i try to <script>alert('Hack');</script> your site";
$harm_string->qwe="<IMG SRC=&#x6A&#x61&#x76&#x61&#x73&#x63&#x72&#x69&#x70&#x74&#x3A&#x61&#x6C&#x65&#x72&#x74&#x28&#x27&#x58&#x53&#x53&#x27&#x29>";
$harmless_string = $antiXss->xss_clean($harm_string->desc);
echo $harmless_string;
echo __DIR__;


?>
