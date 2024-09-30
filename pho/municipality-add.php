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
        <h3 class="fw-semibold mt-1">Add new Address</h3>
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
      <form action="navigate.php" method="post">
        <h5 class="fw-semibold bg-dark-light p-1 rounded-2 text-white">Address</h5>
        <div class="row">
          <div class="mb-3 col-md-4">
            <label class="form-label">Region</label>
            <input type="text" class="form-control bg-light-primary" name="region" value="8" aria-describedby="textHelp" readonly>
          </div>
          <div class="mb-3 col-md-4">
            <label class="form-label">Province</label>
            <input type="text" class="form-control bg-light-primary" name="province" value="Biliran" aria-describedby="textHelp" readonly>
          </div>
          <div class="mb-3 col-md-4">
            <label class="form-label">Municipality</label>
            <input type="text" class="form-control" name="Municipality" aria-describedby="textHelp" required>
          </div>
          <div class="mb-3 col-md-4">
            <label class="form-label">Barangay</label>
            <input type="text" class="form-control" name="barangay" aria-describedby="textHelp" required>
          </div>
          <div class="mb-3 col-md-4">
            <label class="form-label">Purok</label>
            <input type="text" class="form-control" name="purok" aria-describedby="textHelp" required>
          </div>
          <div class="mb-3 col-md-4">
            <label class="form-label">Barangay PSGC</label>
            <input type="text" class="form-control" name="purok" aria-describedby="textHelp" required>
          </div>
        </div>
        <hr>
        <div class="row" hidden>
          <input type="text" class="form-control" name="pho_id" aria-describedby="textHelp" required readonly
            value="<?= $_SESSION['pho_id']; ?>">
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