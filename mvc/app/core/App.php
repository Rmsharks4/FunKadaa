<?php

class App 
{

	protected $controller = 'intro';

	protected $method = 'index';

	protected $params = [];

	public function __construct()
	{
		$url = $this->parseUrl();

		if(file_exists('../app/controllers/' . rtrim($url[0],'.php') . '.php')) {
			$this->controller = rtrim($url[0],'.php');
			unset($url[0]);
		}

		require_once '../app/controllers/' . $this->controller . '.php';

		$this->controller = new $this->controller;

		if(isset($url[1])) {
			if(method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		$this->params = $url ? array_values($url) : [];

		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	protected function parseUrl() 
	{
		if(isset($_GET['url'])) {
			return $url = explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
		}
	}

}

?>