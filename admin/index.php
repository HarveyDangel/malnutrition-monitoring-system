<?php
include 'header.php';
?>

<body class="bg-light-gray">
  <!--  Row 1 -->
  <?php
  $msg = Session::get("msg");
  if (isset($msg)) {
    echo '<div id="flash-message">' . $msg . '</div>';
    Session::set("msg", NULL);
  }
  ?>
  <container class="row mt-3">

    <div class="col-lg-4 col-md-4">
      <!--Staff card-->
      <?php
      $i = 0;
      $dohs = $function->GetAllDOH();
      if ($dohs) {
        foreach ($dohs as $doh) :
          $doh_id = $doh['doh_id'];
          $i++;
        endforeach;
      }
      ?>

      <div class="card overflow-hidden">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-3 ps-2 pt-3 align-items-center justify-content-center me-3">
              <i class="ti ti-user bg-primary text-white rounded-circle p-3" style="font-size: 40px;"></i>
            </div>
            <div class="col p-1 ms-2">
              <div>
                <h3 class="card-title fw-semibold " style="font-size: 23px;">
                  DHOs</h3>
              </div>
              <div>
                <h3 class="fw-normal"><?= $i; ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Staff card -->
    <div class="col-lg-4 col-md-4">
      <!--Staff card-->
      <?php
      $i = 0;
      $phos = $function->GetAllPHO();
      if ($phos) {
        foreach ($phos as $pho) :
          $pho_id = $pho['pho_id'];
          $i++;
        endforeach;
      }
      ?>

      <div class="card overflow-hidden">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-3 ps-2 pt-3 align-items-center justify-content-center me-3">
              <i class="ti ti-user bg-primary text-white rounded-circle p-3" style="font-size: 40px;"></i>
            </div>
            <div class="col p-1 ms-2">
              <div>
                <h3 class="card-title fw-semibold " style="font-size: 23px;">
                  PHOs</h3>
              </div>
              <div>
                <h3 class="fw-normal"><?= $i; ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Staff card -->
    <div class="col-lg-4 col-md-4">
      <!--Staff card-->
      <?php
      $i = 0;
      $rhus = $function->GetAllRHU();
      if ($rhus) {
        foreach ($rhus as $rhu) :
          $rhu_id = $rhu['rhu_id'];
          $i++;
        endforeach;
      }
      ?>

      <div class="card overflow-hidden">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-3 ps-2 pt-3 align-items-center justify-content-center me-3">
              <i class="ti ti-user bg-primary text-white rounded-circle p-3" style="font-size: 40px;"></i>
            </div>
            <div class="col p-1 ms-2">
              <div>
                <h3 class="card-title fw-semibold " style="font-size: 23px;">
                  RHUs</h3>
              </div>
              <div>
                <h3 class="fw-normal"><?= $i; ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Staff card -->
  </container>
  <!-- End of Row 1 -->
  <div class="row">
    <!-- Bar graph -->
    <div class="col-lg-3 col-md-5 d-flex">
      <div class="card w-100 rounded-2 shadow">
        <div class="card-body rounded-2">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
            <div class="mb-2 mb-sm-0">
              <h5 class="card-title fw-semibold">Action</h5>
            </div>
          </div>
          <div class="flex d-flex flex-column w-100">
            <div class="mb-2">
              <a href="doh-add.php" class="badge btn btn-primary fw-semibold p-3 rounded-2 w-100"> Add DOH Account</a>
            </div>
            <div class="mb-2">
              <a href="pho-add.php" class="badge btn btn-primary fw-semibold mx-0 p-3 rounded-2 w-100"> Add PHO Account</a>
            </div>
            <div class="mb-2">
              <a href="rhu-add.php" class="badge btn btn-primary fw-semibold mx-0 p-3 rounded-2 w-100"> Add RHU Account</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Bar graph -->

    <!-- Ranking per Municipal by the number of cases-->
    <div class="col-lg-9 col-md-7 d-flex align-items-right">
      <div class="card w-100">
        <div class="card-body">
          <div>
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-8">
              <div class="mb-2 mb-sm-0">
                <h5 class="card-title fw-semibold">Recent Actions</h5>
              </div>
            </div>
            <div class="table-responsive">
                <table id="myTable" class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark">
                    <tr>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Date & Time</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Username</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Log Description</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $logs = $function->GetAllAuditLog();
                    if ($logs) {
                      foreach ($logs as $log) :
                        $timestamp = $log['date'];
                        $uid = $log['username'];
                        $description = $log['description'];
                    ?>
                        <tr>
                          <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0"><?= $timestamp; ?></h6>
                          </td>
                          <td class="border-bottom-0">
                            <span class="fw-normal"> <?= $uid;?></span>
                          </td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fw-normal"><?= $description?></p>
                          </td>
                        </tr>

                    <?php

                      endforeach;
                    }

                    ?>
                  </tbody>
                </table>
                <script>
                  $(document).ready
                </script>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>


<?php
include 'footer.php';
?>