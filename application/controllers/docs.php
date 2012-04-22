<?php

class Docs extends Control {

	protected function index(){
		$this->data('page', 'Docs');
		$this->data('title', 'MooTools - Documentation');
		
		$this->data('menu', $this->getMenu());
		
		$this->render();
	}
	
	private function getMenu(){
		$menu = file_get_contents('releases/2.0/docs/menu.html');
		return $menu;
	}

}

?>