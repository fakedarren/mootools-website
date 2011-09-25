<?php
class Learn extends Control {

	protected function index(){
		global $version;
		$menu = new PackageMenu('releases/' . $version . '/Site/learn.json');
		$this->currentnav = 'docs';
		$this->menu = $menu->html;
		$this->render();
	}
	
}
?>