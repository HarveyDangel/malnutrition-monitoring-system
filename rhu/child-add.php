<?php
include 'header.php';
?>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-11 col-lg-11 col-xxl-11">
            <div class="card my-5">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-1 col-md-1">
                    <a href="children.php" class="btn btn-danger rounded-2"><i class="ti ti-arrow-left"></i>
                    </a>
                  </div>
                  <div class="col-lg-11 col-md-11">
                    <h3 class="fw-semibold mt-1">Add Child</h3>
                  </div>
                </div>
                <hr>
                <?php
                  $msg = Session::get("msg");
                  if(isset($msg)){
                    echo $msg;
                    Session::set("msg", NULL);
                  }
                ?> 
                <form action="navigate.php" method="post">
                  <h5 class="fw-semibold">Personal Information</h5>
                  <hr>
                  <div class="row">
                    <div class="mb-3">
                      <label class="form-label">Fullname <span class="fw-normal">(Surname, First name)</span></label>
                      <input type="text" class="form-control" name="name_of_child" aria-describedby="textHelp" required>
                    </div>
                    <div class="mb-3 col-md-4">
                      <label  class="form-label">Belong to IP?</label>
                      <select class="form-select" aria-label="Default select example" name="belong_to_ip" required>
                        <option value="N">No</option>
                        <option value="Y">Yes</option>
                      </select>
                    </div>
                    <div class="mb-3 col-md-4">
                      <label  class="form-label">Sex</label>
                      <select class="form-select" aria-label="Default select example" name="sex" required>
                      <option value="">Select Gender</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                      </select>
                    </div>
                    <div class="mb-3 col-md-4">
                      <label class="form-label">Date Of Birth</label>
                      <input type="date" class="form-control" name="date_of_birth" aria-describedby="textHelp">
                    </div>
                    <div class="mb-3 col-md-6">
                      <label class="form-label">Date Last Measured</label>
                      <input type="date" class="form-control" name="date_last_measured" aria-describedby="textHelp" required>
                    </div>
                    <div class="mb-3 col-md-6">
                      <label  class="form-label">Age by Months</label>
                      <input type="number" class="form-control" name="age_by_months" value="" aria-describedby="textHelp" readonly>
                    </div>
                  </div>
                  <br>
                  <h5 class="fw-semibold">Address</h5>
                  <hr>
                  <div class="row">
                    <div class="mb-3 col-md-4">
                      <label class="form-label">Region</label>
                      <input type="text" class="form-control" name="region"  value="8" aria-describedby="textHelp" readonly>
                    </div>
                    <div class="mb-3 col-md-4">
                      <label class="form-label">Province</label>
                      <input type="text" class="form-control" name="province"  value="Biliran" aria-describedby="textHelp" readonly>
                    </div>
                    <div class="mb-3 col-md-4">
                      <label  class="form-label">Municipality</label>
                      <select class="form-select" aria-label="Default select example" name="municipality" required>
                        <option value="Almeria">Almeria</option>
                        <option value="Biliran">Biliran</option>
                        <option value="Cabucgayan">Cabucgayan</option>
                        <option value="Caibiran">Caibiran</option>
                        <option value="Culaba">Culaba</option>
                        <option value="Kawayan">Kawayan</option>
                        <option value="Maripipi">Maripipi</option>
                        <option value="Naval">Naval</option>
                      </select>
                    </div>
                    <div class="mb-3 col-md-4">
                      <label  class="form-label">Barangay</label>
                      <input type="text" class="form-control" name="barangay" aria-describedby="textHelp" required>
                    </div>
                    <div class="mb-3 col-md-4">
                      <label  class="form-label">Barangay PSGC</label>
                      <input type="number" class="form-control" name="psgc" aria-describedby="textHelp" required>
                    </div>
                    <div class="mb-3 col-md-4">
                      <label  class="form-label">Purok</label>
                      <input type="text" class="form-control" name="purok" aria-describedby="textHelp" required>
                    </div>
                  </div>
                  <br>
                  <h5 class="fw-semibold">Mother/Caregiver Information</h5>
                  <hr>
                  <div class="row">
                    <div class="">
                      <label class="form-label">Fullname <span class="fw-normal">(Surname, First name)</span></label>
                      <input type="text" class="form-control" name="name_of_caregiver" aria-describedby="textHelp" required>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="text-center p-2">
                      <button type="submit" name="btn-add-child" class="btn btn-primary rounded-2 w-25">
                      Save</button>
                    </div>
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
</body>

<?php
include 'footer.php';
?>