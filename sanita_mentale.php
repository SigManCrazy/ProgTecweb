<?php

function render($templateFilename, $data) {
	$content = file_get_contents($templateFilename);
	
	foreach ($data as $key => $value) {
		$matches = [];
		$flags = 0;
		$offset = 0;
		
		if (!is_array($value)) {
			$content = preg_replace("/{{(\\s)*fill(\\s)+".$key."((\\s)+(unsafe))?(\\s)*}}/", "".$value, $subject);
			$content = preg_replace("/{{(\\s)*fill(\\s)+".$key."(\\s)*}}/", htmlentities($value), $subject);
		} else {
			$recrender = "";
			foreach ($value as $valuekey => $valuevalue) {
				$recrender += render($key.".xhtml", $valuevalue)
			}
			$content = preg_replace("/{{(\\s)*forward(\\s)+".$key."(\\s)*}}/", $recrender, $subject);
			
		}
		
		
	}
	
	return $rawContent;
}

