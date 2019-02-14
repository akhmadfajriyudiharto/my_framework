<?php if ( ! defined('__VALID_ENTRANCE')) exit('No direct script access allowed');

class Home extends BaseController{
	private $model;

	public function index(){
		$userModel = $this->model('user');
		
		if(!$userModel->auth->isAuthenticated()){
			To('login');
		}else{
			$this->view('home');
		}
	}
}
?>