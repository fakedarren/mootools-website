<?php
class Tutorials extends Control {

	protected function index(){

		$url = explode("/", $_SERVER["REQUEST_URI"]);
		$path = str_replace("-", " ", array_slice($url, 2));
		
		$this->currentnav = 'docs';

		if (@strlen($path[0]) > 0 && is_numeric($path[0]) === false){
			$this->tutorial($path);
		} else {
			$index = (isset($path[0]) ? $path[0] : 1);
			$packagemenu = new PackageMenu('Source/Tutorials', '/tutorials', $index);
			$this->tutoriallist = $packagemenu->html;
			$this->quantity = $packagemenu->length;
			$this->render('tutorialsindex');
		}
	}
	
	protected function tutorial($path){
		$content = file_get_contents('Source/Tutorials/' . $path[0] . '/'. $path[0] . '.md');
		$html = Markdown($content);

		$html = $this->createDemos($html);
		$html = $this->createExamples($html);
		$html = $this->formatCodeBlocks($html);
		
		$html = preg_replace('/\/\*([\s\S]*?)\*\//', '', $html);
					
		$parts = preg_split('/<hr \/>\s*<hr \/>/', $html);
		$index = (isset($path[0]) && isset($path[1]) ? $path[1] - 1 : 0);
		
		$this->html = $parts[$index];
		$this->route = $path[0];
		$this->previouspage = $index;
		$this->nextpage = (isset($parts[$index + 1]) ? $index + 2 : false);
		
		$this->html = str_replace('###path###', 'Source/Tutorials/' . $path[0], $this->html);
		
		$this->render();		
	}
	
	protected function createDemos($source){
		function matcherDemos($matches){
			$demo = new Demo($matches[1]);
			return $demo->output;
		};
		return preg_replace_callback('/<h3[^>]*>Demo: ([\s\S]*?)<hr \/>/', "matcherDemos", $source);
	}
	
	protected function createExamples($source){
		function matcherExamples($matches){
			$demo = new Demo($matches[1]);
			return $demo->output;
		};
		return preg_replace_callback('/<h3[^>]*>Example: ([\s\S]*?)<hr \/>/', "matcherExamples", $source);
	}
	
	protected function formatCodeBlocks($source){
		function matcherCodeBlocks($matches){
			$geshi = new GeSHi($matches[1], 'javascript');
			$geshi->enable_classes();
			return $geshi->parse_code();
		};
		return preg_replace_callback('/<code>([\s\S]*?)<\/code>/', "matcherCodeBlocks", $source);
	}
	
}
?>