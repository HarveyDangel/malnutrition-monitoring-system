<?php
include '../function.php';
include_once '../session.php';
//include '../vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/IOFactory.php';]
include 'classification-model/wfa.php';
include 'classification-model/hfa.php';
include 'classification-model/wfh.php';
Session::init();

$function = new Functions();

//---ADDING SECTION---//

//Add Child
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-add-child'])) {

	$AgeByMonths = $_POST['age_by_months'];
	$sex = $_POST['sex'];
	$weight = $_POST['weight'];
	$height = $_POST['height'];

	$wfa = weightForAge($AgeByMonths, $sex, $weight);
	$hfa = heightForAge($AgeByMonths, $sex, $height);
	$wfh = weightForHeight($weight, $sex, $height);

	$flag = $function->addChild($_POST, $wfa, $hfa, $wfh);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #ff6347  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa-solid fa-circle-check'></i> &nbsp A new Child has been Added! </center> </div><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ff6347; color:white; border: solid #ff6347  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa-solid fa-circle-exclamation'></i> &nbsp Something went wrong! </center> </div><br>");
	}
	header("Location: children.php?id=" . $_SESSION['rhu_id']);
	exit();
}


//Edit child
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-edit-child'])) {

	$child_id = $_GET['child_id'];

	$AgeByMonths = $_POST['age_by_months'];
	$sex = $_POST['sex'];
	$weight = $_POST['weight'];
	$height = $_POST['height'];

	$wfa = weightForAge($AgeByMonths, $sex, $weight);
	$hfa = heightForAge($AgeByMonths, $sex, $height);
	$wfh = weightForHeight($weight, $sex, $height);

	$flag = $function->UpdateChild($_POST, $wfa, $hfa, $wfh, $child_id);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #ff6347  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa-solid fa-circle-check'></i> &nbsp Child data has been Updated! </center> </div><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ff6347; color:white; border: solid #ff6347  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa-solid fa-circle-exclamation'></i> &nbsp Something went wrong! </center> </div><br>");
	}
	header("Location: children?id=" . $_SESSION['rhu_id']);
	exit();
}

//Delete Child
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-delete-child'])) {

	if (isset($_POST['child_id'])) {
		$child_id = $_POST['child_id'];
		$flag = $function->DeleteChild($child_id);
		if ($flag == 1) {
			Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #ff6347  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa-solid fa-circle-check'></i> &nbsp Child data has been Deleted! </center> </div><br>");
		} else {
			Session::set("msg", "<div style='background-color: #ff6347; color:white; border: solid #ff6347  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa-solid fa-circle-exclamation'></i> &nbsp Something went wrong! </center> </div><br>");
		}
	} else {
		Session::set("msg", "<div style='background-color: #ff6347; color:white; border: solid #ff6347  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa-solid fa-circle-exclamation'></i> &nbsp Invalid Request! </center> </div><br>");
	}
	header("Location: children?id=" . $_SESSION['rhu_id']);
	exit();
}

//Delete Child History
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-delete-child-history'])) {

	if (isset($_POST['record_id'])) {
		$child_id = $_POST['child_id'];
		$record_id = $_POST['record_id'];
		$flag = $function->DeleteChildHistory($record_id, $child_id);
		if ($flag == 1) {
			Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #ff6347  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa-solid fa-circle-check'></i> &nbsp Child History has been Deleted! </center> </div><br>");
		} else {
			Session::set("msg", "<div style='background-color: #ff6347; color:white; border: solid #ff6347  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa-solid fa-circle-exclamation'></i> &nbsp Something went wrong! </center> </div><br>");
		}
	} else {
		Session::set("msg", "<div style='background-color: #ff6347; color:white; border: solid #ff6347  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa-solid fa-circle-exclamation'></i> &nbsp Invalid Request! </center> </div><br>");
	}
	header("Location: children?id=" . $_SESSION['rhu_id']);
	exit();
}

//Import CSV Child
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-upload-file-children'])) {

	$rhu_id = $_POST['rhu_id'];
	$barangay = $_POST['barangay_text'];
	$municipality = $_POST['city_text'];
	$province = $_POST['province_text'];
	$region = $_POST['region_text'];
	$year = $_POST['year'];
	$latitude = "";
	$longitude = "";
	$CSVfile = $_FILES['csvFile']['tmp_name'];
	$fileMimeType = mime_content_type($CSVfile);

	if ($fileMimeType !== 'text/plain' && $fileMimeType !== 'text/csv') {
		Session::set("msg", "<div style='background-color: #ff6347; color:white; border: solid #ff6347  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa-solid fa-circle-exclamation'></i> &nbsp Invalid file type! </center> </div><br>");
		header("Location: children-upload-file?id=" . $_SESSION['rhu_id']);
		exit();
	}

	$flag = $function->importCSVFile($CSVfile, $barangay, $municipality, $province, $region, $year, $latitude, $longitude, $rhu_id);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #ff6347  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa-solid fa-circle-check'></i> &nbsp Upload file successfully! </center> </div><br>");
		header("Location: children?id=" . $_SESSION['rhu_id']);
		exit();
	} else {
		Session::set("msg", "<div style='background-color: #ff6347; color:white; border: solid #ff6347  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa-solid fa-circle-exclamation'></i> &nbsp Something went wrong! </center> </div><br>");
		header("Location: children-upload-file?id=" . $_SESSION['rhu_id']);
		exit();
	}
}

//log in rhu
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-rhu-login'])) {
	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);

	// Invoke function with sanitized inputs
	$flag = $function->RHULogin($username, $password);
	if ($flag == 1) {
		// Set success message
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #ff6347  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa-solid fa-circle-check'></i> &nbsp Log in Successfully! </center> </div><br>");
		header("Location: index?id=" . $_SESSION['rhu_id']);
		exit();

	} else if ($flag == 2) {
		// Set success message
		Session::set("msg", "<div style='background-color: #ff6347; color:white; border: solid #ff6347  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa-solid fa-circle-exclamation'></i> &nbsp Incorrect Password! </center> </div><br>");
		include 'login.php';
		exit();

	} else {
		// Set error message
		Session::set("msg", "<div style='background-color: #ff6347; color:white; border: solid #ff6347  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa-solid fa-circle-exclamation'></i> &nbsp Username does not Exist! </center> </div><br>");
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
		header("Location: index.php?id=".$_SESSION['rhu_id']);
		exit();

	}
	

}

else {
	header("Location: ../index");
	exit();
}
