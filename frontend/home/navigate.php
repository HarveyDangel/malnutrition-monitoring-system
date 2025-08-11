
<?php

include_once '../function.php';
include_once '../session.php';
include 'signup-errorhandler.php';

Session::init();
$function = new Functions();
$ErrorHandler = new ErrorHandler();


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-sign-up'])) {

	//Grab data
	$email = $_POST["email"]; 
    $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
    $username = trim($_POST['username']);
    $password = strip_tags($_POST['password']);
	$rptpassword = strip_tags($_POST['rptpassword']);

	// if($ErrorHandler->emptyInputAddRhu($fname, $lname, $birthdate, $sex, $province, $municipality, $email, $username, $password, $rptpassword) !== false) {
	//  	Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Missing Input! </center> </div><br>");
	//  	header("Location: rhu-add.php?error=empty-input");
	// 	exit();
	// }
	if($ErrorHandler->invalidEmail($sanitizedEmail) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Invalid Email! </center> </div><br>");
		include 'sign-up-admin.php';
		exit();
	}
	if($ErrorHandler->invalidUsername($username) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Invalid Username! </center> </div><br>");
		include 'sign-up-admin.php';
		exit();
	}
	if($ErrorHandler->passwordMatch($password, $rptpassword) !== true) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Password did not match! </center> </div><br>");
		include 'sign-up-admin.php';
		exit();
	}
	if($ErrorHandler->usernameTaken($username, $sanitizedEmail) !== false) {
	 	Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Email or username already exist! </center> </div><br>");
         include 'sign-up-admin.php';
	  	exit(); 
	}

	$flag = $function->SignUpAdmin($_POST);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-circle-check'></i> A new admin has been signed up! </center> </div><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Something went wrong! </center> </div><br>");
        include 'sign-up-admin.php';
        exit();
	}

	header("Location: index");
	exit();
}

header("Location: ../403");
exit();