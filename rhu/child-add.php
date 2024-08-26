<?php
include 'header.php';
?>

<main class="">
  <div class="card">
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
      if (isset($msg)) {
        echo $msg;
        Session::set("msg", NULL);
      }
      ?>
      <form action="navigate.php" method="post">
        <div class="mb-3 col-md-3">
          <h5 class="form-label">OPT Year</h5>
          <input type="number" class="form-control" name="year" value="2024" aria-describedby="textHelp" readonly>
        </div>
        <hr>
        <h5 class="fw-semibold">Personal Information</h5>
        <hr>
        <div class="row">
          <div class="mb-3">
            <label class="form-label">Fullname <span class="fw-normal">(Surname, First name)</span></label>
            <input type="text" class="form-control" name="name_of_child" aria-describedby="textHelp" required>
          </div>
          <div class="mb-3 col-md-3">
            <label class="form-label">Belong to IP?</label>
            <select class="form-select" aria-label="Default select example" name="belong_to_ip" required>
              <option value="No">No</option>
              <option value="Yes">Yes</option>
            </select>
          </div>
          <div class="mb-3 col-md-3">
            <label class="form-label">Sex</label>
            <select class="form-select" aria-label="Default select example" name="sex" required>
              <option value="">Select Sex</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          <div class="mb-3 col-md-3">
            <label class="form-label">Date Of Birth</label>
            <input type="date" class="form-control" name="date_of_birth" aria-describedby="textHelp">
          </div>
          <div class="mb-3 col-md-3">
            <label class="form-label">Age by Months</label>
            <input type="number" class="form-control" name="age_by_months" value="10" aria-describedby="textHelp" readonly>
          </div>
        </div>
        <br>
        <h5 class="fw-semibold">Nutritional Status</h5>
        <hr>
        <div class="row">
          <div class="mb-3 col-md-4">
            <label class="form-label">Date Last Measured</label>
            <input type="date" class="form-control" name="date_last_measured" aria-describedby="textHelp" required>
          </div>
          <div class="mb-3 col-md-4">
            <label class="form-label">Weight</label>
            <input type="number" class="form-control" name="weight" aria-describedby="textHelp" required>
          </div>
          <div class="mb-3 col-md-4">
            <label class="form-label">Height</label>
            <input type="number" class="form-control" name="height" aria-describedby="textHelp" required>
          </div>
          <div class="mb-3 col-md-4">
            <label class="form-label">WFA</label>
            <input type="text" class="form-control" name="nutritional_status_WFA" aria-describedby="textHelp" value="normal"  required readonly>
          </div>
          <div class="mb-3 col-md-4">
            <label class="form-label">HFA</label>
            <input type="text" class="form-control" name="nutritional_status_HFA" aria-describedby="textHelp" value="normal" required readonly>
          </div>
          <div class="mb-3 col-md-4">
            <label class="form-label">WFL/H</label>
            <input type="text" class="form-control" name="nutritional_status_WFH" aria-describedby="textHelp" value="normal" required readonly>
          </div>
        </div>
        <br>
        <h5 class="fw-semibold">Address</h5>
        <hr>
        <div class="row">
          <div class="mb-3 col-md-4">
            <label class="form-label">Region</label>
            <input type="text" class="form-control" name="region" value="8" aria-describedby="textHelp" readonly>
          </div>
          <div class="mb-3 col-md-4">
            <label class="form-label">Province</label>
            <input type="text" class="form-control" name="province" value="Biliran" aria-describedby="textHelp" readonly>
          </div>
          <div class="mb-3 col-md-4">
            <label class="form-label">Municipality</label>
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
          <div class="mb-3 col-md-6">
            <label class="form-label">Barangay</label>
            <input type="text" class="form-control" name="barangay" aria-describedby="textHelp" required>
          </div>
          <!-- <div class="mb-3 col-md-4">
            <label class="form-label">Barangay PSGC</label>
            <input type="number" class="form-control" name="psgc" aria-describedby="textHelp" required>
          </div> -->
          <div class="mb-3 col-md-6">
            <label class="form-label">Purok</label>
            <input type="text" class="form-control" name="purok" aria-describedby="textHelp" required>
          </div>
        </div>
        <br>
        <h5 class="fw-semibold">Mother/Caregiver Information</h5>
        <hr>
        <div class="row">
          <div class="mb-3">
            <label class="form-label">Fullname <span class="fw-normal">(Surname, First name)</span></label>
            <input type="text" class="form-control" name="name_of_caregiver" aria-describedby="textHelp" required>
          </div>
        </div>
        <hr>
        <div class="row" hidden>
          <input type="text" class="form-control" name="rhu_id" aria-describedby="textHelp" required readonly
            value="<?= $_SESSION['rhu_id'];?>">
        </div>
        <div class="row">
          <div class="text-center p-2">
            <button type="submit" name="btn-add-child" class="btn btn-primary rounded-2 w-25">
              Save</button>
          </div>
        </div>
    </div>
    </form>
  </div>
</main>




<?php
include 'footer.php';
?>