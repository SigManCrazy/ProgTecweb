<?php

define('SITE_ROOT', getcwd());
include SITE_ROOT."/includes/resources.php";

$db = new Database;
$result = null;
if 
$result = $db("select name, img_path from product order by name desc limit 3", []);
$res = [ $result->fetch(), $result->fetch(), $result->fetch() ];
$i = 0;
$indexPage = build_default_page("pages/cantina" , [
	"name1" => $res[$i][0],
	"src1" => $res[$i++][1],
	"name2" => $res[$i][0],
	"src2" => $res[$i++][1],
	"name3" => $res[$i][0],
	"src3" => $res[$i++][1]
]);

echo $indexPage->render();

?>
