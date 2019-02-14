<?php  if ( ! defined('__VALID_ENTRANCE')) exit('No direct script access allowed');
function load_class($class) {
    $file = SYSPATH.'/core/' . $class . '.php';
    if (file_exists($file)) {
        require_once($file);
    }
    if(!class_exists($class)){
    	$file = 'models/' . $class . '.php';
    	if (file_exists($file))
	        require_once($file);
    }
    if(!class_exists($class)){
    	$file = 'controllers/' . $class . '.php';
    	if (file_exists($file))
	        require_once($file);
    }
}
spl_autoload_register('load_class');
?>