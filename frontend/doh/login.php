<?php
include_once '../session.php';
Session::init();
if (isset($_SESSION['username'])) {
  if ($_SESSION['role'] === 'doh') {
    header("Location: index.php?username=" . $_SESSION['username']);
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Malnutrition Management System</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/PHO logo.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-sm-8 col-md-5 col-lg-4 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/PHO logo.png" width="100px" height="100px">
                  <br>
                  <br>
                  <h4 class="fw-semibold text-wrap">Department Of Health <span class="fw-normal">(DOH)</span></h4>
                </a>
                <p class="text-center"></p>
                <?php
                $msg = Session::get("msg");
                if (isset($msg)) {
                  echo '<div id="flash-message">' . $msg . '</div>';
                  Session::set("msg", NULL);
                }
                ?>
                <form method="post" action="navigate.php">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username..." value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>" required>
                  </div>
                  <div class="mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password..." value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''; ?>" required>
                  </div>
                  <div class="mb-3 col-lg-6 col-md-6">
                      <input type="checkbox" id="showPassword" onclick="togglePassword()"> Show Password
                    </div>

                    <script>
                      function togglePassword() {
                        var x = document.getElementById("password");
                        
                        if (x.type === "password") {
                          x.type = "text";
                        } else {
                          x.type = "password";
                        }
                      }
                    </script>
                  <div class="text-center flex d-flex flex-row justify-content-between mb-3">
                    <div class="w-50 pe-2">
                      <button type="submit" name="btn-doh-login" class="btn btn-primary w-100 py-8 fs-4 rounded-5">Log in</button>
                    </div>
                    <div class="w-50 ps-2">
                      <a href="../index" class="btn btn-outline-primary w-100 py-8 fs-4 rounded-5">Cancel</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>