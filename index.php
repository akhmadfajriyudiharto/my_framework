<?php

/*
*---------------------------------------------------------------
* Developed by Akhmad Fajri Yudiharto
*---------------------------------------------------------------
*
*Include the neccesary Class (Init) For intialization of the System
*Note:: This Index will not work without the include file set to the right path!
*/

require 'system/core/app.php';
require 'LoadCore.php';


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

$system_path = 'system';
$application_folder = 'application';
$view_folder = '';

/**
 *Run checks for server path
 */
if (isset($_SERVER['PATH_INFO'])){
	$path = $_SERVER['PATH_INFO'];
	$server = $app->path_split($path);
}else{
	$server = '/';
}

/*
 * -------------------------------------------------------------------
 *  Now that we know the path, set the main path constants
 * -------------------------------------------------------------------
 */
// The name of THIS file
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

// Path to the system directory
define('BASEPATH', $system_path);

// Path to the front controller (this file) directory
define('FCPATH', dirname(__FILE__).DIRECTORY_SEPARATOR);

// Name of the "system" directory
define('SYSDIR', basename(BASEPATH));


switch (Init::is_slash($server))
{
	case true:

		require_once __DIR__.'/Models/indexModel.php';
    	require_once __DIR__.'/Controllers/indexController.php';

        $app->req_model = new IndexModel();
        $app->req_controller = new IndexController($app->req_model);

        $model = $app->req_model;
        $controller = $app->req_controller;

        $ModelObj = new $model;
        $ControllerObj = new $controller($app->req_model);

        $method = $app->req_method;

        if ($app->req_method != ''){
            print $ControllerObj->$method($app->req_param);
        }else{
        	print $ControllerObj->index();
        }
		break;

	case false:

		$app->req_controller = $server[1];
		$app->req_model = $server[1];

		$app->req_method = isset($server[2])? $server[2] :'';
		$app->req_param = array_slice($server, 3);

		$req_controller_exists = __DIR__.'/Controllers/'.$app->req_controller.'Controller.php';

		if (file_exists($req_controller_exists)){
			require_once __DIR__.'/Models/'.$app->req_model.'Model.php';
	    	require_once __DIR__.'/Controllers/'.$app->req_controller.'Controller.php';

	        $model = ucfirst($app->req_model).'Model';
	        $controller = ucfirst($app->req_controller).'Controller';

	        $ModelObj = new $model;
	        $ControllerObj = new $controller(ucfirst($app->req_model.'Model'));

	        $method = $app->req_method;

	        if ($app->req_method != '')
                print $ControllerObj->$method($app->req_param);
            else
				print $ControllerObj->index();
		}
		else{
			header('HTTP/1.1 404 Not Found');
            die('404 - The file - '.$app->req_controller.' - not found');
		}




		break;

	default:
		print 'An Error Occured';

		break;
}
