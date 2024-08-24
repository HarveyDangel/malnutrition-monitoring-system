<?php
include 'header.php';
?>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-11 col-lg-11 col-xxl-12">
            <div class="card my-5">
              <div class="card-body">
              <a href="beneficiary.php" class="btn btn-primary rounded-2 ">Back</a>
              <hr>
                <a href="" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/PHO logo.png" width="100" alt="PHO">
                </a>
                <p class="text-center fw-semibold">Add Beneficiary</p>
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
                    <div class="mb-3 col-4">
                      <label class="form-label">Firstname</label>
                      <input type="text" class="form-control" name="b_firstname" aria-describedby="textHelp" required>
                    </div>
                    <div class="mb-3 col-4">
                      <label class="form-label">Middlename</label>
                      <input type="text" class="form-control" name="b_middlename" aria-describedby="textHelp">
                    </div>
                    <div class="mb-3 col-4">
                      <label class="form-label">Lastname</label>
                      <input type="text" class="form-control" name="b_lastname" aria-describedby="textHelp" required>
                    </div>
                    <div class="mb-3 col-4">
                      <label  class="form-label">Suffix</label>
                      <input type="text" class="form-control" name="suffix" aria-describedby="textHelp">
                    </div>
                    <div class="mb-3 col-4">
                      <label  class="form-label">Age by Months</label>
                      <input type="number" class="form-control" name="age_by_months" aria-describedby="textHelp" required>
                    </div>
                    <div class="mb-3 col-4">
                      <label  class="form-label">Gender</label>
                      <select class="form-select" aria-label="Default select example" name="gender" required>
                      <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                    <div class="mb-3 col-4">
                      <label class="form-label">Birthdate</label>
                      <input type="date" class="form-control" name="birthdate" aria-describedby="textHelp">
                    </div>
                    <div class="mb-3 col-4">
                      <label class="form-label">Height</label>
                      <input type="number" class="form-control" name="height" aria-describedby="textHelp" required>
                    </div>
                    <div class="mb-3 col-4">
                      <label for="exampleInputtext1" class="form-label">Weight</label>
                      <input type="number" class="form-control" name="weight" aria-describedby="textHelp" required>
                    </div>
                    <div class="mb-3 col-4">
                      <label class="form-label">Date Measured</label>
                      <input type="date" class="form-control" name="date_measured" aria-describedby="textHelp" required>
                    </div>
                    <div class="mb-3 col-4">
                      <label class="form-label">BMI</label>
                      <input type="number" class="form-control" name="bmi" aria-describedby="textHelp" value="13.5" readonly>
                    </div>
                    <div class="mb-3 col-4">
                      <label class="form-label">Nutritional Status</label>
                      <input type="name" class="form-control" name="nutritional_status" value="Underweight" aria-describedby="textHelp" readonly>
                    </div>
                  </div>
                  <br>
                  <h5 class="fw-semibold">Address</h5>
                  <hr>
                  <div class="row">
                    <div class="mb-3 col-4">
                      <label class="form-label">Province</label>
                      <input type="text" class="form-control" name="province"  value="Biliran" aria-describedby="textHelp" readonly>
                    </div>
                    <div class="mb-3 col-4">
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
                    <div class="mb-3 col-4">
                      <label  class="form-label">Barangay</label>
                      <input type="select" class="form-control" name="barangay" aria-describedby="textHelp" required>
                    </div>
                  </div>
                  <br>
                  <h5 class="fw-semibold">Parent/Guardian Information</h5>
                  <hr>
                  <div class="row">
                    <div class="mb-3 col-4">
                      <label class="form-label">Firstname</label>
                      <input type="text" class="form-control" name="p_firstname" aria-describedby="textHelp" required>
                    </div>
                    <div class="mb-3 col-4">
                      <label class="form-label">Middlename</label>
                      <input type="text" class="form-control" name="p_middlename" aria-describedby="textHelp">
                    </div>
                    <div class="mb-3 col-4">
                      <label class="form-label">Lastname</label>
                      <input type="text" class="form-control" name="p_lastname" aria-describedby="textHelp" required>
                    </div>
                    <div class="mb-3 col-4">
                      <label class="form-label">Suffix</label>
                      <input type="text" class="form-control" name="p_suffix" aria-describedby="textHelp">
                    </div>
                    <div class="mb-3 col-4">
                      <label class="form-label">Age</label>
                      <input type="number" class="form-control" name="p_age" aria-describedby="textHelp" required>
                    </div>
                    <div class="mb-3 col-4">
                      <label class="form-label">Gender</label>
                      <select class="form-select" aria-label="Default select example" name="p_gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                    <div class="mb-3 col-4">
                      <label class="form-label">Occupation</label>
                      <input type="text" name="p_occupation" class="form-control" aria-describedby="textHelp" required>
                    </div>
                  </div>
                  <br>
                  <button type="submit" name="btn-add-beneficiary" class="btn btn-primary rounded-2 float-end">Save</button>

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