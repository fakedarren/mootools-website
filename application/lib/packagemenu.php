<?php
class PackageMenu {
	
	public $html;
	
	public function __construct($folder, $urlroot = '', $start = 1, $all = false){
		$file = (strpos($folder, '.json') === false ? $folder . '/package.json' : $folder);
		$content = file_get_contents($file);
		$json = json_decode($content);
		$html = '<ul class="menu">';
		foreach($json as $index => $item){
			if ($all || ($index >= (($start - 1) * 10) && $index < ($start + 10))){
				$html .= $this->menuitem($urlroot, $item);
			}
		}	
		$html .= '</ul>';
		$this->html = $html;
		$this->length = count($json);
	}
	
	function menuitem($urlroot, $obj){
		if (isset($obj->class)){
			$html = '<li class="' . $obj->class . '">';
		} else {
			$html = '<li>';
		}
		
		if (isset($obj->description)){
			$html .= '<h2><a href="' . $urlroot . $obj->url . '">' . $obj->title . '</a></h2>';
			$html .= '<p>' . $obj->description . '</p>';
		} else {
			$html .= '<a href="' . $urlroot . $obj->url . '">';
			$html .= $obj->title;
			if (isset($obj->subtitle)){
				$html .= '<span>' . $obj->subtitle . '</span>';
			}
			$html .= '</a>';
		}
		if (isset($obj->submenu)){
			if (isset($obj->submenutitle)){
				$html .= '<h3>' . $obj->submenutitle . '</h3>';
			}
			$html .= '<ul class="submenu">';
			foreach($obj->submenu as $subitem){
				$html .= $this->menuitem($urlroot, $subitem);
			}
			$html .= '</ul>';
		}
		$html .= '</li>';
		return $html;
	}
}
?>