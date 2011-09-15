<?php
class Docs extends Control {

	protected function index(){

		$url = explode("/", $_SERVER["REQUEST_URI"]);
		$path = array_slice($url, 2);
		
		$packagemenu = new PackageMenu('Source/Docs/api-ref.json', '/docs');
		$this->menu = $packagemenu->html;

		

		$this->currentnav = 'docs';

		if (isset($path[0]) === false){
			$parser = new DocsParser('Source/Docs/intro.md');
			$this->html = $parser->html;
			
			$this->render('docsindex');
		} else {
			$stub = (isset($path[1]) ? $path[0] . '/' . $path[1] : $path[0] . '/' . $path[0]);

			$parser = new DocsParser('Source/Docs/' . $stub . '.md');
			$this->html = $parser->html;

			$this->render();
		}
	}
	
}

?>