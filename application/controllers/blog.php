<?php

class Blog extends Control {

	protected function index(){
		$this->data('page', 'Blog');
		$this->data('title', 'MooTools - Blog');
		$this->render();
	}

}

?>