<?php
include_once '../function.php';
include_once '../session.php';
include 'signup-errorhandler.php';

Session::init();
$function = new Functions();
$ErrorHandler = new ErrorHandler();
//---ADDING SECTION---//

//Add RHU
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-add-rhu'])) {

	//Grab data
	$fname = $_POST["fname"];
	$mname = $_POST["mname"];
	$lname = $_POST["lname"];
	$suffix = $_POST["suffix"];
	$birthdate = $_POST["birthdate"];
	$sex = $_POST["sex"];
	$province = $_POST["province"];
	$municipality = $_POST["municipality"];
	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$rptpassword = $_POST["rptpassword"];

	if ($ErrorHandler->invalidEmail($email) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Invalid Email! </center> </div><br>");
		include 'rhu-add.php';
		exit();
	}
	if ($ErrorHandler->invalidUsername($username) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Invalid Username! </center> </div><br>");
		include 'rhu-add.php';
		exit();
	}
	if ($ErrorHandler->passwordMatch($password, $rptpassword) !== true) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Password did not match! </center> </div><br>");
		include 'rhu-add.php';
		exit();
	}
	if ($ErrorHandler->usernameTaken2("rhu", $username, $email) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Email or username already exist! </center> </div><br>");
		include 'rhu-add.php';
		exit();
	}

	$flag = $function->AddRHU($_POST);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-circle-check'></i> A new user has been added! </center> </div><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Something went wrong! </center> </div><br>");
		include 'rhu-add.php';
		exit();
	}

	header("Location: rhu");
	exit();
}

//Edit RHU
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-edit-rhu'])) {

	$rhu_id = $_GET['rhu_id'];

	$fname = $_POST["fname"];
	$mname = $_POST["mname"];
	$lname = $_POST["lname"];
	$suffix = $_POST["suffix"];
	$birthdate = $_POST["birthdate"];
	$sex = $_POST["sex"];
	$province = $_POST["province"];
	$municipality = $_POST["municipality"];
	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$rptpassword = $_POST["rptpassword"];

	if ($ErrorHandler->invalidEmail($email) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Invalid Email! </center> </div><br>");
		header("Location: rhu-edit?rhu_id=" . $rhu_id);
		exit();
	}
	if ($ErrorHandler->invalidUsername($username) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Invalid Username! </center> </div><br>");
		header("Location: rhu-edit?rhu_id=" . $rhu_id);
		exit();
	}
	if ($ErrorHandler->passwordMatch($password, $rptpassword) !== true) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Password did not match! </center> </div><br>");
		header("Location: rhu-edit?rhu_id=" . $rhu_id);
		exit();
	}
	$flag = $function->UpdateRHU($_POST, $rhu_id);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-circle-check'></i> User has been changed! </center> </div><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Something went wrong! </center> </div><br>");
		header("Location: rhu-edit?rhu_id=" . $rhu_id);
		exit();
	}
	header("Location: rhu-view?rhu_id=" . $rhu_id);
	exit();
}

//Delete RHU
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-delete-rhu'])) {

	if (isset($_POST['rhu_id'])) {
		$rhu_id = $_POST['rhu_id'];
		$flag = $function->DeactivateRHU($rhu_id);
		if ($flag == 1) {
			$_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-circle-check'></i> User has been deleted! </center> </div><br>";
		} else {
			$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Something went wrong! </center> </div><br>";
		}
	} else {
		$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Invalid request!</center> </div><br>";
	}
	header("Location: rhu");
	exit();
}

