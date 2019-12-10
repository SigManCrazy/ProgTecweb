<?php

define('SITE_ROOT', getcwd());
include SITE_ROOT."/includes/resources.php";

$db = new Database;

$contactinfo = "<p>rolando.sartorello@studenti.unipd.it - web developer (not the spider kind)<p>".
				 "<p>andrea.signori@studenti.unipd.it - Totally not a designer(acting like a giants dick won't make yours any bigger)<p>".
				  "<p>rolando.sartorello@gmail.com - web developer (not the spider kind)<p>";

$indexPage = build_default_page("pages/index" , [
				"home_img_path" => "Home.jpg",
				"titolo" => "Una Grappa in Bricco vola nel Piovego",
				"articolo" => "<p>La Distilleria San Rispino nasce in Veneto – Italia alla fine degli anni ’10 a Padova, fondata da 4 studenti che trovarono nell'alcool il primo valore sopra il 18.</p>".
								"<p>Nella nostra distilleria disponiamo di tutte le attrezzature adatte al processo di produzione,</p>
								<p>come le cisterne in acciaio dell'acqua del Piovego, le vasche di miscelazione delle nutrie, 
								gli strumenti per </p><p>l’imbottigliamento e l’etichettatura dei nostri pregiati prodotti. Uno dei pezzi forti della nostra distilleria è</p> <p> la barricaia,
								che ci regala malattie di qualità da decenni: disposta sottoterra per garantire temperatura</p> <p>e umidità costanti favorisce la proliferazione dei batteri, vanta attualmente numerosi quantità di virus mortali.</p>".
								"<p>Qua ti innamori della grappa!</p>",
				"contactinfo" => $contactinfo
			]);

echo $indexPage->render();

?>
