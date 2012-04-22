<?php

class Docs extends Control {
	
	protected function index($path, $type = 'docs'){
		$this->isLatest = Control::config("is_latest");
		$this->majorVersion = Control::config("major_version");
		$this->assetsFolder = 'releases/' . $this->majorVersion . '/docs/';
		
		$urlparts = explode($type . '/', $_SERVER['REQUEST_URI']);
		@$this->path = $urlparts[1];
		
		$this->data('type', $type);
		$this->data('menu', $this->getMenu());
		$this->data('breadcrumb', $this->getBreadcrumb());
		$this->data('content', $this->getContent());
		
		$this->data('page', 'Docs');
		$this->data('title', 'MooTools - Documentation');
		
		$this->render();
	}
	
	private function getMenu(){
		$html = file_get_contents($this->assetsFolder . 'menu.html');		
		$path = $this->isLatest ? '/docs' : '/' . $this->majorVersion . '/docs';		
		return str_replace('[BASEURL]', $path, $html);
	}
	
	private function getBreadcrumb(){
		$parts = explode('/', $this->path);
		
		$html = '';
		$html .= '<ul class="breadcrumb">';
		$html .= '<li>Docs</li>';
		foreach ($parts as $part){
			$html .= '<li>';
			$html .= '<span class="divider">/</span>';
			$html .= '<a href="#">' . $part . '</a>';
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
			$html = $this->notFound();
		}
		return $html;
	}
	
	private function getLegacyContent($path){
		$this->data('type', $this->data('type') . ' legacy');
		$content = file_get_contents($path . '.md');
		$html = markdown($content);
		return $html;
	}
	
	private function notFound(){
		return '<h1>Not found</h1>';
	}

}

?>