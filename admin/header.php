<?php
include_once '../session.php';
Session::init();
include '../function.php';
$function = new Functions();

if (!isset($_SESSION['username']) && !isset($_SESSION['role'])){
  header("Location: login.php");
}
if ($_SESSION['role'] === 'rhu'){
  header("Location: ../rhu/index.php");
}
if ($_SESSION['role'] === 'pho'){
  header("Location: ../pho/index.php");
}
if ($_SESSION['role'] === 'doh'){
  header("Location: ../doh/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Malnutrition Monitoring System</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
  <script src="../assests/js/chloropleth.js"></script>
  <style>
    #map {
      height: 570px;
    }
  </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <br>
        <div class="brand-logo flex d-flex align-items-center justify-content-between text-center">
          <div href="index.php" class="text-nowrap logo-img">
            <img src="../assets/images/logos/PHO logo.png" width="75" alt="" />
            <span class="fw-semibold ps-3 fs-8" style="color:#252525;"><?= $_SESSION['username'];?></span>
          </div>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- <div class="text-center">
          <span class="fw-semibold">PHO</span>
        </div> -->

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar">
          <ul id="sidebarnav">
            <hr>
            <li class="sidebar-item">
              <a class="sidebar-link" href="index.php?username=<?= $_SESSION['username'];?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="report.php?username=<?= $_SESSION['username'];?>" aria-expanded="false">
                <span>
                  <i class="ti ti-book"></i>
                </span>
                <span class="hide-menu">Report</span>
              </a>
            </li>
            <hr>
            <p class="text-center">Users</p>
            <li class="sidebar-item">
              <a class="sidebar-link" href="rhu.php?username=<?= $_SESSION['username'];?>" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">RHU</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="pho.php?username=<?= $_SESSION['username'];?>" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">PHO</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="doh.php?username=<?= $_SESSION['username'];?>" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">DOH</span>
              </a>
            </li>
            <hr>
            <li class="sidebar-item">
              <a class="sidebar-link" href="../logout.php" aria-expanded="false">
                <span>
                  <i class="ti ti-logout"></i>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
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
      <header class="app-header bg-secondary">
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
              <li>
              <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
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
                    <a href="../" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->

      <div class="container-fluid">