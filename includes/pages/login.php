<?php

define('SITE_ROOT', getcwd());
include SITE_ROOT."/includes/resources.php";

$indexPage = build_default_page("pages/login" , []);

echo $indexPage->render();

?>