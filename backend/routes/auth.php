<?php
require_once __DIR__ . '/../app/controller/AuthController.php';

$auth = new AuthController();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $auth->login($_POST);
}

// if ($_GET['action'] === 'login') {
//    //  $email = $_POST['email'];
//    //  $password = $_POST['password'];
//    $data = $_POST;
//     echo json_encode($auth->login($data));
// }

// if ($_GET['action'] === 'logout') {
//     echo json_encode($auth->logout());
// }

// if ($_GET['action'] === 'register') {
//    //  $name = $_POST['name'];
//    //  $email = $_POST['email'];
//    //  $password = $_POST['password'];
//    $data = $_POST;
//     echo json_encode($auth->register($data));
// }
