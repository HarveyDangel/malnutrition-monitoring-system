<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malnutrition Management System</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <link rel="stylesheet" href="style.css">

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #map {
            height: 570px;
        }

        body {
            min-height: 100vh;
            background: url('laptop.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        nav {
            background-color: white;
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
            background-color: #f0f0f0;
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
    </style>
</head>

<body>
    <nav>
        <ul class="sidebar">
            <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26">
                        <path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z" />
                    </svg></a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Information Statistics</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="../logout.php">Log out</a></li>
        </ul>
        <ul class="mb-0">
            <li>
                <p href="#"><strong></strong></p>
            </li>
            <li class="hideOnMobile"><a href="index.php">Home</a></li>
            <li class="hideOnMobile"><a href="#">Information Statistics</a></li>
            <li class="hideOnMobile"><a href="#">About</a></li>
            <li class="hideOnMobile"><a href="#">Contact</a></li>
            <li class="hideOnMobile"><a href="../logout.php">Log out</a></li>
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

    <header class="pt-5 mb-3 ">
        <div class="flex d-flex flex-row ps-5 pt-3">
            <img src="../assets/images/logos/doh-logo.png" alt="" width="95px" height="95px" class="me-2">
            <img src="../assets/images/logos/PHO logo.png" alt="" width="95px" height="95px">
            <div class="flex d-flex flex-column ms-2">
                <h6 class="mb-0">Republic of the Philippines</h6>
                <h4 class="mb-0">Department of Health</h4>
                <h5 class="mb-0">Province of Biliran</h5>
                <h2 class="fw-semibold mb-0">Provincial Health Office</h2>
            </div>
        </div>
    </header>