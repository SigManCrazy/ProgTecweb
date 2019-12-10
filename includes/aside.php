<?php

function getAsideContentArray() {

	$db = new Database();
	$result = $db("select product.ID, name, text, `when` from product join (select fk_product, text, `when` from comment) as p on product.id=p.fk_product order by p.`when` desc limit 6", []);
	$c = [	$result->fetch(),
			$result->fetch(),
			$result->fetch(),
			$result->fetch(),
			$result->fetch(),
			$result->fetch(),
			$result->fetch() ];
    return [
		"href1" => $c[0][0],
        "title1" => $c[0][1],
        "comment1" => substr($c[0][2], 0, 220),
		"href2" => $c[1][0],
        "title2" => $c[1][1],
        "comment2" => substr($c[1][2], 0, 220),
		"href3" => $c[2][0],
        "title3" => $c[2][1],
        "comment3" => substr($c[2][2], 0, 220),
		"href4" => $c[3][0],
        "title4" => $c[3][1],
        "comment4" => substr($c[3][2], 0, 220),
		"href5" => $c[4][0],
        "title5" => $c[4][1],
        "comment5" => substr($c[4][2], 0, 220),
		"href6" => $c[5][0],
        "title6" => $c[5][1],
        "comment6" => substr($c[5][2], 0, 220),
    ];
}

?>