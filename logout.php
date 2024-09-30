<?php
  include_once 'session.php';
  Session::init();
  session_destroy();

  header("Location: index.php");
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Malnutrition Management System</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/PHO logo.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>

<body>

  <!--  Body Wrapper
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-sm-8 col-md-5 col-lg-4 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="assets/images/logos/PHO logo.png" width="100px" height="100px">
                  <br>
                  <br>
                  <h3>Log out Successfully </h3>
                </a>
                <div class="text-center">
                  <a href="index.php" class="btn btn-primary w-50 py-8 fs-4 mb-4 rounded-2">Log in again?</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> -->