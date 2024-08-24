<?php
include 'header.php';
$doh_id = $_GET['doh_id'];
$doh = $function->GetDOHInfo($doh_id);
?>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-11 col-lg-11 col-xxl-11">
            <div class="card my-5">
              <div class="card-body">
                <?php
                if ($doh) {
                  $doh_id = $doh->doh_id;
                  $fname = $doh->doh_fname;
                  $lname = $doh->doh_lname;
                  $email = $doh->doh_email;
                  $username = $doh->doh_username;
                ?>
                  <div class="row">
                    <div class="col-lg-1 col-md-1">
                      <a href="doh.php?username=<?= $_SESSION['username'];?>.php" class="btn btn-danger rounded-2"><i class="ti ti-arrow-left"></i>
                      </a>
                    </div>
                    <div class="col-lg-11 col-md-11">
                      <h3 class="fw-semibold mt-1">Edit DOH Account</h3>
                    </div>
                  </div>
                  <?php
                  $msg = Session::get("msg");
                  if (isset($msg)) {
                    echo $msg;
                    Session::set("msg", NULL);
                  }
                  ?>
                  <hr>
                  <form action="navigate.php?doh_id=<?= $doh_id; ?>" method="post">
                    <h5 class="fw-semibold">Personal Information</h5>
                    <hr>
                    <div class="row">
                      <div class="mb-3 col-lg-6 col-md-6">
                        <label for="fname" class="form-label fw-light">Firstname</label>
                        <input type="text" name="fname" class="form-control" id="fname" aria-describedby="textHelp" required value="<?= ($fname) ? $fname : ''; ?>">
                      </div>
                      <div class="mb-3 col-lg-6 col-md-6">
                        <label for="lname" class="form-label fw-light">Lastname</label>
                        <input type="text" name="lname" class="form-control" id="lname" aria-describedby="textHelp" required value="<?= ($lname) ? $lname : ''; ?>">
                      </div>

                    </div>
                    <h5 class="fw-semibold">Account Information</h5>
                    <hr>
                    <div class="row">
                      <div class="mb-3 col-lg-6 col-md-6">
                        <label for="email" class="form-label fw-light">Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="textHelp" required value="<?= ($email) ? $email : ''; ?>">
                      </div>
                      <div class="mb-3 col-lg-6 col-md-6">
                        <label for="username" class="form-label fw-light">Username</label>
                        <input type="text" name="username" class="form-control" id="username" aria-describedby="textHelp" required value="<?= ($username) ? $username : ''; ?>">
                      </div>
                      <div class="mb-3 col-lg-6 col-md-6">
                        <label for="password" class="form-label fw-light">Password</label>
                        <input type="password" name="password" class="form-control password" id="password" aria-describedby="textHelp" required>
                      </div>
                      <div class="mb-3 col-lg-6 col-md-6">
                        <label for="rptpassword" class="form-label fw-light">Confirm Password</label>
                        <input type="password" name="rptpassword" class="form-control password" id="rptpassword" aria-describedby="textHelp" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="text-center p-2">
                        <button type="submit" name="btn-edit-doh" class="btn btn-primary rounded-2 w-25">
                          Save</button>
                      </div>
                    </div>
                  </form>
              </div>
            </div>
          </div>
        <?php
                }
        ?>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php
include 'footer.php';
?>