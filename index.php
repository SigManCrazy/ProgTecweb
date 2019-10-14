<?php
define('SITE_ROOT', getcwd());
include SITE_ROOT."/includes/resources.php";

echo render("template.xhtml", [
    "nome" => "Pierino va a squola",
    "titolo" => "p. prova"
    ]);

?>
