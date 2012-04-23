<?php

class Tutorial extends DemoParser {

	protected function index($name, $tutorial = '', $page = 1){
		$this->data('page', 'Learn');
		$this->data('title', 'MooTools - Tutorial');
		
		$this->tutorial = $tutorial;
		$this->page = $page;
		
		$this->data('tutorial', $this->getContent($tutorial));
		$this->data('pagination', $this->getPagination($tutorial));
		
		$this->render();
	}
	
	protected function getContent(){
		$this->path = $_SERVER['DOCUMENT_ROOT'] . '/learning/tutorials/' . $this->tutorial;
		$content = file_get_contents($this->path . '/page' . $this->page . '.tpl');		
		$content = preg_replace_callback('/\[DEMO:([^\]]+)\]/', array(&$this, 'demoParser'), $content);		
		return $content;
	}
	
	protected function demoParser($matches){	
		return $this->parseDemo($this->path . '/demos/' . $matches[1], $matches[1], $this->tutorial);
	}

	protected function getPagination(){
		$path = $_SERVER['DOCUMENT_ROOT'] . '/learning/tutorials/' . $this->tutorial . '/';		
		$numberOfPages = count(glob($path . '*.tpl'));
		$html = '';
		
		$html .= '<div class="pagination">';
		$html .= 	'<ul>';
		
		if ($this->page == 1){
			$html .= '<li class="disabled"><a href="#">&laquo;</a></li>';
		} else {
			$html .= '<li><a href="/tutorial/' . $this->tutorial . '/' . ($this->page - 1) . '">&laquo;</a></li>';
		}
		
		for($i = 1; $i <= $numberOfPages; $i++){
			if ($this->page == $i){
				$html .= '<li class="active"><a href="#">' . $i . '</a></li>';	
			} else {
				$html .= '<li><a href="/tutorial/' . $this->tutorial . '/' . $i . '">' . $i . '</a></li>';	
			}
		}
		
		if ($this->page == $numberOfPages){
			$html .= '<li class="disabled"><a href="#">&raquo;</a></li>';
		} else {
			$html .= '<li><a href="/tutorial/' . $this->tutorial . '/' . ($this->page + 1) . '">&raquo;</a></li>';
		}

		$html .= 	'</ul>';
		$html .= '</div>';
		
		return $html;
	}

}

?>