<?php
class Docs extends Control {

	protected function index(){

		$url = explode("/", $_SERVER["REQUEST_URI"]);
		$path = array_slice($url, 2);
		
		$packagemenu = new PackageMenu('Source/Docs/api-ref.json', '/docs');
		$this->menu = $packagemenu->html;

		$this->currentnav = 'docs';

		if (isset($path[0]) === false){
			$content = file_get_contents('Source/Docs/intro.md');
			$this->html = Markdown($content);
			$this->render('docsindex');
		} else {
			$stub = (isset($path[1]) ? $path[0] . '/' . $path[1] : $path[0] . '/' . $path[0]);

			$content = file_get_contents('Source/Docs/' . $stub . '.md');
			$html = Markdown($content);

			$html = $this->createDemos($html);
			$html = $this->createExamples($html);
			$html = $this->formatCodeBlocks($html);
			$this->html = $html;

			$this->render();
		}
	}
	
	protected function createDemos($source){
		function matchedDemo($matches){
			$demo = new Demo($matches[1]);
			return $demo->output;
		};
		return preg_replace_callback('/<h3[^>]*>Demo: ([\s\S]*?)<hr \/>/', "matchedDemo", $source);
	}
	
	protected function createExamples($source){
		function matchedExample($matches){
			$demo = new Demo($matches[1]);
			return $demo->output;
		};
		return preg_replace_callback('/<h3[^>]*>Example: ([\s\S]*?)<hr \/>/', "matchedExample", $source);
	}
	
	protected function formatCodeBlocks($source){
		function matched($matches){
			$geshi = new GeSHi($matches[1], 'javascript');
			$geshi->enable_classes();
			return $geshi->parse_code();
		};
		return preg_replace_callback('/<code>([\s\S]*?)<\/code>/', "matched", $source);
	}
	
}

?>