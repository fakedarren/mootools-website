<?php
class Tutorials extends Control {

	protected function index(){

		$url = explode("/", $_SERVER["REQUEST_URI"]);
		$path = array_slice($url, 2);
		
		if (@strlen($path[0]) > 0){
			$content = file_get_contents('Source/Tutorials/' . $path[0] . '/example.md');
			$html = Markdown($content);

			$html = $this->createDemos($html);
			$html = $this->createExamples($html);
			$html = $this->formatCodeBlocks($html);

			$parts = preg_split('/<hr \/>\s*<hr \/>/', $html);
			$index = (isset($path[0]) && isset($path[1]) ? $path[1] - 1 : 0);
			
			$this->html = $parts[$index];
			$this->route = $path[0];
			$this->previouspage = $index;
			$this->nextpage = (isset($parts[$index + 1]) ? $index + 2 : false);
			$this->render();
		} else {
			$this->render('tutorialsindex');
		}
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