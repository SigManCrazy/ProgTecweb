<?php

define('SITE_ROOT', getcwd());
include SITE_ROOT."/includes/resources.php";

$db = new Database;
$result = null;
$results_per_page = 12; // !!! numero grappe per pagina
if ( isset($_GET["q"]) )
	$result = $db("SELECT ID, name, img_path AS img FROM product WHERE name LIKE ? ORDER BY name DESC LIMIT ". $results_per_page, [ "%".$_GET["q"]."%" ]);
else
	$result = $db("SELECT ID, name, img_path AS img FROM product ORDER BY name DESC LIMIT ". $results_per_page, []);
$res = [];
for ($i = 0; $i < $results_per_page; $i++) {
	$tmp = $result->fetch();
	array_push($res, $tmp);
}
$arr = [];
for ($i = 0; $i < $results_per_page; $i++) {
	$arr[ "id".($i+1) ] = $res[$i]["ID"];
	$arr[ "name".($i+1) ] = $res[$i]["name"];
	$arr[ "src".($i+1) ] = $res[$i]["img"];
}

$indexPage = build_default_page("pages/cantina" , $arr);

echo $indexPage->render();

?>
