<?php if ( ! defined('__VALID_ENTRANCE')) exit('No direct script access allowed');

class Home extends BaseController{
	private $model;

	public function index(){
		$this->view('home');
	}

	public function login(){
		echo "Login Method";
	}
}
?>