//Add PHO
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-add-pho'])) {

	//Grab data
	$fname = $_POST["fname"];
	$mname = $_POST["mname"];
	$lname = $_POST["lname"];
	$suffix = $_POST["suffix"];
	$birthdate = $_POST["birthdate"];
	$sex = $_POST["sex"];
	$province = $_POST["province"];
	$municipality = $_POST["municipality"];
	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$rptpassword = $_POST["rptpassword"];

	if ($ErrorHandler->invalidUsername($username) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Invalid Username! </center> </div><br>");
		include 'pho-add';
		exit();
	}
	if ($ErrorHandler->invalidEmail($email) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Invalid Email! </center> </div><br>");
		include 'pho-add';
		exit();
	}
	if ($ErrorHandler->passwordMatch($password, $rptpassword) !== true) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Password did not match! </center> </div><br>");

		include 'pho-add';
		exit();
	}
	if ($ErrorHandler->usernameTaken2("pho",$username, $email) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Email or username already exist! </center> </div><br>");
		include 'pho-add';
		exit();
	}

	$flag = $function->addPHO($_POST);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-circle-check'></i> A new User has been added! </center> </div><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Something went wrong! </center> </div><br>");
		include 'pho-add';
		exit();
	}
	header("Location: pho");
	exit();
}
//UPDATE PHO
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-edit-pho'])) {

	$pho_id = $_GET['pho_id'];

	$fname = $_POST["fname"];
	$mname = $_POST["mname"];
	$lname = $_POST["lname"];
	$suffix = $_POST["suffix"];
	$birthdate = $_POST["birthdate"];
	$sex = $_POST["sex"];
	$province = $_POST["province"];
	$municipality = $_POST["municipality"];
	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$rptpassword = $_POST["rptpassword"];

	if ($ErrorHandler->invalidEmail($email) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Invalid Email! </center> </div><br>");
		header("Location: pho-edit?pho_id=" . $pho_id);
		exit();
	}
	if ($ErrorHandler->invalidUsername($username) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Invalid Username! </center> </div><br>");
		header("Location: pho-edit?pho_id=" . $pho_id);
		exit();
	}
	if ($ErrorHandler->passwordMatch($password, $rptpassword) !== true) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Password did not match! </center> </div><br>");
		header("Location: pho-edit?pho_id=" . $pho_id);
		exit();
	}

	$flag = $function->UpdatePHO($_POST, $pho_id);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-circle-check'></i>User has been changed! </center> </div><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Something went wrong! </center> </div><br>");
		header("Location: pho-edit?pho_id=" . $pho_id);
	}
	header("Location: pho-view?pho_id=" . $pho_id);
	exit();
}

//DELETE PHO
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-delete-pho'])) {

	if (isset($_POST['pho_id'])) {
		$pho_id = $_POST['pho_id'];
		$flag = $function->DeactivatePHO($pho_id);
		if ($flag == 1) {
			$_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-circle-check'></i> User has been deleted! </center> </div><br>";
		} else {
			$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Something went wrong! </center> </div><br>";
		}
	} else {
		$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Invalid request! </center> </div><br>";
	}
	header("Location: rhu");
	exit();
}

//Add DOH
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-add-doh'])) {
	//Grab data
	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$rptpassword = $_POST["rptpassword"];

	if ($ErrorHandler->invalidUsername($username) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Invalid Username! </center> </div><br>");
		include 'doh-add.php';
		exit();
	}
	if ($ErrorHandler->invalidEmail($email) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Invalid Email! </center> </div><br>");
		include 'doh-add.php';
		exit();
	}
	if ($ErrorHandler->passwordMatch($password, $rptpassword) !== true) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Password not matched! </center> </div><br>");
		include 'doh-add.php';
		exit();
	}
	if ($ErrorHandler->usernameTaken2("doh",$username, $email) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Username already taken! </center> </div><br>");
		include 'doh-add.php';
		exit();
	}

	$flag = $function->AddDOH($_POST);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-circle-check'></i> A new User has been added! </center> </div><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Something went wrong! </center> </div><br>");
		include 'doh-add.php';
		exit();
	}
	header("Location: doh?id=" . $_SESSION['admin_id']);
	exit();
}

//Edit DOH
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-edit-doh'])) {
	$doh_id = $_GET['doh_id'];

	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$rptpassword = $_POST["rptpassword"];

	if ($ErrorHandler->invalidUsername($username) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Invalid Username! </center> </div><br>");
		header("Location: doh-edit.php?doh_id=" . $doh_id);
		exit();
	}
	if ($ErrorHandler->invalidEmail($email) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Invalid Email! </center> </div><br>");
		header("Location: doh-edit?doh_id=" . $doh_id);
		exit();
	}
	if ($ErrorHandler->passwordMatch($password, $rptpassword) !== true) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Password not matched! </center> </div><br>");
		header("Location: doh-edit?doh_id=" . $doh_id);
		exit();
	}

	$flag = $function->UpdateDOH($_POST, $doh_id);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-circle-check'></i> User has been changed! </center> </div><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Something went wrong! </center> </div><br>");
		header("Location: doh-edit?doh_id=" . $doh_id);
	}
	header("Location: doh-view?doh_id=" . $doh_id);
	exit();
}

