<?php
include 'header.php';
?>

<body class="bg-light-gray">
  <div class="row">
    <!-- Bar graph -->
    <div class="col-lg-6 d-flex align-items-strech">
      <div class="card w-100 rounded-2 shadow">
        <div class="card-body rounded-2">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
            <div class="mb-2 mb-sm-0">
              <h5 class="card-title fw-semibold">Action</h5>
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
              <!-- <div>
                <select class="form-select">
                  <option value="1">January 2023</option>
                  <option value="2">April 2023</option>
                  <option value="3">July 2023</option>
                  <option value="4">October 2023</option>
                  <option value="1">January 2024</option>
                </select>
              </div> -->
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
  <!-- End Ranking per Municipal by the number of cases-->
</body>


<?php
include 'footer.php';
?>