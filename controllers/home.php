<?php

class Home extends Control {

	protected function index(){
		global $config;
		$config['title'] = 'foo';
		$this->render();
	}

}

?>