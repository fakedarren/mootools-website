<?php

class PluginBase extends Control {

	protected function index(){
		$this->data('root', Control::config('webroot'));
	}

}

?>