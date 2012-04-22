<?php

class Docs extends Control {

	protected function index(){
		$this->isLatest = Control::config("isLatest");
		$this->version = Control::config("version");
		
		$this->data('menu', $this->getMenu());
		$this->data('page', 'Docs');
		$this->data('title', 'MooTools - Documentation');
		
		$this->render();
	}
	
	private function getMenu(){
		$html = file_get_contents('releases/' . $this->version . '/docs/menu.html');		
		$path = $this->isLatest ? '/docs' : '/' . $this->version . '/docs';		
		return str_replace('[BASEURL]', $path, $html);
	}

}

?>