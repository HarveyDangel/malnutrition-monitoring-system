<?php
include '../function.php';
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

	// if($ErrorHandler->emptyInputAddRhu($fname, $lname, $birthdate, $sex, $province, $municipality, $email, $username, $password, $rptpassword) !== false) {
	//  	Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Missing Input! </center> </div><br>");
	//  	header("Location: rhu-add.php?error=empty-input");
	// 	exit();
	// }
	if($ErrorHandler->invalidEmail($email) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid Email! </center> </div><br>");
		header("Location: rhu-add.php?error=invalid-email");
		exit();
	}
	if($ErrorHandler->invalidUsername($username) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid Username! </center> </div><br>");
		header("Location: rhu-add.php?error=invalid-username");
		exit();
	}
	if($ErrorHandler->passwordMatch($password, $rptpassword) !== true) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Password did not match! </center> </div><br>");
		header("Location: rhu-add.php?error=password-not-match");
		exit();
	}
	if($ErrorHandler->usernameTaken($username, $email) !== false) {
	 	Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Email or username already exist! </center> </div><br>");
	  	header("Location: rhu-add.php?error=email-or-username-already-taken");
	  	exit(); 
	}

	$flag = $function->AddRHU($_POST);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new User has been added! </center> </div><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
	}

	header("Location: rhu.php");
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

	if($ErrorHandler->invalidEmail($email) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid Email! </center> </div><br>");
		header("Location: rhu-edit.php?rhu_id=" . $rhu_id );
		exit();
	}
	if($ErrorHandler->invalidUsername($username) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid Username! </center> </div><br>");
		header("Location: rhu-edit.php?rhu_id=" . $rhu_id);
		exit();
	}
	if($ErrorHandler->passwordMatch($password, $rptpassword) !== true) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Password did not match! </center> </div><br>");
		header("Location: rhu-edit.php?rhu_id=" . $rhu_id);
		exit();
	}
	$flag = $function->UpdateRHU($_POST, $rhu_id);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>User has been changed! </center> </div><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
	}
	header("Location: rhu-view.php?rhu_id=" . $rhu_id);
	exit();
}

//Delete RHU
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-delete-rhu'])) {

	if (isset($_POST['rhu_id'])) {
		$rhu_id = $_POST['rhu_id'];
		$flag = $function->DeleteRHU($rhu_id);
		if ($flag == 1) {
			$_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>User has been deleted! </center> </div><br>";
		} else {
			$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
		}
	} else {
		$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
	}
	header("Location: rhu.php");
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

	// if($ErrorHandler->emptyInputAddRhu($fname, $lname, $birthdate, $sex, $province, $municipality, $email, $username, $password, $rptpassword) !== false) {
	//  	Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Missing Input! </center> </div><br>");
	//  	header("Location: pho-add.php?error=empty-input");
	// 	exit();
	// }
	if($ErrorHandler->invalidUsername($username) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid Username! </center> </div><br>");
		header("Location: pho-add.php?error=invalid-username");
		exit();
	}
	if($ErrorHandler->invalidEmail($email) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid Email! </center> </div><br>");
		header("Location: pho-add.php?error=invalid-email");
		exit();
	}
	if($ErrorHandler->passwordMatch($password, $rptpassword) !== true) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Password did not match! </center> </div><br>");
		header("Location: pho-add.php?error=password-not-match");
		exit();
	}
	if($ErrorHandler->usernameTaken($username, $email) !== false) {
	 	Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Email or username already exist! </center> </div><br>");
	  	header("Location: pho-add.php?error=email-or-username-already-taken");
	  	exit();
	}

	$flag = $function->addPHO($_POST);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new User has been added! </center> </div><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
	}
	header("Location: pho.php");
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

	if($ErrorHandler->invalidEmail($email) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid Email! </center> </div><br>");
		header("Location: pho-edit.php?pho_id=" . $pho_id );
		exit();
	}
	if($ErrorHandler->invalidUsername($username) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid Username! </center> </div><br>");
		header("Location: pho-edit.php?pho_id=" . $pho_id);
		exit();
	}
	if($ErrorHandler->passwordMatch($password, $rptpassword) !== true) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Password did not match! </center> </div><br>");
		header("Location: pho-edit.php?pho_id=" . $pho_id);
		exit();
	}

	$flag = $function->UpdatePHO($_POST, $pho_id);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>User has been changed! </center> </div><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
	}
	header("Location: pho-view.php?pho_id=" . $pho_id);
	exit();
}
//DELETE PHO
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-delete-pho'])) {

	if (isset($_POST['pho_id'])) {
		$pho_id = $_POST['pho_id'];
		$flag = $function->DeletePHO($pho_id);
		if ($flag == 1) {
			$_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>User has been deleted! </center> </div><br>";
		} else {
			$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
		}
	} else {
		$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
	}
	header("Location: rhu.php");
	exit();
}

