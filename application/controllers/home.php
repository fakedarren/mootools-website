<?php

class Home extends Control {

	protected function index(){
		$this->data('page', 'Home');
		$this->data('title', 'MooTools');
		$this->render();
	}

}

?>