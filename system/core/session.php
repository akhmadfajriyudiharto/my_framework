<?php if ( ! defined('__VALID_ENTRANCE')) exit('No direct script access allowed');

class Session {

    private static $ref;
    protected $sessionID;

    public function __construct(){
        if( !isset($_SESSION) ){
            session_start();
        }
        //session_start();
        //$this->sessionID = session_id();
    }
 
    //untuk singleton
    public static function getInstance() {
        if (static::$ref == null) {
            static::$ref = new Session();
        }
        return static::$ref;
    }

    //ambil data session id
    public function get_session_id(){
        return session_id();
    }

    //cek data session
    public function session_exist($session_name){
        return isset($_SESSION[$session_name]);
    }

    //insert value to index session
    public function insert_value( $session_name , array $data ){
        if( is_array($_SESSION[$session_name]) ){
            array_push( $_SESSION[$session_name], $data );
        }
    }

    //remove data session
    public function remove_session( $session_name = '' ){
        if( !empty($session_name) ){
            unset( $_SESSION[$session_name] );
        }
        else{
            // unset($_SESSION);
            // session_unset();
            session_destroy();
        }
    }

    //ambil data session
    public function get_session_data( $session_name ){
        if (!empty($_SESSION[$session_name])) 
            return $_SESSION[$session_name];
        else
            return false;
    }

    //set data session
    public function set_session_data( $session_name , $data ){
        $_SESSION[$session_name] = $data;
    }

}
?>