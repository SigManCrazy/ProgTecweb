<?php

include SITE_ROOT."/includes/aside.php";

// tutte le pagine per ora sono così. ma metti che no..
function build_default_page($page, $content) {
	return new RenderForward("template", [
		"components/aside" => new RenderForward( "components/aside", getAsideContentArray()),
		"content" => new RenderForward($page, $content)
	]);
}

?>