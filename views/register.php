<?php if ( ! defined('__VALID_ENTRANCE')) exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!-- font Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<style type="text/css">
	    body {
	        color: #999;
			background: #f5f5f5;
			font-family: 'Varela Round', sans-serif;
		}
		.form-control {
			box-shadow: none;
			border-color: #ddd;
		}
		.form-control:focus {
			border-color: #4aba70; 
		}
		.login-form {
	        width: 350px;
			margin: 0 auto;
			padding: 30px 0;
		}
	    .login-form form {
	        color: #434343;
			border-radius: 1px;
	    	margin-bottom: 15px;
	        background: #fff;
			border: 1px solid #f3f3f3;
	        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	        padding: 30px;
		}
		.login-form h4 {
			text-align: center;
			font-size: 22px;
	        margin-bottom: 20px;
		}
	    .login-form .form-group {
	        margin-bottom: 20px;
	    }
		.login-form .form-control, .login-form .btn {
			min-height: 40px;
			border-radius: 2px; 
	        transition: all 0.5s;
		}
		.login-form .close {
	        position: absolute;
			top: 15px;
			right: 15px;
		}
		.login-form .btn {
			background: #4aba70;
			border: none;
			line-height: normal;
		}
		.login-form .btn:hover, .login-form .btn:focus {
			background: #42ae68;
		}
	    .login-form .checkbox-inline {
	        float: left;
	    }
	    .login-form input[type="checkbox"] {
	        margin-top: 2px;
	    }
	    .login-form .forgot-link {
	        float: right;
	    }
	    .login-form .small {
	        font-size: 13px;
	    }
	    .login-form a {
	        color: #4aba70;
	    }
	</style>
</head>
<body>
<div class="login-form">    
    <form action="" method="post">
    	<h4 class="modal-title">Register</h4>
        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="userdesc" placeholder="Nama" required="required">
        </div>
        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Register">              
    </form>			
    <div class="text-center small">Have an account? <a href="<?=BASE_URL.'login'?>">Login</a></div>
</div>
</body>
</html>