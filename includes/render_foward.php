<?php

class RenderForward {
	public function __construct($name, $data) {
		$this->content = $data;
		$this->template_file_name = $name;
	}


	private static function renderTemplate($templateFilename, $data) {
		$content = file_get_contents(SITE_ROOT."/views/".$templateFilename.".xhtml");
		$target_platform = "desktop"; // TODO aggiungere mobile
		$include_matches = [];
		$result = preg_match_all("/{{(\\s)*include(\\s)+"."(([a-zA-Z]|\/)+)"."(\\s)*}}/", $content, $include_matches);
		foreach ($include_matches[3] as $include_file_name) {
			$css_include = "<link href=\"./css/".$target_platform."/". $include_file_name .".css\" rel=\"stylesheet\" type=\"text/css\" />\n";
			$content = preg_replace("/{{(\\s)*include(\\s)+(".regExp_escape($include_file_name).")(\\s)*}}/", $css_include . RenderForward::renderTemplate($include_file_name, $data), $content);
		}
	
		foreach ($data as $key => $value) {
			$matches = [];
			$flags = 0;
			$offset = 0;
			
			if ((is_object($value)) && ($value instanceof RenderForward) ) {
				$css_include = "<link href=\"./css/".$target_platform."/" . $key . ".css\" rel=\"stylesheet\" type=\"text/css\" />\n";
				$content = preg_replace("/{{(\\s)*forward(\\s)+(".regExp_escape($key).")(\\s)*}}/",  $css_include . $value->render(), $content);
			} else if (is_array($value)) {
				$content = preg_replace("/{{(\\s)*expand(\\s)+(".regExp_escape($key).")(\\s)*}}/", RenderForward::renderTemplate($key, $value), $content);
			} else {
				$content = preg_replace("/{{(\\s)*fill(\\s)+".$key."((\\s)+(unsafe))?(\\s)*}}/", "".$value, $content);
				$content = preg_replace("/{{(\\s)*fill(\\s)+".$key."(\\s)*}}/", "".htmlentities($value), $content);
			}
		}
		
		return $content;
	}

	public function render() {
		return RenderForward::renderTemplate($this->template_file_name, $this->content);
	}

	private $template_file_name;
	private $content;
}

function regExp_escape($filename) {
	$escaped_key = str_replace("/", "\/", $filename);

	return $escaped_key;
}

?>