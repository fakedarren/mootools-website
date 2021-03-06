<?php

class DocsBase extends Control {
	
	protected function index($arg1, $arg2 = ''){
		
		$this->microsite = str_replace('/more', '', Control::config('webroot'));
		$this->data('microsite', $this->microsite);

		$this->webroot = Control::config('webroot');
		$this->data('webroot', $this->webroot);
		
		$this->serverroot = Control::config("serverroot");
		$this->data('serverroot', $this->serverroot);
			
		$urlparts = explode('/docs/', $_SERVER['REQUEST_URI']);
		if (count($urlparts) == 1 || $urlparts[1] == ''){
			$this->path = 'Welcome';
		} else {
			$this->path = $urlparts[1];
		}
				
		$this->data('mainURL', Control::config('main_url'));
		
		$this->data('baseCSS', file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/application/views/shared/css.tpl'));
		$this->data('baseJS', file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/application/views/shared/javascript.tpl'));

		$this->data('menu', $this->getMenu());
		$this->data('breadcrumb', $this->getBreadcrumb());
		$this->data('content', $this->getContent());
		
		$this->render();
	}
	
	private function getMenu(){
		$html = file_get_contents($this->serverroot . '/docs/menu.html');			
		return str_replace('[BASEURL]', $this->microsite, $html);
	}
	
	private function getBreadcrumb(){
		$parts = explode('/', $this->path);
		$totalurl = $this->microsite . '/docs';
		
		$html = '<ul class="breadcrumb">';
		$html.= '<li><a href="' . $totalurl . '">Docs</a></li>';
		foreach ($parts as $part){
			$totalurl .= '/' . $part;
			$html .= '<li>';
			$html .= '<span class="divider">/</span>';
			$html .= '<a href="' . $totalurl . '">' . str_replace('-', ' ', $part) . '</a>';
			$html .= '</li>';
		}
		$html.= '</ul>';
		return $html;
	}
	
	private function getContent(){
		$path = $this->serverroot . 'docs/' . $this->path;		
		if (file_exists($path . '.md')){
			$html = $this->getLegacyContent($path);
		} else if (file_exists($path . '.html')){
			$html = file_get_contents($path . '.html');
		} else {
			$html = $this->notFound($path);
		}
		return str_replace('[BASEURL]', $this->microsite, $html);
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