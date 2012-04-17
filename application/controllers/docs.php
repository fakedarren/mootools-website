<?php

class Docs extends Control {

	protected function index(){
		$this->data('page', 'Docs');
		$this->data('title', 'MooTools - Documentation');
		$this->render();
	}

}

?>