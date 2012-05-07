<?php

class PluginBase extends Control {

	protected function index(){
		$this->data('webroot', Control::config('webroot'));
		$this->data('serverroot', Control::config("serverroot"));
		
		$this->data('mainURL', Control::config('main_url'));
		
		$this->data('baseCSS', file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/application/views/shared/css.tpl'));
		$this->data('baseJS', file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/application/views/shared/javascript.tpl'));

	}

}

?>