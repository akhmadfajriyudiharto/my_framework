<?php if ( ! defined('__VALID_ENTRANCE')) exit('No direct script access allowed');

class BaseModel{
 
	public $db;
	public $session;
	public $auth;
    protected $_schema;
    protected $_table;

	public function __construct()
	{
		$this->db = DataBase::getInstance();
		$this->session = Session::getInstance();
		$this->auth = Auth::getInstance();
// var_dump(expression)
		// $query = $this->db->pdo->prepare("SELECT * FROM public.user");
  //       $query->execute();

  //           while ($row = $query->fetch()) {
  //               var_dump($row);
  //           }
	}

	public function getTable(){
		return empty($this->_schema) ? $this->_table : $this->_schema.'.'.$this->_table;
	}
}
?>