<?php
include '../function.php';
include_once '../session.php';
require_once ('../dompdf/autoload.inc.php');
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
        Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Log in Successfully! </center> </div><br>");
		header("Location: index.php");
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
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-rankingExportPDF'])) {
    
    
    $html = file_get_contents("rankingExportPDF.html");
    $html .= '<link type="text/css" href="../assets/css/style.min.css"/>';
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf-> render();
    $r = $dompdf->stream('Ranking Malnutrition', array('attachment'=>0));
    if($r){
        Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Download Successfully! </center> </div><br>");
		header("Location: ranking.php");
		exit();
    }else{
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Failed to download file! </center> </div><br>");
		header("Location: ranking.php?error=something-went-wrong");
		exit();
    }
}

else{
	header("Location: ../index.php");
	exit();
}	