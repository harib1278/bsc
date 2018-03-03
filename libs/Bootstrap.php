<?php

//note that the controller paths shoul be set in a 	global config file.
class Bootstrap {

	function __construct(){
		//var_dump("expression"); 
		
		//var_dump($_GET['url']); exit;
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		//var_dump($url); 

		//dirty
		$url = rtrim($url, '/'); 
		
		$url = explode('/', $url);
		//var_dump("expression"); 

		//if there is no trailing directory in url handle in the correct way
		if (empty($url[0])){
			require 'controllers/index.php';
			$controller = new Index();
			$controller->index();
			//returning false on this condition will stop the rest of the consteructor from being loaded.
			return false;
		}
		

		//check file exists
				//first argument will always be the controller hence url[0]
		$file = 'controllers/' . $url[0] . '.php';

		if(file_exists($file)){
			var_dump("exists");
			require $file;
		} else {
			require 'controllers/error.php';
			$controller = new Error();
			$controller->index();
			//returning false on this condition will stop the rest of the consteructor from being loaded.
			return false;
		}

		
		$controller = new $url[0];
		$controller->loadModel($url[0]);

		//var_dump($url);
		//to pass url parameter as method parameter check for url[2]
		if (isset($url[2])){
			if(method_exists($controller, $url[1])){
				//dynamic function name call
				$controller->{$url[1]}($url[2]);
			} else {
				$this->error();
			}

			
		} else {
			if (isset($url[1])){
				if(method_exists($controller, $url[1])){
					$controller->{$url[1]}();
				} else {
					$this->error();
				}
				
			} else {
				$controller->index();
			}
		}

		
	}

	private function error(){
		require 'controllers/error.php';
		$controller = new Error();
		$controller->index();
		return false;
	}
}