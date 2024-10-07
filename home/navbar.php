<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Provincial Health Office</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="../assets/css/navbar.css" />



</head>

<body>
  <nav class="flex py-1">
    <ul class="sidebar">
      <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26">
            <path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z" />
          </svg></a></li>
      <li><a href="index">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
      <li>
        <a href="#" id="servicesDropdown" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">Log in<i class="ti ti-chevron-down ps-2"></i></a>
        <ul class="collapse navbar-collapse flex-column" id="navbarNav">
          <li><a href="../admin/login"><i class="ti ti-user pe-2"></i>Admin</a></li>
          <li><a href="../doh/login"><i class="ti ti-user pe-2"></i>DOH</a></li>
          <li><a href="../pho/login"><i class="ti ti-user pe-2"></i>PHO</a></li>
          <li><a href="../rhu/login"><i class="ti ti-user pe-2"></i>RHU</a></li>
        </ul>
      </li>
    </ul>
    <ul class="mb-0">
      <li><a href="http://www.gov.ph/" class="fs-4"><strong>GOVPH</strong></a></li>
      <li class="hideOnMobile"><a href="index" class="fs-4">Home</a></li>
      <li class="hideOnMobile"><a href="#about" class="fs-4">About</a></li>
      <li class="hideOnMobile"><a href="#contact" class="fs-4">Contact</a></li>
      <!-- <li class="hideOnMobile"><a href="login-page.php" class="fs-5">Login</a></li> -->
      <li class="hideOnMobile nav-item dropdown">
        <a href="#" id="servicesDropdown" data-bs-toggle="dropdown" class="fs-4">Log in<i class="ti ti-chevron-down ps-2"></i></a>
        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
          <li><a class="dropdown-item" href="../admin/login"><i class="ti ti-user pe-2"></i>Admin</a></li>
          <li><a class="dropdown-item" href="../doh/login"><i class="ti ti-user pe-2"></i>DOH</a></li>
          <li><a class="dropdown-item" href="../pho/login"><i class="ti ti-user pe-2"></i>PHO</a></li>
          <li><a class="dropdown-item" href="../rhu/login"><i class="ti ti-user pe-2"></i>RHU</a></li>
        </ul>
      </li>
      <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26">
            <path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z" />
          </svg></a></li>
    </ul>
  </nav>

  <script>
    function showSidebar() {
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'flex'
    }

    function hideSidebar() {
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'none'
    }
  </script>
<!-- style="background-image: url(../assets/images/backgrounds/gradient.jpg);" -->
  <header class="pt-5 px-4 pb-3" style="background-color:#0F5132;" >
    <div class="flex d-flex flex-row ps-4 pt-4">
      <img src="../assets/images/logos/Biliran-Provincial-Seal.png" alt="Biliran Official Seal" class="me-2 logo">
      <img src="../assets/images/logos/PHO logo.png" alt="Biliran PHO Logo" class="logo">
      <div class="flex d-flex flex-column flex-nowrap ms-2">
        <h5 class="mb-1 text-white">Province of Biliran</h5>
        <h4 class="mb-1 text-white">Biliran Provincial Health Office</h4>
        <h3 class="fw-semibold mb-0 text-white">Malnutrition Monitoring System</h3>
      </div>
    </div>
  </header>