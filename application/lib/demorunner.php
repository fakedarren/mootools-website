<?php
class Demo {
	
	public $source;
	public $output;
	
	public $html;
	public $script;
	public $css;
	
	public function __construct($source){
		$this->source = $source;
		$this->split();
		$this->output = '<h2>Result</h2><div class="demo results"></div>' . '<h2>HTML</h2><textarea class="demo html"><div id="foo"></div></textarea>' . '<h2>JS</h2><textarea class="demo script">' . '$("foo").setStyle("color", "red")' . '</textarea>' . '<h2>CSS</h2><textarea class="demo css">' . '#foo {color:blue}' . '</textarea>';
	}

	protected function split(){
		return preg_replace_callback('/<h4[^>]*>([\s\S]*?)<h4[^>]*>/', function($matches){
			return "";
		}, $this->source);
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
		$this->split();
			$this->output = '<h2>Result</h2><div class="demo results"></div>' . '<h2>HTML</h2><textarea class="demo html"><div id="foo"></div></textarea>' . '<h2>JS</h2><textarea class="demo script">' . '$("foo").setStyle("color", "red")' . '</textarea>' . '<h2>CSS</h2><textarea class="demo css">' . '#foo {color:blue}' . '</textarea>';
	}
	
	protected function split(){
		return preg_replace_callback('/<h4[^>]*>([\s\S]*?)<h4[^>]*>/', function($matches){
			return "";
		}, $this->source);
	}
}
?>