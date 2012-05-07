<?php

class Plugins extends Control {

	protected function index(){
		$this->data('page', 'Plugins');
		$this->data('title', 'MooTools - Plugins');
		
		$this->data('moreURL', Control::config('more_url'));
		
		$this->render();
	}

}

?>