<?php

// tutte le pagine per ora sono cos�. ma metti che no..
function build_default_page($page, $content) {
	return new RenderForward("template", [
		"components/aside" => new RenderForward( "components/aside", getAsideContentArray()),
		"content" => new RenderForward($page, $content)
	]);
}

?>