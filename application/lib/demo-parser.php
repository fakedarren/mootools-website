<?php

class DemoParser extends Control {

	protected function parseDemo($path, $demo, $tutorial = ''){
		$htmlContent = $path . '/demo.html';
		$cssContent = $path . '/demo.css';
		$jsContent = $path . '/demo.js';
		
		if (!file_exists($path . '/demo.tpl'))
			return '[DEMO:' . $demo . ']';
		
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
		
		if ($tutorial == ''){
			$params = 'demo=' . $demo;
		} else {
			$params = 'tutorial=' . $tutorial . '&demo=' . $demo;
		}
		$demo = '<iframe src="/learning/demo-runner.php?' . $params . '" style="height: ' . $demosize . 'px"></iframe>';
		$content = preg_replace('/\[DEMOCONTENT:?\d*\]/', $demo, $content);
		
		return $content;
	}

}

?>