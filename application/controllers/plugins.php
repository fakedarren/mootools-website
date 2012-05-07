<?php

class Plugins extends Control {

	protected function index(){
		$this->data('page', 'Plugins');
		$this->data('title', 'MooTools - Plugins');
		
		$search = new SearchResultsPlugins();
		
		$this->data('featured', $search->random(1));
		
		$this->data('moreURL', Control::config('more_url'));
		
		$this->render();
	}

}

?>