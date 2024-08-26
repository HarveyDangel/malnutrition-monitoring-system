<?php
include '../function.php';
include_once '../session.php';
Session::init();

$function = new Functions();

//---ADDING SECTION---//

//Add Child
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-add-child'])) {

	$flag = $function->addChild($_POST);
	if ($flag == 1) {
		Session::set("msg", "<script> alert(<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new Child has been added! </center> </div>, timeout:1000)</script><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
	}
	header("Location: children.php?id=". $_SESSION['rhu_id']);
	exit();
}

//Edit child
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-edit-child'])) {
	
	$child_id = $_GET['child_id'];

	$flag = $function->UpdateChild($_POST, $child_id);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Child has been changed! </center> </div><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
	}
	header("Location: children.php?id=". $_SESSION['rhu_id']);
	exit();

}

//Delete Child
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-delete-child'])) {

	if (isset($_POST['child_id'])) {
		$child_id = $_POST['child_id'];
		$flag = $function->DeleteChild($child_id);
		if ($flag == 1) {
			$_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Child has been deleted! </center> </div><br>";
		} else {
			$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
		}
	} else {
		$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
	}
	header("Location: children.php?id=". $_SESSION['rhu_id']);
	exit();
}

// //Import CSV/XLSC Child
// if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-add-child'])) {

// 	$flag = $function->importFile($_POST);
// 	if ($flag == 1) {
// 		Session::set("msg", "<script> alert(<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new Beneficiary has been added! </center> </div>, timeout:1000)</script><br>");
// 	} else {
// 		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
// 	}

// 	header("Location: children.php");
// }

//log in rhu
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-rhu-login'])) {
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);

    // Invoke function with sanitized inputs
    $flag = $function->RHULogin($username , $password);
    if ($flag == 1) {
        // Set success message
        Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Log in Successfully! </center> </div><br>");
		header("Location: index.php?id=". $_SESSION['rhu_id']);

		exit();
    } else if ($flag == 2) {
        // Set success message
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Incorrect password! </center> </div><br>");
		header("Location: login.php?error=incorrect-password");
		exit();
        
    } else {
        // Set error message
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Username does not exist! </center> </div><br>");
		header("Location: login.php?error=incorrect-username");
		exit();
    }
    // Redirect user
}

else{
	header("Location: ../index.php");
	exit();
}	