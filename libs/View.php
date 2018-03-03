<?php
class View {
	function __construct(){
		echo 'This is the view<br>';
	}

	public function render($name, $noInclude = false){
		
var_dump("redner:"); var_dump($name);
		if($noInclude == true){
			require 'views/'.$name.'.php';
		} else {
			require 'views/header.php';
			require 'views/'.$name.'.php';
			require 'views/footer.php';
		}
	}
}