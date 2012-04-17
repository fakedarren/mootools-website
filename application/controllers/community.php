<?php

class Community extends Control {

	protected function index(){
		$this->data('page', 'Community');
		$this->data('title', 'MooTools - Community');
		$this->render();
	}

}

?>