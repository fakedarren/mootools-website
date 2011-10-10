<?php
class DocsParser {
	
	public $html = '';
	public $parts;
	
	public $description;
	
	public $titles;
	public $texts;
	
	public function __construct($path, $rooturl = ''){
		$content = file_get_contents($path);
		$html = Markdown($content);
		$html = $this->createDemos($html);
		$html = $this->createExamples($html);
		$html = $this->formatCodeBlocks($html);
		
		$this->parts = preg_split('/<hr \/>\s*<hr \/>/', $html);
		$this->html = $html;
		
		foreach ($this->parts as $index => $part){
			if ($index == 0){
				$this->description = $part;
			} else {
				$bits = preg_split('/<hr \/>/', $part);
				$name = trim(strtolower(preg_replace('/<h2[^>]*>[\s\S]*?: ([\s\S]*?)<\/h2>[\s\S]*/', "$1", $bits[0])));
				$url = $rooturl . '/' . $name;
				$this->titles[$name] = preg_replace('/<h2[^>]*>([\s\S]*?): ([\s\S]*?)<\/h2>([\s\S]*)/', "<h2><a href='$url'><span>$1: </span>$2</a></h2>$3", $bits[0]);
				@$this->texts[$name] = $bits[1];
			}
		}
	}
		
	protected function createDemos($source){
		return preg_replace_callback('/<h3[^>]*>Demo: ([\s\S]*?)<hr \/>/', function($matches){
			$demo = new Demo($matches[1]);
			return $demo->output;
		}, $source);
	}
	
	protected function createExamples($source){
		return preg_replace_callback('/<h3[^>]*>Example: ([\s\S]*?)<hr \/>/', function($matches){
			$demo = new Demo($matches[1]);
			return $demo->output;
		}, $source);
	}
	
	protected function formatCodeBlocks($source){
		return preg_replace_callback('/<pre><code>([\s\S]*?)<\/code><\/pre>/', function($matches){
			$geshi = new GeSHi($matches[1], 'javascript');
			$geshi->enable_classes();
			return $geshi->parse_code();
		}, $source);
	}
}
?>