<?php
include_once '../session.php';
Session::init();
if (!isset($_SESSION['token'])) {
    header("Location: login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reset Password</title>
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
          <div class="col-sm-8 col-md-5 col-lg-4">
            <div class="card mb-0">
              <div class="card-body">
                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/PHO logo.png" width="100px" height="100px">
                  <br>
                  <br>
                  <h4 class="fw-semibold">Forget Password</h4>
                </a>
                <p class="text-center"></p>
                <?php
                $msg = Session::get("msg");
                if (isset($msg)) {
                  echo '<div id="flash-message">' . $msg . '</div>';
                  Session::set("msg", NULL);
                }
                ?>

                <form  action="navigate.php" method="post">
                  <div class="mb-3">
                    <input type="text" class="form-control bg-light-primary" id="token" name="token" value="<?= $_GET['token'] ? htmlspecialchars($_GET['token']) : ''; ?>"required hidden>
                  </div>
                  <!-- <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control bg-light-primary" id="email" name="email" placeholder="example@email.com" value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; ?>" disabled required>
                  </div> -->
                  <div class="mb-3">
                      <label for="password" class="form-label">Password <span style="color:red">*</span></label>
                      <input type="password" name="password" class="form-control password" id="myInput" aria-describedby="textHelp" value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''; ?>" required>
                    </div>
                    <div class="mb-3">
                      <label for="rptpassword" class="form-label">Confirm Password <span style="color:red">*</span></label>
                      <input type="password" name="rptpassword" class="form-control password" id="rptpassword" aria-describedby="textHelp" value="<?php echo isset($_POST['rptpassword']) ? htmlspecialchars($_POST['rptpassword']) : ''; ?>" required>
                    </div>
                    <div class="mb-3 col-lg-6 col-md-6">
                      <input type="checkbox" id="showPassword" onclick="togglePassword()"> Show Password
                    </div>

                    <script>
                      function togglePassword() {
                        var x = document.getElementById("myInput");
                        var y = document.getElementById("rptpassword");
                        if (x.type === "password") {
                          x.type = "text";
                          y.type = "text";
                        } else {
                          x.type = "password";
                          y.type = "password";
                        }
                      }
                    </script>

                  <div class="text-center flex d-flex flex-row">
                    <button type="submit" name="btn-reset-password" class="btn btn-primary w-50 py-8 fs-4 m-2 rounded-5">Save</button>
                    <a href="login.php" class="btn btn-outline-primary w-50 py-8 fs-4 m-2 rounded-5">Cancel</a>
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