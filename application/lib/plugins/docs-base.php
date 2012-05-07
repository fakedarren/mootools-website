<?php

class DocsBase extends Control {
	
	protected function index($arg1, $arg2 = ''){
		
		$this->assetsFolder = Control::config("serverroot") . 'docs';
		$this->baseurl = '/' . Control::config('webroot') . '/docs';
		$this->serverroot = Control::config("serverroot");
		
		$urlparts = explode('/docs/', $_SERVER['REQUEST_URI']);
		if (count($urlparts) == 1 || $urlparts[1] == ''){
			$this->path = 'Welcome';
		} else {
			$this->path = $urlparts[1];
		}
		
		$this->data('webroot', '/more/' . Control::config('webroot'));
		$this->data('serverroot', $this->serverroot);
		
		$this->data('baseCSS', file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/application/views/shared/css.tpl'));
		$this->data('baseJS', file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/application/views/shared/javascript.tpl'));

		$this->data('menu', $this->getMenu());
		$this->data('breadcrumb', $this->getBreadcrumb());
		$this->data('content', $this->getContent());
		
		$this->render();
	}
	
	private function getMenu(){
		$html = file_get_contents($this->assetsFolder . '/menu.html');			
		return str_replace('[BASEURL]', $this->baseurl, $html);
	}
	
	private function getBreadcrumb(){
		return '<ul class="breadcrumb"></ul>';
	}
	
	private function getContent(){
		$path = $this->assetsFolder . '/' . $this->path;
		if (file_exists($path . '.md')){
			$html = $this->getLegacyContent($path);
		} else if (file_exists($path . '.html')){
			$html = file_get_contents($path . '.html');
		} else {
			$html = $this->notFound($path);
		}
		return str_replace('[BASEURL]', $this->baseurl, $html);
	}
	
	private function getLegacyContent($path){
		$content = file_get_contents($path . '.md');
		$html = markdown($content);
		return $html;
	}
	
	private function notFound(){
		return '<h1>Not found</h1>';
	}

}

?>