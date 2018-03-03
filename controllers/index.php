<?php
/* index page controller **/

class Index extends Controller{

	public function __construct(){
		parent::__construct();

		
	}

	public function index(){
		//assigning a value to the view using the inbuilt object variable: msg
		//$this->view->msg = 'This is the index, welcome!';
		$this->view->render('index/index');
		
	}

	public function details(){
		var_dump("aasdasd");
		die();
		$this->view->render('index/index');
	}
}