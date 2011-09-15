<?php
class Demo {
	
	public $source;
	public $output;
	
	public $html;
	public $script;
	public $css;
	
	public function __construct($source){
		$this->source = $source;
		$parts = $this->split();
		
		$resultHTML = preg_replace('/<\/?code>/', '', html_entity_decode($parts['HTML']));
		$resultHTML = preg_replace('/<\/?pre>/', '', $resultHTML);
		$resultCSS = preg_replace('/<\/?code>/', '', html_entity_decode($parts['CSS']));
		$resultCSS = preg_replace('/<\/?pre>/', '', $resultCSS);
		
		$result = '<div class="inline-demo"><button>Run this code</button><h2 class="selected">Result</h2><div class="selected content"><div class="demo results">' . $resultHTML . '<style type"text/css">' . $resultCSS . '</style></div></div>';
		
		foreach ($parts as $type => $content){
			$content = preg_replace('/<\/?code>/', '', $content);
			$content = preg_replace('/<\/?pre>/', '', $content);
			switch ($type){
				case 'HTML':
					$result .= '<h2>HTML</h2><div class="content"><textarea class="demo html">' . $content . '</textarea></div>';
					break;
				case 'JavaScript':
				case 'JS':
					$result .= '<h2>JS</h2><div class="content"><textarea class="demo script">' . $content . '</textarea></div>';
					break;
				case 'CSS':
					$result .= '<h2>CSS</h2><div class="content"><textarea class="demo css">' . $content . '</textarea></div></div>';
					break;
			}
		}
		
		
		$this->output =  $result;
	}

	protected function split(){
		$split = preg_split('/<h4[^>]*>/', $this->source);
		foreach($split as $part){
			$bits = preg_split('/<\/h4>/', $part);
			$parts[$bits[0]] = $bits[1];
		}
		return $parts;
	}
}

class Example {
	
	public $source;
	public $output;
	
	public $html;
	public $script;
	public $css;
	
	public function __construct($source){
		$this->source = $source;
		$parts= $this->split();
		print_r($parts);
		//	$this->output = '<div class="inline-demo"><h2 class="selected">Result</h2><div class="selected content"><div class="demo results"></div></div>' . '<h2>HTML</h2><div class="content"><textarea class="demo html"><div id="foo"></div></textarea></div>' . '<h2>JS</h2><div class="content"><textarea class="demo script">' . '$("foo").setStyle("color", "red")' . '</textarea></div>' . '<h2>CSS</h2><div class="content"><textarea class="demo css">' . '#foo {color:blue}' . '</textarea></div></div>';
	}
	
	protected function split(){
		return preg_replace_callback('/<h4[^>]*>([\s\S]*?)<h4[^>]*>/', function($matches){
			return "";
		}, $this->source);
	}
}
?>