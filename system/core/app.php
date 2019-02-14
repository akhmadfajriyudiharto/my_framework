<?php if ( ! defined('__VALID_ENTRANCE')) exit('No direct script access allowed');

class Init {

	/*
	 * Class Properties Declaration
	 */

	public $environment;
	public $capsule;
	public $controller_path;
	public $req_controller;
	public $view_render;
	public $req_param;
	public $req_method;
	public $load;
	public $session;
	public $auth;

	public function __construct()
	{
		$this->session = Session::getInstance();
		$this->auth = Auth::getInstance();
	}

	/**
	 *Split server path request into Array
	 *@return capsule;
	 */
	public function path_split($path)
	{
		$this->capsule = explode('/', ltrim($path));
		
		return $this->capsule;
	}

}
