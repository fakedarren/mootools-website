<?php

class PluginBase extends Control {

	protected function index(){
		$this->data('root', Control::config('webroot'));
		
		$this->data('baseCSS', file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/application/views/shared/css.tpl'));
		$this->data('baseJS', file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/application/views/shared/javascript.tpl'));
	}

}

?>