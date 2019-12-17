<?php

function getAsideContentArray() {

	$db = new Database();
	$result = $db("SELECT product.ID as ID, name, `text` FROM product JOIN (SELECT fk_product, `text`, `when` FROM comment) AS p ON product.ID=p.fk_product ORDER BY p.`when` DESC LIMIT 6", []);
	$c = [	$result->fetch(),
			$result->fetch(),
			$result->fetch(),
			$result->fetch(),
			$result->fetch(),
			$result->fetch(),
			$result->fetch() ];
    return [
		"href1" => $c[0]["ID"],
        "title1" => $c[0]["name"],
        "comment1" => substr($c[0]["text"], 0, 220),
		"href2" => $c[1]["ID"],
        "title2" => $c[1]["name"],
        "comment2" => substr($c[1]["text"], 0, 220),
		"href3" => $c[2]["ID"],
        "title3" => $c[2]["name"],
        "comment3" => substr($c[2]["text"], 0, 220),
		"href4" => $c[3]["ID"],
        "title4" => $c[3]["name"],
        "comment4" => substr($c[3]["text"], 0, 220),
		"href5" => $c[4]["ID"],
        "title5" => $c[4]["name"],
        "comment5" => substr($c[4]["text"], 0, 220),
		"href6" => $c[5]["ID"],
        "title6" => $c[5]["name"],
        "comment6" => substr($c[5]["text"], 0, 220),
    ];
}

?>