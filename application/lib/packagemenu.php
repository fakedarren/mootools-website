<?php
class PackageMenu {
	
	public $html;
	
	public function __construct($folder, $urlroot){
		$content = file_get_contents($folder . '/package.json');
		$json = json_decode($content);
		$html = '<ul>';
		foreach($json as $item){
			$html .= '<li><a href="' . $urlroot . $item->url . '">' . $item->title . '</a></li>';
		}
		$html .= '</ul>';
		$this->html = $html;
	}
	
}
?>