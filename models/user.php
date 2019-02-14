<?php if ( ! defined('__VALID_ENTRANCE')) exit('No direct script access allowed');

class User extends BaseModel{
    protected $_schema = 'public';
    protected $_table = 'user';

	function __construct(){
		parent::__construct();
	}
}
?>