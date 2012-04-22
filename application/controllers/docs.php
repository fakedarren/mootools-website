<?php

class Docs extends Control {
	
	protected function index($arg1, $arg2 = ''){
		$this->isLatest = Control::config("is_latest");
		$this->majorVersion = Control::config("major_version");
		$this->assetsFolder = 'releases/' . $this->majorVersion . '/docs/';
		$this->baseurl = $this->isLatest ? '/docs' : '/' . $this->majorVersion . '/docs';	
		
		$mode = (is_numeric($arg1) ? $arg2 : $arg1);
		
		$urlparts = explode($mode . '/', $_SERVER['REQUEST_URI']);
		if (count($urlparts) == 1 || $urlparts[1] == ''){
			$this->path = 'Welcome';
		} else {
			$this->path = $urlparts[1];
		}
		
		$this->data('mode', $mode);
		$this->data('menu', $this->getMenu());
		$this->data('breadcrumb', $this->getBreadcrumb());
		$this->data('content', $this->getContent());
		
		$this->data('page', 'Docs');
		$this->data('title', 'MooTools - Documentation');
		
		$this->render();
	}
	
	private function getMenu(){
		$html = file_get_contents($this->assetsFolder . 'menu.html');			
		return str_replace('[BASEURL]', $this->baseurl, $html);
	}
	
	private function getBreadcrumb(){
		$parts = explode('/', $this->path);
		$totalurl = $this->baseurl;
		
		$html = '';
		$html .= '<ul class="breadcrumb">';
		$html .= '<li>Docs</li>';
		
		if (!$this->isLatest){
			$html .= '<li><span class="divider">/</span>' . $this->majorVersion . '</li>';
		}
		
		foreach ($parts as $part){
			$totalurl .= '/' . $part;
			$html .= '<li>';
			$html .= '<span class="divider">/</span>';
			$html .= '<a href="' . $totalurl . '">' . str_replace('-', ' ', $part) . '</a>';
			$html .= '</li>';
		}
		
		$html .= '</ul>';
		
		return $html;
	}
	
	private function getContent(){
		$path = $this->assetsFolder . $this->path;
		if (file_exists($path . '.md')){
			$html = $this->getLegacyContent($path);
		} else if (file_exists($path . '.html')){
			$html = file_get_contents($path . '.html');
		} else {
			$html = $this->notFound($path);
		}
		$baseurl = $this->isLatest ? '/docs' : '/' . $this->majorVersion . '/docs';		
		return str_replace('[BASEURL]', $baseurl, $html);
	}
	
	private function getLegacyContent($path){
		$this->data('mode', $this->data('mode') . ' legacy');
		$content = file_get_contents($path . '.md');
		$html = markdown($content);
		return $html;
	}
	
	private function notFound(){
		return '<h1>Not found ' .'</h1>';
	}

}

?>