<?php
include 'header.php';
$child_id = $_GET['child_id'];
$child = $function->GetChildInfo($child_id);
?>

<main class="">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-1 col-md-1">
          <a href="children.php" class="btn btn-danger rounded-2"><i class="ti ti-arrow-left"></i>
          </a>
        </div>
        <?php
        if ($child) {
          $child_id = $child->child_id;
          $purok = $child->purok;
          $name_of_caregiver = $child->name_of_caregiver;
          $name_of_child = $child->name_of_child;
          $belong_to_ip = $child->belong_to_ip;
          $sex = $child->sex;
          $date_of_birth = $child->date_of_birth;
          $age_by_months = $child->age_by_months;
          $date_last_measured = $child->date_last_measured;
          $weight = $child->weight;
          $height = $child->height;
          $nutritional_status_WFA = $child->nutritional_status_WFA;
          $nutritional_status_HFA = $child->nutritional_status_HFA;
          $nutritional_status_WFH = $child->nutritional_status_WFH;
          $barangay = $child->barangay;
          $municipality = $child->municipality;
          $year = $child->year;
        ?>
          <div class="col-lg-11 col-md-11">
            <h3 class="fw-semibold mt-1">Edit Child</h3>
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
      <form action="navigate.php?child_id=<?= $child_id; ?>" method="post">
        <div class="mb-3 col-md-3">
          <h5 class="form-label">OPT Year</h5>
          <input type="number" class="form-control" name="year" value="<?= ($year) ? $year : ''; ?>" aria-describedby="textHelp" readonly>
        </div>
        <hr>
        <h5 class="fw-semibold">Personal Information</h5>
        <hr>
        <div class="row">
          <div class="mb-3">
            <label class="form-label">Fullname <span class="fw-normal">(Surname, First name)</span></label>
            <input type="text" class="form-control" name="name_of_child" aria-describedby="textHelp" value="<?= ($name_of_child) ? $name_of_child : ''; ?>" required>
          </div>
          <div class="mb-3 col-md-3">
            <label class="form-label">Belong to IP?</label>
            <select class="form-select" aria-label="Default select example" name="belong_to_ip" required>
              <option value="<?= ($belong_to_ip) ? $belong_to_ip : ''; ?>"><?= ($belong_to_ip) ? $belong_to_ip : ''; ?></option>
              <option value="No">No</option>
              <option value="Yes">Yes</option>
            </select>
          </div>
          <div class="mb-3 col-md-3">
            <label class="form-label">Sex</label>
            <select class="form-select" aria-label="Default select example" name="sex" required>
              <option value="<?= ($sex) ? $sex : ''; ?>"><?= ($sex) ? $sex : ''; ?></option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          <div class="mb-3 col-md-3">
            <label class="form-label">Date Of Birth</label>
            <input type="date" class="form-control" name="date_of_birth" aria-describedby="textHelp" value="<?= ($date_of_birth) ? $date_of_birth : ''; ?>" required>
          </div>
          <div class="mb-3 col-md-3">
            <label class="form-label">Age by Months</label>
            <input type="number" class="form-control" name="age_by_months" value="<?= ($age_by_months) ? $age_by_months : ''; ?>" aria-describedby="textHelp" readonly>
          </div>
        </div>
        <br>
        <h5 class="fw-semibold">Nutritional Status</h5>
        <hr>
        <div class="row">
          <div class="mb-3 col-md-4">
            <label class="form-label">Date Last Measured</label>
            <input type="date" class="form-control" name="date_last_measured" aria-describedby="textHelp" value="<?= ($date_last_measured) ? $date_last_measured : ''; ?>" required>
          </div>
          <div class="mb-3 col-md-4">
            <label class="form-label">Weight</label>
            <input type="number" class="form-control" name="weight" aria-describedby="textHelp" value="<?= ($weight) ? $weight : ''; ?>" required>
          </div>
          <div class="mb-3 col-md-4">
            <label class="form-label">Height</label>
            <input type="number" class="form-control" name="height" aria-describedby="textHelp" value="<?= ($height) ? $height : ''; ?>" required>
          </div>
          <div class="mb-3 col-md-4">
            <label class="form-label">WFA</label>
            <input type="text" class="form-control" name="nutritional_status_WFA" aria-describedby="textHelp" value="<?= ($nutritional_status_WFA) ? $nutritional_status_WFA : ''; ?>" required readonly>
          </div>
          <div class="mb-3 col-md-4">
            <label class="form-label">HFA</label>
            <input type="text" class="form-control" name="nutritional_status_HFA" aria-describedby="textHelp" value="<?= ($nutritional_status_HFA) ? $nutritional_status_HFA : ''; ?>" required readonly>
          </div>
          <div class="mb-3 col-md-4">
            <label class="form-label">WFL/H</label>
            <input type="text" class="form-control" name="nutritional_status_WFH" aria-describedby="textHelp" value="<?= ($nutritional_status_WFH) ? $nutritional_status_WFH : ''; ?>" required readonly>
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
              <option value="<?= ($municipality) ? $municipality : ''; ?>"><?= ($municipality) ? $municipality : ''; ?></option>
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
            <input type="text" class="form-control" name="barangay" aria-describedby="textHelp" value="<?= ($barangay) ? $barangay : ''; ?>" required>
          </div>
          <!-- <div class="mb-3 col-md-4">
            <label class="form-label">Barangay PSGC</label>
            <input type="number" class="form-control" name="psgc" aria-describedby="textHelp" required>
          </div> -->
          <div class="mb-3 col-md-6">
            <label class="form-label">Purok</label>
            <input type="text" class="form-control" name="purok" aria-describedby="textHelp" value="<?= ($purok) ? $purok : ''; ?>" required>
          </div>
        </div>
        <br>
        <h5 class="fw-semibold">Mother/Caregiver Information</h5>
        <hr>
        <div class="row">
          <div class="mb-3">
            <label class="form-label">Fullname <span class="fw-normal">(Surname, First name)</span></label>
            <input type="text" class="form-control" name="name_of_caregiver" aria-describedby="textHelp" value="<?= ($name_of_caregiver) ? $name_of_caregiver : ''; ?>" required>
          </div>
        </div>
        <hr>
        <div class="row" hidden>
          <input type="text" class="form-control" name="rhu_id" aria-describedby="textHelp" required readonly
            value="<?= $_SESSION['rhu_id']; ?>">
        </div>
        <div class="row">
          <div class="text-center p-2">
            <button type="submit" name="btn-edit-child" class="btn btn-primary rounded-2 w-25">
              Save</button>
          </div>
        </div>
    </div>
    </form>
  <?php
        }
  ?>
  </div>
</main>




<?php
include 'footer.php';
?>