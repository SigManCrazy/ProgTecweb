<?php

define('SITE_ROOT', getcwd());
include SITE_ROOT."/includes/resources.php";

$db = new Database;

$indexPage = build_default_page("pages/grappa" , []);

echo $indexPage->render();

?>
