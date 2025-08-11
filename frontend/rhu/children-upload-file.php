<?php
include 'header.php';

$active = 6;
?>

<main>
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-1 col-md-1">
          <a href="children.php" class="btn btn-primary rounded-2"><i class="ti ti-arrow-left"></i>
          </a>
        </div>
        <div class="col-lg-11 col-md-11">
          <h3 class="fw-semibold mt-1">Upload File</h3>
        </div>
      </div>
      <hr>
      <?php
      $msg = Session::get("msg");
      if (isset($msg)) {
        echo '<div id="flash-message">' . $msg . '</div>';
        Session::set("msg", NULL);
      }
      ?>
      <form action="navigate.php?id=<? $_SESSION['rhu_id'] ?>" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="mb-2 ">
            <label class="form-label">Year</label>
            <input type="number" class="form-control" name="year" aria-describedby="textHelp" required>
          </div>
        </div>
        <hr>
        <h5 class="fw-semibold bg-dark-light p-1 rounded-2 text-white">Address</h5>
        <div class="row">
          <div class="mb-3 col-md-6">
            <label class="form-label">Region *</label>
            <select name="region" class="form-control form-control-md" id="region" disabled></select>
            <input type="hidden" class="form-control form-control-md" name="region_text" id="region-text" required>
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">Province *</label>
            <select name="province" class="form-control form-control-md" id="province" disabled></select>
            <input type="hidden" class="form-control form-control-md" name="province_text" id="province-text" required>
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">City/Municipality *</label>
            <select name="municipality" class="form-control form-control-md" id="city"></select>
            <input type="hidden" class="form-control form-control-md" name="city_text" id="city-text" required>
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">Barangay *</label>
            <select name="barangay" class="form-control form-control-md" id="barangay"></select>
            <input type="hidden" class="form-control form-control-md" name="barangay_text" id="barangay-text" required>
          </div>
          <!-- <div class="mb-3 col-md-6">
            <label class="form-label">Purok *</label>
            <input type="text" class="form-control" name="purok" aria-describedby="textHelp" required>
          </div> -->
          <div class="row" hidden>
                    <input type="text" class="form-control" name="rhu_id" aria-describedby="textHelp" required readonly
                        value="<?= $_SESSION['rhu_id']; ?>">
                </div>
        </div>
        <hr>
        <h5 class="fw-semibold">Supported File <span class="fw-normal">(.csv)</span></h5>
        <hr>
        <div class="row">
          <div class="mb-3">
            <input type="file" class="form-control" name="csvFile" id="csvFile" aria-describedby="textHelp" accept=".csv" required>
          </div>
        </div>
        <div class="row">
          <div class="text-center p-2">
            <button type="submit" name="btn-upload-file-children" class="btn btn-primary rounded-2 w-25">
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