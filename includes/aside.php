<?php

function getAsideContentArray() {

	$db = new Database();
	$result = $db("select name, text, `when` from product join (select fk_product, text, `when` from comment) as p on product.id=p.fk_product order by p.`when` desc limit 6", []);
	$c = [	$result->fetch(),
			$result->fetch(),
			$result->fetch(),
			$result->fetch(),
			$result->fetch(),
			$result->fetch(),
			$result->fetch() ];
	$i = 0;
    return [
        "title1" => $c[$i][0],
        "comment1" => substr($c[$i++][1], 0, 220),
        "title2" => $c[$i][0],
        "comment2" => substr($c[$i++][1], 0, 220),
        "title3" => $c[$i][0],
        "comment3" => substr($c[$i++][1], 0, 220),
        "title4" => $c[$i][0],
        "comment4" => substr($c[$i++][1], 0, 220),
        "title5" => $c[$i][0],
        "comment5" => substr($c[$i++][1], 0, 220),
        "title6" => $c[$i][0],
        "comment6" => substr($c[$i++][1], 0, 220),
    ];
}

?>