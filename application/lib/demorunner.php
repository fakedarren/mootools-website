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
		$this->output = '<div class="inline-demo"><button>Run this code</button><h2 class="selected">Result</h2><div class="selected content"><div class="demo results"><div id="foo">sfdsdf</div><style>#foo { background: blue; height: 100px; width: 100px; }</style></div></div>' . '<h2>HTML</h2><div class="content"><textarea class="demo html"><div id="foo">sfdsdf</div></textarea></div>' . '<h2>JS</h2><div class="content"><textarea class="demo script">' . '$("foo").setStyle("color", "red")' . '</textarea></div>' . '<h2>CSS</h2><div class="content"><textarea class="demo css">' . '#foo {color:blue}' . '</textarea></div></div>';
	}

	protected function split(){
		function matcher($matches){
			return "";
		};
		return preg_replace_callback('/<h4[^>]*>([\s\S]*?)<h4[^>]*>/', "matcher", $this->source);
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
			$this->output = '<div class="inline-demo"><h2 class="selected">Result</h2><div class="selected content"><div class="demo results"></div></div>' . '<h2>HTML</h2><div class="content"><textarea class="demo html"><div id="foo"></div></textarea></div>' . '<h2>JS</h2><div class="content"><textarea class="demo script">' . '$("foo").setStyle("color", "red")' . '</textarea></div>' . '<h2>CSS</h2><div class="content"><textarea class="demo css">' . '#foo {color:blue}' . '</textarea></div></div>';
	}
	
	protected function split(){
		function matcher($matches){
			return "";
		};
		return preg_replace_callback('/<h4[^>]*>([\s\S]*?)<h4[^>]*>/', "matcher", $this->source);
	}
}
?>