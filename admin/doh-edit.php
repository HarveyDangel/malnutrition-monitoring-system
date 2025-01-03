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
                  $fname = $doh->fname;
                  $mname = $doh->mname;
                  $lname = $doh->lname;
                  $suffix = $doh->suffix;
                  $sex = $doh->sex;
                  $province = $doh->province;
                  $region = $doh->region;
                  $email = $doh->email;
                  $username = $doh->username;
                ?>
                  <div class="row">
                    <div class="col-lg-1 col-md-1">
                      <a href="doh.php?username=<?= $_SESSION['username']; ?>.php" class="btn btn-primary rounded-2"><i class="ti ti-arrow-left"></i>
                      </a>
                    </div>
                    <div class="col-lg-11 col-md-11">
                      <h3 class="fw-semibold mt-1">Edit DOH Account</h3>
                    </div>
                  </div>
                  <?php
                  $msg = Session::get("msg");
                  if (isset($msg)) {
                    echo '<div id="flash-message">' . $msg . '</div>';
                    Session::set("msg", NULL);
                  }
                  ?>
                  <hr>
                  <form action="navigate.php?doh_id=<?= $doh_id; ?>" method="post">
                    <h5 class="fw-semibold">Personal Information</h5>
                    <hr>
                    <div class="row">
                      <div class="mb-3 col-lg-3 col-md-6">
                        <label class="form-label fw-light">Firstname <span style="color:red">*</span></label>
                        <input type="text" name="fname" class="form-control" aria-describedby="textHelp" required value="<?= ($fname) ? $fname : ''; ?>">
                      </div>
                      <div class="mb-3 col-lg-3 col-md-6">
                        <label class="form-label fw-light">Middlename</label>
                        <input type="text" name="mname" class="form-control" aria-describedby="textHelp" required value="<?= ($mname) ? $mname : ''; ?>">
                      </div>
                      <div class="mb-3 col-lg-3 col-md-6">
                        <label class="form-label fw-light">Lastname <span style="color:red">*</span></label>
                        <input type="text" name="lname" class="form-control" aria-describedby="textHelp" required value="<?= ($lname) ? $lname : ''; ?>">
                      </div>
                      <div class="mb-3 col-lg-3 col-md-6">
                        <label for="suffix" class="form-label fw-light">Suffix</label>
                        <select class="form-select" name="suffix" aria-label="Default select example">
                          <option value="<?= ($suffix) ? $suffix : ''; ?>"><?= ($suffix) ? $suffix : ''; ?></option>
                          <option value="Sr.">Sr.</option>
                          <option value="Jr.">Jr.</option>
                          <option value="I.">I</option>
                          <option value="II">II</option>
                          <option value="III">III</option>
                          <option value="IV">IV</option>
                          <option value="V">V</option>
                          <option value="VI">VI</option>
                          <option value="VII">VII</option>
                          <option value="VIII">VIII</option>
                          <option value="IX">IX</option>
                          <option value="X">X</option>
                        </select>
                      </div>
                      <div class="mb-3 col-lg-4 col-md-4">
                        <label for="sex" class="form-label fw-light">Sex <span style="color:red">*</span></label>
                        <select class="form-select" name="sex" aria-label="Default select example" required>
                          <option value="<?= ($sex) ? $sex : ''; ?>"><?= ($sex) ? $sex : ''; ?></option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                      <div class="mb-3 col-lg-4 col-md-4">
                        <label class="form-label fw-light">Province <span style="color:red">*</span></label>
                        <input type="text" name="province" class="form-control" aria-describedby="textHelp" value="<?= ($province) ? $province : ''; ?>" required readonly>
                      </div>
                      <div class="mb-3 col-lg-4 col-md-4">
                        <label class="form-label fw-light">Region <span style="color:red">*</span></label>
                        <input type="text" name="region" class="form-control" aria-describedby="textHelp" value="<?= ($region) ? $region : ''; ?>" required readonly>
                      </div>

                    </div>
                    <h5 class="fw-semibold">Account Information</h5>
                    <hr>
                    <div class="row">
                      <div class="mb-3 col-lg-6 col-md-6">
                        <label for="email" class="form-label fw-light">Email <span style="color:red">*</span></label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="textHelp" required value="<?= ($email) ? $email : ''; ?>">
                      </div>
                      <div class="mb-3 col-lg-6 col-md-6">
                        <label for="username" class="form-label fw-light">Username <span style="color:red">*</span></label>
                        <input type="text" name="username" class="form-control" id="username" aria-describedby="textHelp" required value="<?= ($username) ? $username : ''; ?>">
                      </div>
                      <div class="mb-3 col-lg-6 col-md-6">
                      <label for="password" class="form-label">Password <span style="color:red">*</span></label>
                      <input type="password" name="password" class="form-control password" id="myInput" aria-describedby="textHelp" required>
                    </div>
                    <div class="mb-3 col-lg-6 col-md-6">
                      <label for="rptpassword" class="form-label">Confirm Password <span style="color:red">*</span></label>
                      <input type="password" name="rptpassword" class="form-control password" id="rptpassword" aria-describedby="textHelp" required>
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
</body>

<?php
include 'footer.php';
?>