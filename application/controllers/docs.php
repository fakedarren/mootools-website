<?php
class Docs extends Control {

	protected function index(){

		$url = explode("/", $_SERVER["REQUEST_URI"]);
		$api = ($url[1] == 'api');
		$path = array_slice($url, 2);
		
		$menu = $api ? 'Source/Docs/api-ref.json' : 'Source/Docs/docs-ref.json';
		$root = $api ? '/api' : '/docs';
		
		$packagemenu = new PackageMenu($menu, $root);
		$this->menu = $packagemenu->html;

		$this->currentnav = 'docs';

		if (isset($path[0]) === false){
			$parser = new DocsParser('Source/Docs/Intro.md');
			$this->html = $parser->html;
			
			$this->render('docsindex');
		} else if (isset($path[2]) === false){
			$stub = (isset($path[1]) ? $path[0] . '/' . $path[1] : $path[0] . '/' . $path[0]);
			$parser = new DocsParser('Source/Docs/' . $stub . '.md', '/docs/' . $stub);
			
			if ($api === true){
				$this->html = $parser->html;
			} else {
				$this->html = $parser->description;
				foreach ($parser->titles as $title){
					$this->html .= '<div class="section">' . $title . '</div>';
				}
			}
			$this->render();
		} else {
			$stub = (isset($path[1]) ? $path[0] . '/' . $path[1] : $path[0] . '/' . $path[0]);
			$parser = new DocsParser('Source/Docs/' . $stub . '.md', '/docs/' . $path[0] . '/' . $path[1]);
			$this->html = $parser->titles[$path[2]] . $parser->texts[$path[2]];
			$this->render('docsdetails');
		}
	}
	
}

?>