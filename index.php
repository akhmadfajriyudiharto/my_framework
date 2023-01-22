<?php

/*
*---------------------------------------------------------------
* Developed by Akhmad Fajri Yudiharto
*---------------------------------------------------------------
*
*Include the neccesary Class (Init) For intialization of the System
*Note:: This Index will not work without the include file set to the right path!
*/

// 
define('__VALID_ENTRANCE', 1);

/*
 * -------------------------------------------------------------------
 *  Now that we know the path, set the main path constants
 * -------------------------------------------------------------------
 */

// Path to the system directory
define('SYSPATH', 'system');

// Path to the system directory
define('CTRLPATH', 'controllers');

// Path to the system directory
define('MDLPATH', 'models');

// Path to the system directory
define('VIEWPATH', 'views');

// Path to the system directory
define('ERRORPATH', 'errors');

// Name of the "system" directory
define('SYSDIR', basename(SYSPATH));

require 'LoadCore.php';
require 'system/core/common_function.php';
require 'system/core/app.php';
require 'system/config/config.php';


$app = new Init;

define('ENVIRONMENT', 'development');
/*
*---------------------------------------------------------------
* ERROR REPORTING
*---------------------------------------------------------------
*
* Different environments will require different levels of error reporting.
* By default development will show errors but testing and live will hide them.
*/

if (defined('ENVIRONMENT')){
	switch (ENVIRONMENT){
		case 'development':
			error_reporting(-1);
			ini_set('display_errors', 1);
		break;

		case 'testing':
		case 'production':
			ini_set('display_errors', 0);
			if (version_compare(PHP_VERSION, '5.3', '>='))
			{
				error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
			}
			else
			{
				error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
			}
		break;

		default:
			header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
			echo 'The application environment is not set correctly.';
			exit(1); // EXIT_ERROR
	}
}

/**
 *Run checks for server path
 */
if (isset($_SERVER['PATH_INFO'])){
	$path = $_SERVER['PATH_INFO'];
	$server = $app->path_split($path);
}else{
	$path = '/home';
	$server = $app->path_split($path);
}


$app->req_controller = $server[1];
$app->req_method = isset($server[2])? $server[2] :'';
$app->req_param = array_slice($server, 3);
$app->controller_path = __DIR__.'/controllers/'.$app->req_controller.'.php';

if (file_exists($app->controller_path)){
	// require_once __DIR__.'/Controllers/'.$app->req_controller.'.php';

    $controller = ucfirst($app->req_controller);

    $ControllerObj = new $controller();

    $method = $app->req_method;

    if (!empty($method))
        $ControllerObj->$method($app->req_param);
    else
		$ControllerObj->index();
}
else{
	header('HTTP/1.1 404 Not Found');
    die('404 - The file - '.$app->req_controller.' - not found');
}

