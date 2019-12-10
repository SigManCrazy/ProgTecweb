<?php

define('SITE_ROOT', getcwd());
include SITE_ROOT."/includes/resources.php";

$db = new Database;
$result = null;
if ( isset($_GET["q"]) ){
	$result = $db("select name, img_path, product.desc from product where id like ?", [ "%".$_GET["q"]."%" ]);
	$res = $result->fetch();
	$indexPage = build_default_page("pages/grappa" , [
		"name"=> $res[0],
		"desc"=> $res[2],
		"src" => $res[1]
]);}



echo $indexPage->render();

?>
