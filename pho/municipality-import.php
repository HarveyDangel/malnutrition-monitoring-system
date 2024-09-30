<?php
include 'header.php';
?>

<main>
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-1 col-md-1">
          <a href="children.php" class="btn btn-danger rounded-2"><i class="ti ti-arrow-left"></i>
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
        <h5 class="fw-semibold">Supported File <span class="fw-normal">(.csv)</span></h5>
        <hr>
        <div class="row">
          <div class="mb-3">
            <input type="file" class="form-control" name="csvFile" id="csvFile" aria-describedby="textHelp" accept=".csv" required>
          </div>
        </div>
        <div class="row">
          <div class="text-center p-2">
            <button type="submit" name="btn-import-address" class="btn btn-primary rounded-2 w-25">
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