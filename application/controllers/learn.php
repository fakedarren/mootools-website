<?php

class Learn extends Control {

	protected function index(){
		$this->data('page', 'Learn');
		$this->data('title', 'MooTools - Learn');
		$this->render();
	}

	public function books(){
		$this->data('page', 'Learn');
		$this->data('title', 'MooTools - Books on MooTools');
		$this->render('learn/books');
	}

}

?>