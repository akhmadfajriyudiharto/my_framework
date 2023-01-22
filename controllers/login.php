<?php if ( ! defined('__VALID_ENTRANCE')) exit('No direct script access allowed');

class Login extends BaseController{

	public function index(){
		$userModel = $this->model('user');

		if($userModel->auth->isAuthenticated()){
			To('home');
		}else{
			if(count($_POST)>0)
				$this->masuk();
			else
				$this->view('login');
		}
	}

	public function masuk(){
		$userModel = $this->model('user');

		$user = $userModel->db->table($userModel->getTable())->where([array('username', $_POST['username']), ['username', $_POST['username']]])->get()->toArray();
		
		if (!empty($user[0])) {
			$userModel->session->set_session_data('data_user', $user[0] );
		}


		if($userModel->auth->isAuthenticated()){
			To('home');
		}else{
			$this->view('login');
			echo "<script>alert('Email dan Password salah');</script>";
		}
	}

	public function keluar(){
		$userModel = $this->model('user');

		$userModel->session->remove_session();
		To('home');
	}
}
?>