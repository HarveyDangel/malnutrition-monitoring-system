<?php
include 'header.php';
?>

<body class="bg-light-gray">
  <div>
    <div class="mb-4">
      <button class="btn btn-primary">
        Import File
      </button>
    </div>
  </div>
  <div class="row">
    <div class=" d-flex align-items-strech">
      <div class="card w-100 rounded-2 shadow">
        <div class="card-body rounded-2">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
            <div class="mb-2 mb-sm-0">
              <!-- <div>
                <select class="form-select card-title fw-semibold">
                  <option value="Almeria">Almeria</option>
                  <option value="Biliran">Biliran</option>
                  <option value="Cabucgayan">Cabucgayan</option>
                  <option value="Caibiran">Caibiran</option>
                  <option value="Culaba">Culaba</option>
                  <option value="Kawayan">Kawayan</option>
                  <option value="Mariripi">Maripipi</option>
                  <option value="Naval">Naval</option>
                </select>
              </div> -->
              <div>
                <select class="form-select card-title fw-semibold">
                  <option value="1">Barangay 1</option>
                  <option value="2">Barangay 2</option>
                  <option value="3">Barangay 3</option>
                  <option value="4">Barangay 4</option>
                  <option value="5">Barangay 5</option>
                  <option value="6">Barangay 6</option>
                  <option value="7">Barangay 7</option>
                  <option value="8">Barangay 8</option>
                </select>
              </div>
            </div>
            <div>
              <select class="form-select">
                <option value="2024">2024</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2021">2020</option>
              </select>
            </div>
          </div>
          <div id="municipalChart"></div>
        </div>
      </div>
    </div>
    <!-- End Bar graph -->

    <!-- Ranking per Municipal by the number of cases-->
    <!-- <div class="col-lg-4 d-flex align-items-right">
      <div class="card w-100">
        <div class="card-body">
          <div>
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-8">
              <div class="mb-2 mb-sm-0">
                <h5 class="card-title fw-semibold">Ranking</h5>
              </div>
              <div>
                <select class="form-select">
                  <option value="2024">2024</option>
                  <option value="2023">2023</option>
                  <option value="2022">2022</option>
                  <option value="2021">2021</option>
                  <option value="2020">2020</option>
                </select>
              </div>
            </div>
            <ul class="timeline-widget mb-0 position-relative mb-n5">
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">1</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">Barangay 6</div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">2</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">Barangay 1<a href="javascript:void(0)" class="text-primary d-block fw-normal"></a>
                </div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">3</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">Barangay 10</div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">4</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">Barangay 3<a href="javascript:void(0)" class="text-primary d-block fw-normal"></a>
                </div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">5</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">Barangay 8</div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- End Ranking per Municipal by the number of cases-->
</body>


<?php
include 'footer.php';
?>