<?php

class Demo extends DemoParser {

	protected function index($name, $demo = ''){
		$this->data('page', 'Learn');
		$this->data('title', 'MooTools - Demo');
		
		$content = $this->getContent($demo);
		$this->data('demo', $content);
		
		$this->render();
	}
	
	protected function getContent($demo){
		$path = $_SERVER['DOCUMENT_ROOT'] . '/learning/demos/' . $demo;
		return $this->parseDemo($path, $demo);
	}

}

?>