//Delete DOH
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-delete-doh'])) {

	if (isset($_POST['doh_id'])) {
		$doh_id = $_POST['doh_id'];
		$flag = $function->DeactivateDOH($doh_id);
		if ($flag == 1) {
			$_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-circle-check'></i> User has been deleted! </center> </div><br>";
		} else {
			$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Something went wrong! </center> </div><br>";
		}
	} else {
		$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Invalid request! </center> </div><br>";
	}
	header("Location: doh?id=" . $_SESSION['admin_id']);
	exit();
}


//log in admin
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-admin-login'])) {
	$username = trim($_POST['username']);
	$password = strip_tags($_POST['password']);
	// Invoke SuperLogin function with sanitized inputs
	$flag = $function->AdminLogin($username, $password);

	if ($flag == 1) {
		// Set success message
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-circle-check'></i> Log in Successfully! </center> </div><br>");
		header("Location: index?id=" . $_SESSION['admin_id']);
		exit();
	}
	if ($flag == 2) {
		// Set success message
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> &nbsp Incorrect password! </center> </div><br>");
		include 'login.php';
		exit();
	} else {
		// Set error message
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Username does not Exist!</center> </div><br>");
		include 'login.php';
		exit();
	}
	// Redirect user
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-log-out'])) {

	$flag = $function->logLogoutAction($_SESSION['username']);

	if ($flag == 1) {
		// Set success message
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #ff6347  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa-solid fa-circle-check'></i> &nbsp Log out in successfully! </center> </div><br>");
		header("Location: ../logout");
		exit();
	} else {
		// Set error message
		Session::set("msg", "<div style='background-color: #ff6347; color:white; border: solid #ff6347  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa-solid fa-circle-exclamation'></i> &nbsp Something went wrong! </center> </div><br>");
		header("Location: index?id=" . $_SESSION['admin_id']);
		exit();
	}

} 

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-forget-password'])) {
		
	$sanitizedEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	
	if($ErrorHandler->usernameTaken(null, $sanitizedEmail) == true) {

		$flag = $function->generateToken($sanitizedEmail);

		if($flag == 1) {
			Session::set("msg","<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-circle-check'></i> A password reset link has been sent to your email! </center> </div><br>" );
			include 'forget-password.php';
			exit();
		} else if ($flag == 2) {
			Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Something went wrong! </center> </div><br>");
			include 'forget-password.php';
			exit();
		}
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Email not found! </center> </div><br>");
		include 'forget-password.php';
		exit();
	}
}



//reset password
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-reset-password'])) {
	
	$token = $_POST['token'];

	if ($ErrorHandler->passwordMatch($_POST['password'], $_POST['rptpassword']) !== true) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Password not matched! </center> </div><br>");
		// header("Location: reset-password.php?tkn=" . $_POST['token']);
		include 'reset-password.php?token='. $token;
		exit();
	}

	$flag = $function->resetPassword($_POST, $token);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-circle-check'></i> Password Updated! </center> </div><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Something went wrong! </center> </div><br>");
		include 'reset-password.php?token='. $token;
		exit();
	}
	header("Location: login");
	exit();

} 


//change password
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-edit-admin'])) {
	$admin_id = $_GET['admin_id'];
	$password = $_POST["password"];
	$rptpassword = $_POST["rptpassword"];

	if ($ErrorHandler->passwordMatch($password, $rptpassword) !== true) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Password not matched! </center> </div><br>");
		header("Location: changePassword.php?id=" . $admin_id);
		exit();
	}

	$flag = $function->ChangePassword($_POST, $admin_id);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-circle-check'></i> Password Updated! </center> </div><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Something went wrong! </center> </div><br>");
		header("Location: changePassword.php?id=" . $admin_id);
		exit();
	}
	header("Location: index?id=" . $admin_id);
	exit();

} 

else {
	header("Location: ../index");
	exit();
}
