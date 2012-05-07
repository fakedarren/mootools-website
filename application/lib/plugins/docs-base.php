<?php

class DocsBase extends Control {
	
	protected function index($arg1, $arg2 = ''){
		
		$this->assetsFolder = Control::config("serverroot") . '/docs/';
		$this->baseurl = '/plugin/docs/';
		
		$this->data('root', Control::config('webroot'));
		
		$this->data('baseCSS', file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/application/views/shared/css.tpl'));
		$this->data('baseJS', file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/application/views/shared/javascript.tpl'));

		$this->data('menu', $this->getMenu());
		$this->data('breadcrumb', $this->getBreadcrumb());
		$this->data('content', $this->getContent());
		
		$this->render();
	}
	
	private function getMenu(){
		$html = file_get_contents($this->assetsFolder . 'menu.html');			
		return str_replace('[BASEURL]', $this->baseurl, $html);
	}
	
	private function getBreadcrumb(){
		return '<ul class="breadcrumb"></ul>';
	}
	
	private function getContent(){
		return 'content';
	}
	
	private function notFound(){
		return '<h1>Not found</h1>';
	}

}

?>