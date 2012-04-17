<?php

class Download extends Control {

	protected function index(){
		$this->data('page', 'Download');
		$this->data('title', 'MooTools - Download');
		$this->render();
	}

}

?>