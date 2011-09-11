<?php
class Demos extends Control {

	protected function index(){

		$url = explode("/", $_SERVER["REQUEST_URI"]);
		$path = array_slice($url, 2);
		
		$this->currentnav = 'docs';

		if (@strlen($path[0]) > 0){
			$this->data['html'] = file_get_contents('Source/Demos/' . $path[0] . '/demo.html');
			$this->data['css'] = file_get_contents('Source/Demos/' . $path[0] . '/demo.css');
			$this->data['js'] = file_get_contents('Source/Demos/' . $path[0] . '/demo.js');
			
			$html = file_get_contents('Source/Demos/' . $path[0] . '/demo.details');
			$this->data['details'] = preg_replace('/\/\*([\s\S]*?)\*\//', '', $html);
			
			$this->render();
		} else {
			$packagemenu = new PackageMenu('Source/Demos', '/demos', 1, true);
			$this->demoslist = $packagemenu->html;
			$this->render('demosindex');
		}
	}
	
}

?>