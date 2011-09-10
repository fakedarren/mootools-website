<?php

class Docs extends Control {

	protected function index(){
		global $config;
		
		$url = explode("/", $_SERVER["REQUEST_URI"]);
		$path = array_slice($url, 2);
		
		$content = file_get_contents('Source/example.md');
		$html = Markdown($content);
		
		$demoregex = '/<h3[^>]*>Demo: ([\s\S]*?)<hr \/>/';
		$exampleregex = '/<h3[^>]*>Example: ([\s\S]*?)<hr \/>/';
	
		$html = preg_replace_callback($demoregex, function($matches){
			return "DEMO";
		}, $html);
		
		$html = preg_replace_callback($exampleregex, function($matches){
			return "EXAMPLE";
		}, $html);
		
		$this->data['html'] = $html;
		$this->render();
	}

}

?>