//Add DOH
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-add-doh'])) {
	//Grab data
	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$rptpassword = $_POST["rptpassword"];
	
	// if($ErrorHandler->emptyInputAddDoh($fname, $lname, $email, $username, $password, $rptpassword) !== false) {
	// 	Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Missing Input! </center> </div><br>");
	// 	header("Location: doh-add.php?error=empty-input");
	// 	exit();
	// }
	if($ErrorHandler->invalidUsername($username) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid Username! </center> </div><br>");
		header("Location: doh-add.php?error=invalid-username");
		exit();
	}
	if($ErrorHandler->invalidEmail($email) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid Email! </center> </div><br>");
		header("Location: doh-add.php?error=invalid-email");
		exit();
	}
	if($ErrorHandler->passwordMatch($password, $rptpassword) !== true) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Password not matched! </center> </div><br>");
		header("Location: doh-add.php?error=password-not-match");
		exit();
	}
	if($ErrorHandler->usernameTaken($username, $email) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Username already taken! </center> </div><br>");
	 	header("Location: doh-add.php?error=email-or-username-already-taken");
	 	exit();
	}

	$flag = $function->AddDOH($_POST);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new User has been added! </center> </div><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
	}
	header("Location: doh.php?username=". $_SESSION['username']);
	exit();
}

//Edit DOH
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-edit-doh'])) {
	$doh_id = $_GET['doh_id'];

	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$rptpassword = $_POST["rptpassword"];

	if($ErrorHandler->invalidUsername($username) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid Username! </center> </div><br>");
		header("Location: doh-edit.php?doh_id=" . $doh_id);
		exit();
	}
	if($ErrorHandler->invalidEmail($email) !== false) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid Email! </center> </div><br>");
		header("Location: doh-edit.php?doh_id=" . $doh_id);
		exit();
	}
	if($ErrorHandler->passwordMatch($password, $rptpassword) !== true) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Password not matched! </center> </div><br>");
		header("Location: doh-edit.php?doh_id=" . $doh_id);
		exit();
	}

	$flag = $function->UpdateDOH($_POST, $doh_id);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>User has been changed! </center> </div><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
	}
	header("Location: doh-view.php?doh_id=" . $doh_id);
	exit();
}

//Delete DOH
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-delete-doh'])) {

	if (isset($_POST['doh_id'])) {
		$doh_id = $_POST['doh_id'];
		$flag = $function->DeleteDOH($doh_id);
		if ($flag == 1) {
			$_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>User has been deleted! </center> </div><br>";
		} else {
			$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
		}
	} else {
		$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
	}
	header("Location: doh.php?username=" . $_SESSION['username']);
	exit();
}

//change password
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-edit-admin'])) {
	$admin_id = $_GET['admin_id'];
	$password = $_POST["password"];
	$rptpassword = $_POST["rptpassword"];

	if($ErrorHandler->passwordMatch($password, $rptpassword) !== true) {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Password not matched! </center> </div><br>");
		header("Location: changePassword.php?id=" . $admin_id);
		exit();
	}

	$flag = $function->ChangePassword($_POST, $admin_id);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Password Updated! </center> </div><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
	}
	header("Location: index.php?id=" . $admin_id);
	exit();
}

//log in admin
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-admin-login'])) {
    $username = trim($_POST['username']);
    $password = strip_tags($_POST['password']);
    // Invoke SuperLogin function with sanitized inputs
    $flag = $function->AdminLogin($username , $password);

    if ($flag == 1) {
        // Set success message
        Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Log in Successfully! </center> </div><br>");
		header("Location: index.php?id=" . $_SESSION['admin_id']);
		exit();
	}
	if ($flag == 2) {
        // Set success message
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Password is Incorrect! </center> </div><br>");
		header("Location: login.php?error=incorrect-password");
		exit();
    } else {
        // Set error message
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Username does not Exist!</center> </div><br>");
		header("Location: login.php?error=incorrect-username");
		exit();

    }
    // Redirect user
}

else{
	header("Location: ../index.php");
	exit();
}