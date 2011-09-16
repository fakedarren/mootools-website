<?php

class Community extends Control {

	protected function index(){
		
		$this->currentnav = 'community';
		
		$this->render();
	}

}

?>