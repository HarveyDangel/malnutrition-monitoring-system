<?php
include 'header.php';
?>

<body class="bg-light-gray">
  <?php
  $msg = Session::get("msg");
  if (isset($msg)) {
    echo '<div id="flash-message">' . $msg . '</div>';
    Session::set("msg", NULL);
  }
  ?>
  <!--  Row 1 -->
  <container class="row mt-3">
    <div class="col-lg-3 col-md-6">
      <!-- Municipality Card -->
      <div class="card overflow-hidden">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-3 ps-2 pt-3 align-items-center justify-content-center me-3">
              <i class="ti ti-building-community bg-primary text-white rounded-circle p-3" style="font-size: 40px;"></i>
            </div>
            <div class="col p-1 ms-2">
              <div>
                <h3 class="card-title fw-semibold " style="font-size: 22px;">
                  Region</h3>
              </div>
              <div>
                <h3 class="fw-normal"><?= $_SESSION['region']; ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Municipality Card -->

    <div class="col-lg-3 col-md-6">
      <!-- Barangay Card -->
      <div class="card overflow-hidden">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-3 ps-2 pt-3 align-items-center justify-content-center me-3">
              <i class="ti ti-home bg-info text-white rounded-circle p-3" style="font-size: 40px;"></i>
            </div>
            <div class="col p-1 ms-2">
              <div>
                <h3 class="card-title fw-semibold " style="font-size: 22px;">
                  Province</h3>
              </div>
              <div>
                <h3 class="fw-normal"><?= $_SESSION['province']; ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Barangay card-->

    <div class="col-lg-3 col-md-6">
      <!-- Estimated Population Card -->
      <div class="card overflow-hidden">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-3 ps-2 pt-3 align-items-center justify-content-center me-3">
              <i class="ti ti-users bg-secondary text-white rounded-circle p-3" style="font-size: 40px;"></i>
            </div>
            <div class="col p-1 ms-2">
              <div>
                <h3 class="card-title fw-semibold " style="font-size: 22px;">
                  Est. Popn.</h3>
              </div>
              <div>
                <h3 class="fw-normal">1400</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Barangay card-->

    <div class="col-lg-3 col-md-6">
      <!--Staff card-->
      <div class="card overflow-hidden">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-3 ps-2 pt-3 align-items-center justify-content-center me-3">
              <i class="ti ti-user bg-success text-white rounded-circle p-3" style="font-size: 40px;"></i>
            </div>
            <div class="col p-1 ms-2">
              <div>
                <h3 class="card-title fw-semibold " style="font-size: 22px;">
                  Coverage</h3>
              </div>
              <div>
                <h3 class="fw-normal">80%</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Staff card -->
  </container>
  <!-- End of Row 1 -->



  <?php
  include 'footer.php';

  ?>