<?php

define('SITE_ROOT', getcwd());
include SITE_ROOT."/includes/resources.php";

$db = new Database;
$result = null;
if ( ! isset($_GET["id"]) )
	$_GET["id"] = 1;
$result = $db("SELECT name, img_path, product.desc FROM product WHERE id LIKE ?", [ "%".$_GET["id"]."%" ]);
$res = $result->fetch();
$page_num = 1;
if ( isset($_GET["page"]) )
	$page_num = $_GET["page"];
if (!is_numeric($page_num)) // per injection check
	$page_num = 1;
$comments = $db("SELECT p.text, username FROM account JOIN " .
	"(SELECT text, fk_account, `when` FROM comment WHERE fk_product=? ORDER BY `when` LIMIT 5 OFFSET ".(($page_num-1)*5).
	") AS p ON (account.ID=p.fk_account) ORDER BY p.`when`", [ $_GET["id"] ] );
$comm = [
	$comments->fetch(),
	$comments->fetch(),
	$comments->fetch(),
	$comments->fetch(),
	$comments->fetch()
];
$lastpage_index = (intval(implode($db("select count(*) from comment where id=?",  [ $_GET["id"] ])->fetch())+4))/5;
$indexPage = build_default_page("pages/grappa" , [
	"name"=> $res[0],
	"desc"=> $res[2],
	"src" => $res[1],
	"comm1" => $comm[0][0],
	"user1" => $comm[0][1],
	"comm2" => $comm[1][0],
	"user2" => $comm[1][1],
	"comm3" => $comm[2][0],
	"user3" => $comm[2][1],
	"comm4" => $comm[3][0],
	"user4" => $comm[3][1],
	"comm5" => $comm[4][0],
	"user5" => $comm[4][1],
	"first_page" => "grappa.php?id=".$_GET["id"]."&page=1",
	"previous_page" => "grappa.php?id=".$_GET["id"]."&page=".max($page_num-1, 1),
	"next_page" => "grappa.php?id=".$_GET["id"]."&page=".min($page_num+1, $lastpage_index),
	"last_page" => "grappa.php?id=".$_GET["id"]."&page=".$lastpage_index
]);


echo $indexPage->render();

?>
