<?php

function render($templateFilename, $data) {
	$content = file_get_contents(SITE_ROOT."/views/".$templateFilename);

	foreach ($data as $key => $value) {
		$matches = [];
		$flags = 0;
		$offset = 0;
		
		if (!is_array($value)) {
			$content = preg_replace("/{{(\\s)*fill(\\s)+".$key."((\\s)+(unsafe))?(\\s)*}}/", "".$value, $content);
			$content = preg_replace("/{{(\\s)*fill(\\s)+".$key."(\\s)*}}/", "".htmlentities($value), $content);
		} else {
			$recrender = render($key.".xhtml", $value);
			
			$escaped_key = str_replace("/", "\/", $key);

			$regex = "/{{(\\s)*forward(\\s)+".$escaped_key."(\\s)*}}/";
			$content = preg_replace($regex, $recrender, $content);
		}
		
		
	}
	
	return $content;
}

