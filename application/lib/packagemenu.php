<?php
class PackageMenu {
	
	public $html;
	
	public function __construct($folder, $urlroot){
		$content = file_get_contents($folder . '/package.json');
		$json = json_decode($content);
		
		function menu($urlroot, $obj){
			$html = '<li>';
			$html .= '<a href="' . $urlroot . $obj->url . '">' . $obj->title . '</a>';
			if (isset($obj->submenu)){
				$html .= '<ul>';
				$html .= menu($urlroot, $obj->submenu);
				$html .= '</ul>';
			}
			$html .= '</li>';
			return $html;
		}

		$html = '<ul>';
		foreach($json as $item){
			$html .= menu($urlroot, $item);
		}
		
		$html .= '</ul>';
		$this->html = $html;
	}
	
}
?>