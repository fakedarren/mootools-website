<?php

class Demo extends Control {

	protected function index($name, $demo = ''){
		$this->data('page', 'Learn');
		$this->data('title', 'MooTools - Demo');
		
		$content = $this->getContent($demo);
		$this->data('demo', $content);
		
		$this->render();
	}
	
	protected function getContent($demo){
		$path = $_SERVER['DOCUMENT_ROOT'] . '/learning/demos/' . $demo;
		
		$htmlContent = $path . '/demo.html';
		$cssContent = $path . '/demo.css';
		$jsContent = $path . '/demo.js';
		
		$content = file_get_contents($path . '/demo.tpl');
		
		if (file_exists($htmlContent)){
			$html = htmlentities(file_get_contents($htmlContent));
			$content = str_replace('[HTMLCONTENT]', '<pre class="prettyprint">' . $html . '</pre>', $content);
		}
		
		if (file_exists($cssContent)){
			$css = file_get_contents($cssContent);
			$content = str_replace('[CSSCONTENT]', '<pre class="prettyprint">' . $css . '</pre>', $content);
		}
		
		if (file_exists($jsContent)){
			$js = file_get_contents($jsContent);
			$content = str_replace('[JSCONTENT]', '<pre class="prettyprint">' . $js . '</pre>', $content);
		}
		
		preg_match( '/\[DEMOCONTENT:?(\d*)\]/', $content, $placeholder);
		$demosize = '200';
		if ($placeholder[1]) $demosize = $placeholder[1];
		
		$demo = '<iframe src="/learning/demo-runner.php?demo=' . $demo . '" style="height: ' . $demosize . 'px"></iframe>';
		$content = preg_replace('/\[DEMOCONTENT:?\d*\]/', $demo, $content);
		
		return $content;
	}

}

?>