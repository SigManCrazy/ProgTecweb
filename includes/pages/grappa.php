<?php

define('SITE_ROOT', getcwd());
include SITE_ROOT."/includes/resources.php";

$db = new Database;

if ( ! isset($_GET["id"]) )
	$_GET["id"] = 1;

$res = $db("SELECT `name`, `img_path` AS `img`, `product`.`desc` AS `desc` FROM `product` WHERE ID = ?", [ $_GET["id"] ])->fetch();

$lastpage_index = ($db("SELECT count(*) AS `count` FROM comment WHERE fk_product=?",  [ $_GET["id"] ])->fetch()["count"] +4) /5;

$page_num = 1;
if ( isset($_GET["page"]))
	$page_num = $_GET["page"];
if (!is_numeric($page_num) or  $page_num < 1 or $page_num > $lastpage_index)
	$page_num = 1; // per injection check e limit del numero

$comments = $db("SELECT p.`text` as `text`, username FROM account JOIN " .
	"(SELECT `text`, fk_account, `when` FROM comment WHERE fk_product=? ORDER BY `when` LIMIT 5 OFFSET ".(($page_num-1)*5).
	") AS p ON (account.ID=p.fk_account) ORDER BY p.`when`", [ $_GET["id"] ] );
$comm = [
	$comments->fetch(),
	$comments->fetch(),
	$comments->fetch(),
	$comments->fetch(),
	$comments->fetch()
];

$indexPage = build_default_page("pages/grappa" , [
	"name"=> $res["name"],
	"desc"=> $res["desc"],
	"src" => $res["img"],
	"comm1" => $comm[0]["text"],
	"user1" => $comm[0]["username"],
	"comm2" => $comm[1]["text"],
	"user2" => $comm[1]["username"],
	"comm3" => $comm[2]["text"],
	"user3" => $comm[2]["username"],
	"comm4" => $comm[3]["text"],
	"user4" => $comm[3]["username"],
	"comm5" => $comm[4]["text"],
	"user5" => $comm[4]["username"],
	"first_page" => "grappa.php?id=".$_GET["id"]."&page=1",
	"previous_page" => "grappa.php?id=".$_GET["id"]."&page=".max($page_num-1, 1),
	"next_page" => "grappa.php?id=".$_GET["id"]."&page=".min($page_num+1, $lastpage_index),
	"last_page" => "grappa.php?id=".$_GET["id"]."&page=".$lastpage_index
]);

echo $indexPage->render();

?>
