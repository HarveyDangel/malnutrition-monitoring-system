<?php
include_once '../session.php';
Session::init();
include '../function.php';
$function = new Functions();

if (!isset($_SESSION['rhu_id'])) {
  header("Location: login");
}
if ($_SESSION['role'] === 'pho') {
  header("Location: ../pho/index");
}
if ($_SESSION['role'] === 'doh') {
  header("Location: ../doh/index");
}
if ($_SESSION['role'] === 'admin') {
  header("Location: ../admin/index");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Malnutrition Monitoring System</title>
  <!-- ========================================================================================= -->
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <!-- ========================================================================================== -->
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <!-- =========================================================================================== -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
  <!-- =========================================================================================== -->
  <!-- <link rel="stylesheet/text" href="../assets/css/font-awesome.min.css" /> -->
  <!-- =========================================================================================== -->
  <script src="https://kit.fontawesome.com/e625b8f2b8.js" crossorigin="anonymous"></script>
  <!-- =============================================================================================== -->
  <script src="calculateAge.js"></script>
  <!-- ================================================================================================ -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- =================================================================================================== -->
  <link rel="stylesheet" href="../leaflet/leaflet.css" />
  <script src="../leaflet/leaflet.js"></script>
  <!-- ====================================================================================================== -->
  <style>
    #map {
      height: 500px;
      z-index: 1;
    }

    #inputMap {
      height: 400px;
      min-width: 300px;
      max-width: 630px;
      z-index: 0;
      /* height: 200px; 
      min-width: 100px;
      max-width: 200px;
      z-index: 0;*/
    }

    .text-purple {
      color: purple;
    }

    .text-green {
      color: green;
    }

    .text-yellow {
      color: yellow;
    }

    .text-red {
      color: red;
    }

    .text-default {
      color: inherit;
      /* Fallback color */
    }
  </style>
</head>

<body class="bg-light-gray">

  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <br>
        <div class="brand-logo flex d-flex align-items-center justify-content-between">
          <div class="text-nowrap logo-img text-center w-100">
            <img src="../assets/images/logos/PHO logo.png" width="75" alt="PHO logo" class="text-center" />
          </div>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <div class="text-center">
          <h1 class="fw-semibold"><?= $_SESSION['username']; ?></h1>
        </div>

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar">
          <ul id="sidebarnav">
            <hr>
            <!-- <h6 class="text-center my-1 fw-semibold">Home</h6> -->
            <li class="sidebar-item">
              <a class="sidebar-link <?= ($active == 1) ? 'active' : ''; ?>" href="index?id=<?= $_SESSION['rhu_id']; ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link <?= ($active == 2 || $active == 3 || $active == 4 || $active == 5 || $active == 6) ? 'active' : ''; ?>" href="children?id=<?= $_SESSION['rhu_id']; ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-list"></i>
                </span>
                <span class="hide-menu">Children</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="map?id=<?= $_SESSION['rhu_id']; ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-map"></i>
                </span>
                <span class="hide-menu">Map</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="report?id=<?= $_SESSION['rhu_id']; ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-file-report"></i>
                </span>
                <span class="hide-menu">Report</span>
              </a>
            </li>
            <hr>
            <li class="sidebar-item">
              <form action="navigate.php" method="POST">
                <button class="sidebar-link btn w-100" name="btn-log-out" aria-expanded="false"><span>
                    <i class="ti ti-logout"></i>
                  </span> Logout
                </button>
              </form>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header bg-primary">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">

            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

              <!-- <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div> -->
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->

      <div class="container-fluid">