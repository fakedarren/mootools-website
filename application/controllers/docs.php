<?php
class Docs extends Control {

	protected function index(){

		$url = explode("/", $_SERVER["REQUEST_URI"]);
		$path = array_slice($url, 2);
		
		$content = file_get_contents('Source/Docs/example.md');
		$html = Markdown($content);
		
		$html = $this->createDemos($html);
		$html = $this->createExamples($html);
		$html = $this->formatCodeBlocks($html);
		
		$this->data['html'] = $html;
		$this->render();
	}
	
	protected function createDemos($source){
		return preg_replace_callback('/<h3[^>]*>Demo: ([\s\S]*?)<hr \/>/', function($matches){
			$demo = new Demo($matches[1]);
			return $demo->output;
		}, $source);
	}
	
	protected function createExamples($source){
		return preg_replace_callback('/<h3[^>]*>Example: ([\s\S]*?)<hr \/>/', function($matches){
			$demo = new Example($matches[1]);
			return $demo->output;
		}, $source);
	}
	
	protected function formatCodeBlocks($source){
		return preg_replace_callback('/<code>([\s\S]*?)<\/code>/', function($matches){
			$geshi = new GeSHi($matches[1], 'javascript');
			$geshi->enable_classes();
			return $geshi->parse_code();
		}, $source);
	}
	
}

?>