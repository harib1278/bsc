<?php
/* index page controller **/

class Login extends Controller{

	public function __construct(){
		//var_dump("login");//die;
		parent::__construct();
		
	}

	public function index(){
		//$this->view->msg = 'This is the index, welcome!';
		var_dump("index"); die();
		$this->view->render('login/index');
	}

	public function run(){
		$this->model->run();
	}
}

?>