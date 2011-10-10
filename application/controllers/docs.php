<?php
class Docs extends Control {

	protected function index(){
		
		global $version;
		$url = explode("/", $_SERVER["REQUEST_URI"]);
		$api = ($url[1] == 'api');
		$path = array_slice($url, 2);
		
		$menu = $api ? 'releases/' . $version . '/Docs/api-ref.json' : 'releases/' . $version . '/Docs/docs-ref.json';
		$root = $api ? '/api' : '/docs';
		
		$this->api = $api;
		
		$packagemenu = new PackageMenu($menu, $root);
		$this->menu = $packagemenu->html;

		$this->currentnav = 'docs';


		if (isset($path[0]) === false){
			$this->title = 'MooTools Docs: Welcome!';
			$parser = new DocsParser('releases/' . $version . '/Docs/Intro.md');
			$this->html = $parser->html;
			$this->render('docsindex');
		} else if (isset($path[2]) === false){
			$stub = (isset($path[1]) ? $path[0] . '/' . $path[1] : $path[0] . '/' . $path[0]);
			
			$this->title = str_replace('/', ' &raquo; ', 'MooTools Docs: ' . $stub);
			
			$parser = new DocsParser('releases/' . $version . '/Docs/' . $stub . '.md', '/docs/' . $stub);
			
			if ($api === true){
				$this->html = $parser->html;
				foreach ($parser->titles as $id => $title){
					$this->submenu[] = $id;
				}
			} else {
				$this->html = $parser->description;
				if(is_array($parser->titles)) {
					foreach ($parser->titles as $title){
						$this->html .= '<div class="section">' . $title . '</div>';
					}
				}
			}
			$this->render();
		} else {

			$stub = (isset($path[1]) ? $path[0] . '/' . $path[1] : $path[0] . '/' . $path[0]);

			$this->title = str_replace('/', ' &raquo; ', 'MooTools Docs: ' . $stub);

			$parser = new DocsParser('releases/' . $version . '/Docs/' . $stub . '.md', '/docs/' . $path[0] . '/' . $path[1]);
			$this->html = $parser->titles[$path[2]] . $parser->texts[$path[2]];
			$this->render('docsdetails');
		}
	}
	
}

?>