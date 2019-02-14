<?php if ( ! defined('__VALID_ENTRANCE')) exit('No direct script access allowed');

class Register extends BaseController{

	public function index(){
		$userModel = $this->model('user');
		
		if($userModel->auth->isAuthenticated()){
			To('home');
		}else{
			if(count($_POST)>0)
				$this->daftar();
			else
				$this->view('register');
		}
	}

	public function daftar(){
		$data['username'] = $_POST['username'];
		$data['password'] = md5($_POST['password']);
		$data['userdesc'] = $_POST['userdesc'];
		$data['email'] = $_POST['email'];

		$userModel = $this->model('user');

		$id = $userModel->db->insert($userModel->getTable(),$data);

		if (!empty($id)) {
			To('login');
		}else{
			$this->view('register');
		}
	}
}
?>