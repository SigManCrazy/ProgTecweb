<?php

define('SITE_ROOT', getcwd());
include SITE_ROOT."/includes/resources.php";

$db = new Database;

$contactinfo = "<p>rolando.sartorello@studenti.unipd.it - web developer (not the spider kind)<p>".
				 "<p>rolando.sartorello@gmail.com - web developer (not the spider kind)<p>".
				  "<p>rolando.sartorello@gmail.com - web developer (not the spider kind)<p>";

$indexPage = build_default_page("pages/index" , [
				"home_img_path" => "Home.jpg",
				"titolo" => "Una Grappa in Bricco vola nel Piovego",
				"articolo" => "<p>Affascinante avvistamento di una rara variet&agrave; di Grappa al gusto di Piovego.</p>".
								"<p>Un sito di grappe che ama l'alcool..</p>".
								"<p>Siamo un gruppo di ubriaconi che vuole divertirsi e testare ".
								"ogni singola grappa esistente fino al coma etilico. ".
								"Sconsigliamo solo di bere e giudare, toglie la possiblità di bere ancora".
								" in quanto ti ammazza</p>".
								"<p>Un sito di grappe che ama l'alcool..</p>".
								"<p>Siamo un gruppo di ubriaconi che vuole divertirsi e testare ".
								"ogni singola grappa esistente fino al coma etilico. ".
								"Sconsigliamo solo di bere e giudare, toglie la possiblità di bere ancora".
								" in quanto ti ammazza</p>".
								"<p>Un sito di grappe che ama l'alcool..</p>".
								"<p>Siamo un gruppo di ubriaconi che vuole divertirsi e testare ".
								"ogni singola grappa esistente fino al coma etilico. ".
								"Sconsigliamo solo di bere e giudare, toglie la possiblità di bere ancora".
								" in quanto ti ammazza</p>".
								"<p>Qua ti innamori della grappa!</p>",
				"contactinfo" => $contactinfo
			]);

echo $indexPage->render();

?>
