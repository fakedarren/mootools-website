<?php

class Search extends Control {

	protected function index(){
		$this->data('page', 'Search');
		$this->data('title', 'MooTools');
		
		$query = explode('q=', $_SERVER['REQUEST_URI']);
		
		$search = new SearchResults();
		$this->data('results', $search->query($query[1]));
		
		$this->render();
	}

}

?>