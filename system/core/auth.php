<?php if ( ! defined('__VALID_ENTRANCE')) exit('No direct script access allowed');

class Auth {

    private static $ref;
    public $session;

    public function __construct()
    {
        $this->session = Session::getInstance();
    }

    public static function getInstance() {
        if (static::$ref == null) {
            static::$ref = new Auth();
        }
        return static::$ref;
    }

    public function isAuthenticated() {
        if (!empty($this->session->get_session_data('data_user')))
            return true;
        else
            return false;
    }
}
?>