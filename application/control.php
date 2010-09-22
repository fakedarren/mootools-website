<?php

/*
---

name: Control
description: single-class, single-file php5 microframework
license: MIT License (http://mootools.net/license.txt)
copyright: © Valerio Proietti (http://mad4milk.net)

...
*/

class Control {
	
	private static $__config = array(
		'default_controller' => 'home',
		'default_action' => 'index',
		'controllers_folder' => 'controllers',
		'views_folder' => 'views',
		'views_extension' => 'tpl'
	);
	
	public static function config($k = null, $v = null){
		switch (func_num_args()){
			case 1:
				if (is_array($k)) foreach($k as $key => $value) self::$__config[$key] = $value;
				else return self::$__config[$k];
			return;
			case 2: self::$__config[$k] = $v; return;
			case 0: return array_merge(array(), self::$__config);
		}
	}
	
	private static $__routes = array();
	
	public static function route($regexp, $controller = null, $action = null){
		self::$__routes[] = (is_array($regexp)) ? $regexp : array('regexp' => $regexp, 'controller' => $controller, 'action' => $action);
	}
	
	private $__data = array();
	
	protected function data($k = null, $v = null){
		switch (func_num_args()){
			case 1:
				if (is_array($k)) foreach($k as $key => $value) $this->__data[$key] = $value;
				else return $this->__data[$k];
			return;
			case 2: $this->__data[$k] = $v; return;
			case 0: return array_merge(array(), $this->__data);
		}
	}
	
	private $__post = array();
	
	protected function post($k = null){
		switch (func_num_args()){
			case 1: return $this->__post[$k];
			case 0: return array_merge(array(), $this->__post);
		}
	}
	
	public function __construct($controller = null, $action = null, $request = array(), $bypass = false){
		
		if (func_num_args() === 0){ //engine start
			
			$request_uri = preg_replace('@/$@', '', $_SERVER['REQUEST_URI']);
			$request_parts = parse_url($request_uri);
			$request_path = explode('/', $request_parts['path']);
			array_shift($request_path);

			$base_parts = parse_url($_SERVER['SCRIPT_NAME']);
			$base_path = explode('/', $base_parts['path']);
			array_pop($base_path);
			array_shift($base_path);
			
			$string_base_path = implode($base_path, '/');
			define('BASE_PATH', empty($string_base_path) ? '' : '/'.$string_base_path);

			$len = count($base_path);
			$request = array_slice($request_path, $len);
			
			$request_string = implode('/', $request);
			
			foreach (self::$__routes as $route){
				preg_match_all($route['regexp'], $request_string, $matches, PREG_SET_ORDER);
				
				$zero = (!empty($matches)) ? $matches[0] : null;
				if (!empty($zero)) $zero = $zero[0];
				if (empty($zero)) continue;
				
				return $this->__start(get_class($this), $route['controller'], $route['action'], $request, true);
			}

			$controller = array_shift($request);
			$action = array_shift($request);
			
			$this->__start(get_class($this), $controller, $action, $request);
			
		} else { //automatic controller instantiation

			$this->__post = $_POST;

			if (empty($action)){
				$action = $this->__underscore($this->config('default_action'));
				$bypass = true;
			}
			
			if (($bypass && method_exists($this, $action)) || (in_array($action, $this->__get_public_methods()))){
				call_user_func_array(array($this, $action), $request);
			} else {
				$this->missing('action', $action);
			}
			
		}

	}
	
	private function __start($name, $controller = null, $action = null, $request = array(), $bypass = false){
		
		if (empty($controller)) $controller = $this->config('default_controller');

		$c_controller = $this->__camelize($controller);
		$u_action = (empty($action)) ? null : $this->__underscore($action);
		$u_controller = $this->__underscore($controller);
		
		if (!class_exists($c_controller)){
			$file = $this->config('controllers_folder').'/'.$u_controller.'.php';
			if (file_exists($file)) require $file;
		}
		
		if (class_exists($c_controller) && is_subclass_of($c_controller, $name)){
			new $c_controller($u_controller, $u_action, $request, $bypass);
		} else {
			$this->missing('controller', $c_controller);
		}

	}
	
	private function __get_public_methods(){
		$methods = array();
		foreach (get_class_methods($this) as $method){
			$reflect = new ReflectionMethod($this, $method);
			if ($reflect->isPublic() && !$reflect->isStatic() && $method != '__construct') $methods[] = $method;
		}
		return $methods;
	}
	
	private function __camelize($word){
		return str_replace(' ', '', ucwords(preg_replace('/[^A-Z^a-z^0-9]+/', ' ', $word)));
	}
	
	private function __underscore($word){
		return strtolower(preg_replace('/[^A-Z^a-z^0-9]+/', '_',
		preg_replace('/([a-z\d])([A-Z])/', '\1_\2',
		preg_replace('/([A-Z]+)([A-Z][a-z])/', '\1_\2', $word))));
	}
	
	//missing
	
	protected function missing($type, $name){
		header('HTTP/1.0 404 Not Found');
		echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\"><html lang=\"en\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/><title>404 Not Found</title></head><body><h1>404 Not Found</h1><p>the $type $name is missing</p></body></html>";
	}
	
	//reroutes to another controller/action/request
	protected function reroute($controller = null, $action = null, $request = array()){
		$this->__start(get_parent_class($this), $controller, $action, $request);
	}
	
	//parses a string with data and returns the results
	protected function parse($__data, $__view){
		extract($__data);
		ob_start();
		eval('?>'.$__view);
		$__contents = ob_get_contents();
		ob_end_clean();
		return $__contents;
	}
	
	//gets the contents of the view file and returns as a string or null if empty or non-existing
	protected function get_view_contents($view = null){
		if (empty($view)) $view = $this->__underscore(get_class($this));
		$file = $this->config('views_folder').'/'.$this->__underscore($view).'.'.$this->config('views_extension');
		return (file_exists($file)) ? file_get_contents($file) : null;
	}
	
	//renders the view in stdout
	protected function render($view = null){
		$view_string = $this->get_view_contents($view);
		if (empty($view_string)) return $this->missing('view', $view);
		echo $this->parse($this->__data, $view_string);
	}

}

?>