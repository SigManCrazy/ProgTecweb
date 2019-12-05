<?php

define('SITE_ROOT', getcwd());
include SITE_ROOT."/includes/resources.php";

$indexPage = build_default_page("pages/login" , [ "ciao" => "stringaprova" ]);

$db = new Database;
 /*echo $db("select * from product", [])[2]; */ //TODO funziona! il db è collegato correttamente
echo $indexPage->render();

?>
