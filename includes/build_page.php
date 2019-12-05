<?php

include SITE_ROOT."/includes/aside.php";

// per velocizzare l'uso di RenderFoward
// fattorizando la costanza dell' aside 
// e del template
function build_default_page($page, $content) {
	return new RenderForward("template", [
		"components/aside" => new RenderForward( "components/aside", getAsideContentArray()),
		"content" => new RenderForward($page, $content),
		"target_platform" => "desktop" // TODO aggiungere mobile
	]);
}

?>