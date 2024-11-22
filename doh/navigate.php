<?php
include '../function.php';
include_once '../session.php';
Session::init();

$function = new Functions();

//log in
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-doh-login'])) {
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);

    // Invoke SuperLogin function with sanitized inputs
    $flag = $function->DOHLogin($username , $password);
    if ($flag == 1) {
        // Set success message
		$_SESSION["username"] = $_POST["username"];	
        Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-circle-check'></i>Log in Successfully! </center> </div><br>");
		header("Location: index?id=". $_SESSION['doh_id']);
		exit();

    }
    else if($flag == 2) {
        // Set success message
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> &nbsp Incorrect password! </center> </div><br>");
		include 'login.php';
		exit();
        
    } else {
        // Set error message
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Username does not Exist! </center> </div><br>");
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
		header("Location: ../logout.php");
		exit();

	} else {
		// Set error message
		Session::set("msg", "<div style='background-color: #ff6347; color:white; border: solid #ff6347  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa-solid fa-circle-exclamation'></i> &nbsp Something went wrong! </center> </div><br>");
		header("Location: index.php?id=".$_SESSION['doh_id']);
		exit();

	}
	

}

else{
	header("Location: ../403");
	exit();
}	