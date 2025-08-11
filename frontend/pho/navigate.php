<?php
include '../function.php';
include_once '../session.php';
require_once ('../packages/dompdf/autoload.inc.php');
use Dompdf\Dompdf;

Session::init();

$function = new Functions();
$dompdf = new Dompdf();

//log in pho
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-pho-login'])) {
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);

    // Invoke SuperLogin function with sanitized inputs
    $flag = $function->PHOLogin($username , $password);
    if ($flag == 1) {
        // Set success message
		$_SESSION["username"] = $_POST["username"];	
        Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-circle-check me-2'></i>Log in Successfully! </center> </div><br>");
		header("Location: index?id=". $_SESSION['pho_id']);
		exit();
    } else if ($flag == 2) {
        // Set success message
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>&nbsp Incorrect password! </center> </div><br>");
		include 'login.php';
		exit();
        
    } else {
        // Set error message
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Username does not exist! </center> </div><br>");
		include 'login.php';
		exit();
    }
    // Redirect user
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-rankingExportPDF'])) {
    
    
    $html = file_get_contents("rankingExportPDF.html");
    $html .= '<link type="text/css" href="../assets/css/style.min.css"/>';
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf-> render();
    $r = $dompdf->stream('Ranking Malnutrition', array('attachment'=>0));
    if($r){
        Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-circle-check'></i>Download Successfully! </center> </div><br>");
		header("Location: ranking.php");
		exit();
    }else{
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Failed to download file! </center> </div><br>");
		header("Location: ranking.php?error=something-went-wrong");
		exit();
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-import-address'])) {

	$CSVfile = $_FILES['csvFile']['tmp_name'];
	$fileMimeType = mime_content_type($CSVfile);

	if ($fileMimeType !== 'text/plain' && $fileMimeType !== 'text/csv') {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-alert-triangle'></i>Invalid File type! </center> </div><br>");
		header("Location: municipality-import.php?id=" . $_SESSION['pho_id']);
		exit();
	}

	$flag = $function->importCSVAddress($CSVfile);
	if ($flag == 1) {
		Session::set("msg", "<script> alert(<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-circle-check'></i> Upload file successfully! </center> </div>, timeout:1000)</script><br>");
		header("Location: municipality.php?id=" . $_SESSION['pho_id']);
		exit();
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-alert-triangle'></i>Something went wrong! </center> </div><br>");
		header("Location: municipality-import.php?id=" . $_SESSION['pho_id']);
		exit();
	}
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
		header("Location: index.php?id=".$_SESSION['pho_id']);
		exit();

	}
	

}

else{
	header("Location: ../403");
	exit();
}	