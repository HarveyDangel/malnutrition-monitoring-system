<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Provincial Health Office</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="style.css">

  <style>
    @import url(//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900);

    * {
      margin: 0;
      padding: 0;
    }

    #map {
      height: 570px;
    }

    body {
      min-height: 100vh;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      font-family: 'Roboto', sans-serif;
    }

    nav {
      background-color: whitesmoke;
      box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.1);
      position: fixed;
      width: 100%;
    }

    nav ul {
      width: 100%;
      list-style: none;
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }

    nav li {
      height: 50px;
    }

    nav a {
      height: 100%;
      padding: 0 30px;
      text-decoration: none;
      display: flex;
      align-items: center;
      color: black;
    }

    nav a:hover {
      background-color: #e0e0e0;
    }

    nav li:first-child {
      margin-right: auto;
    }

    .sidebar {
      position: fixed;
      top: 0;
      right: 0;
      height: 100vh;
      width: 250px;
      background-color: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(12px);
      box-shadow: -10px 0 10px rgba(0, 0, 0, 0.1);
      list-style: none;
      display: none;
      flex-direction: column;
      align-items: flex-start;
      justify-content: flex-start;
    }

    .sidebar li {
      width: 100%;
    }

    .sidebar a {
      width: 100%;
    }

    .menu-button {
      display: none;
    }

    @media(max-width: 800px) {
      .hideOnMobile {
        display: none;
      }

      .menu-button {
        display: block;
      }
    }

    @media(max-width: 400px) {
      .sidebar {
        width: 100%;
      }
    }

   
    .logo {
      max-width: 85px;
      max-height: 85px;
      width: 100%;
      height: 100%;

    }
    
  </style>
</head>

<body>
  <nav class="flex ">
    <ul class="sidebar">
      <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26">
            <path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z" />
          </svg></a></li>
      <li><a href="index.php">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="login-page.php">Login</a></li>
    </ul>
    <ul class="mb-0">
      <li><a href="http://www.gov.ph/"><strong>GOVPH</strong></a></li>
      <li class="hideOnMobile"><a href="index.php">Home</a></li>
      <li class="hideOnMobile"><a href="#about">About</a></li>
      <li class="hideOnMobile"><a href="#contact">Contact</a></li>
      <li class="hideOnMobile"><a href="login-page.php">Login</a></li>
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

  <header class="pt-5 w-100">
    <div class="flex d-flex flex-row ps-4 pt-3">
      <img src="../assets/images/logos/Biliran-Provincial-Seal.png" alt="Biliran Official Seal" class="me-2 logo">
      <img src="../assets/images/logos/PHO logo.png" alt="Biliran PHO Logo" class="logo">
      <div class="flex d-flex flex-column flex-nowrap ms-2">
        <h5 class="mb-1">Republic of the Philippines</h5>
        <h4 class="mb-1">Province of Biliran</h4>
        <h3 class="fw-semibold mb-0">Provincial Health Office</h3>
      </div>
    </div>
  </header>