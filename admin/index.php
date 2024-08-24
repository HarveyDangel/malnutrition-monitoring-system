<?php
include 'header.php';
?>

<body class="bg-light-gray">
  <!--  Row 1 -->
  <?php
        $msg = Session::get("msg");
        if (isset($msg)) {
          echo $msg;
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
              <i class="ti ti-user bg-success text-white rounded-circle p-3" style="font-size: 40px;"></i>
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
              <i class="ti ti-user bg-success text-white rounded-circle p-3" style="font-size: 40px;"></i>
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
              <i class="ti ti-user bg-success text-white rounded-circle p-3" style="font-size: 40px;"></i>
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
    <div class="col-lg-6 d-flex">
      <div class="card w-100 rounded-2 shadow">
        <div class="card-body rounded-2">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
            <div class="mb-2 mb-sm-0">
              <h5 class="card-title fw-semibold">Action</h5>
            </div>
          </div>
          <div class="flex d-flex flex-column w-50">
            <div class="mb-2 btn btn-secondary">
              <a href="doh-add.php" class="badge btn rounded-3 fw-semibold mx-0"> Add DOH Account</a>
            </div>
            <div class="mb-2 btn btn-secondary">
              <a href="pho-add.php" class="badge btn rounded-3 fw-semibold mx-0"> Add PHO Account</a>
            </div>
            <div class="mb-2 btn btn-secondary">
              <a href="rhu-add.php" class="badge btn rounded-3 fw-semibold mx-0"> Add RHU Account</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Bar graph -->

    <!-- Ranking per Municipal by the number of cases-->
    <div class="col-lg-6 d-flex align-items-right">
      <div class="card w-100">
        <div class="card-body">
          <div>
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-8">
              <div class="mb-2 mb-sm-0">
                <h5 class="card-title fw-semibold">Recent Action</h5>
              </div>
            </div>
            <ul class="timeline-widget mb-0 position-relative mb-n5">
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">time</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">User</div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-normal">Action</div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">time</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">User</div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-normal">Action</div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">time</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">User</div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-normal">Action</div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">time</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">User</div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-normal">Action</div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">time</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">User</div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-normal">Action</div>  
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>


<?php
include 'footer.php';
?>