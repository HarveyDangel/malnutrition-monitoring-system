<?php
include_once 'core/session.php';
include 'core/function.php';
$function = new Functions;

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $function->logLogoutAction($_SESSION['username']);
}
// Perform any other logout actions like destroying session
Session::init();
session_unset();
session_destroy();

header("Location: index");
?>

