<?php

define('SITE_ROOT', getcwd());
include SITE_ROOT."/includes/resources.php";

$db = new Database;
$result = null;
if ( ! isset($_GET["id"]) )
	$_GET["id"] = 1;
$result = $db("select name, img_path, product.desc from product where id like ?", [ "%".$_GET["id"]."%" ]);
$res = $result->fetch();
$page_num = 1;
if ( isset($_GET["page"]) )
	$page_num = $_GET["page"];
if (!is_numeric($page_num)) // per injection check
	$page_num = 1;
$comments = $db("select p.text, username from account join " .
	"(select text, fk_account, `when` from comment where fk_product=? order by `when` limit 5 offset ".$page_num.") as p on (account.ID=p.fk_account)" .
	"order by p.`when`", [ $_GET["id"] ] );
$comm = [
	$comments->fetch(),
	$comments->fetch(),
	$comments->fetch(),
	$comments->fetch(),
	$comments->fetch()
];
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
	"user5" => $comm[4][1]
]);


echo $indexPage->render();

?>
