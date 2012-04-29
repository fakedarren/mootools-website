<?php

class Search extends Control {

	protected function index(){
		$this->data('page', 'Search');
		$this->data('title', 'MooTools');
		$this->render();
	}

}

?>